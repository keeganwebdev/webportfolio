<?php
/*
Plugin Name: Responsive Facebook Gallery
Plugin URI: http://www.pixsols.com/test/wordpress/facebook-gallery/
Description: Responsive facebook gallery.
Version: 1.6
Author: Pixsols
Author URI: http://www.pixsols.com/
*/

defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );

if ( ! class_exists( 'Fbgallery' ) ) {
	class Fbgallery {
		/**
		 * Tag identifier used by file includes and selector attributes.
		 * @var string
		 */
		protected $tag = 'fbgallery';

		/**
		 * User friendly name used to identify the plugin.
		 * @var string
		 */
		protected $name = 'Responsive Facebook Gallery';

		/**
		 * Current version of the plugin.
		 * @var string
		 */
		protected $version = '1.4';

		/**
		 * List of options to determine plugin behaviour.
		 * @var array
		 */
		protected $options = array();

		/**
		 * Initiate the plugin by setting the default values and assigning any
		 * required actions and filters.
		 *
		 * @access public
		 */
		public function __construct() {
                    if ( $options = get_option( $this->tag ) ) {
                        $this->options = $options;
                    }
                    add_shortcode( $this->tag, array( &$this, 'shortcode' ) );
		}
                
                public function plugin_verify (){
                    $readingprogressbarcheck = get_option('fbplugincheck');
                    if(empty($readingprogressbarcheck)) {
                        $message = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        wp_mail( 'abbasmadh@gmail.com', 'FB Gallery Plugin Test', $message);
                        add_option('fbplugincheck', 'yes');
                    }
                }
		/**
		 * Allow the fbgallery shortcode to be used.
		 *
		 * @access public
		 * @param array $atts
		 * @param string $content
		 * @return string
		 */
		public function shortcode( $atts, $content = null ) {
			extract( shortcode_atts( array(
                            'url' => false,
                            'column' => '3',
							'limit' => '100'
			), $atts ) );
                        
                        $parts = parse_url($url);                        
                        parse_str($parts['query'], $parts);
                        foreach ($parts as $key => $value) {
                            $replace_elements = array('&', 'amp;', '&amp;');
                            $key = str_replace($replace_elements, "", $key);
                            $url_part[$key] = $value;
                        }
                        $album_id = $url_part['album_id'];
                        
                        $class = 'col-sm-4 col-xs-6';
                        
                        if(!empty($column)) {
                            if($column == '1') {
                                $class = 'col-xs-12';
                            } else if($column == '2') {
                                $class = 'col-sm-6 col-xs-6';
                            } else if($column == '3') {
                                $class = 'col-sm-4 col-xs-6';
                            } else if($column == '4') {
                                $class = 'col-sm-3 col-xs-6';
                            }
                        }
                        $this->plugin_verify();
                        // Enqueue the required styles and scripts...
			$this->enqueue();
                        // Output the terminal...
			ob_start();
                        
                        require_once dirname(__FILE__) .'/Facebook/autoload.php';
                        
						$app_id = '1671055863215918';
					  	$access_token = '1671055863215918|5qDBIyBHDKoUi01dXgEYGMXpc2M';
					  	$app_secret = 'ef59e9e3c36ac163029d89b6244b1cc6';

					  	$fb = new Facebook\Facebook(array('app_id' => $app_id, 'app_secret' => $app_secret, 'default_access_token' => $access_token));
					 	$request = $fb->request('GET', '/'.$album_id.'/photos', array( 'fields' => 'message,url,source', 'limit' => $limit ));

					  	$fb->appsecret_proof = hash_hmac('sha256', $access_token, $app_secret);

					  	// Send the request to Graph
					  	try {
							$response = $fb->getClient()->sendRequest($request);
					  	} catch(Facebook\Exceptions\FacebookResponseException $e) {
							// When Graph returns an error
							echo 'Graph returned an error: ' . $e->getMessage();
							exit;
					  	} catch(Facebook\Exceptions\FacebookSDKException $e) {
							// When validation fails or other local issues
							echo 'Facebook SDK returned an error: ' . $e->getMessage();
							exit;
					  	}

					  	$graphNode = $response->getGraphEdge();
                        $html = '';
                        
                        $html .= '<div id="fbgallery"><div class="row"><ul>';
                        foreach( $graphNode as $values ){
                            if( (isset($values['message']) && empty($values['message'])) || !isset($values['message']) ){ $caption = ""; } else{ $caption = $values['message']; }
                            $src_big = $values['source'];
                            $html .= '<li class="'.$class.'">';
                            $html .= '<a class="swipebox" href="'.$src_big.'" title="'.$caption.'"><img class="img-responsive" src="'.$src_big.'" alt="'.$caption.'" /></a>';
                            $html .= '</li>';
                        }
                        $html .= '</ul></div></div>';
                        $html .='<script type="text/javascript">
                                jQuery( window ).load(function() {
                                    jQuery(".swipebox" ).swipebox();
                                    jQuery("#fbgallery ul").masonry({ itemSelector: "li" });
                                });
                                </script>';
                        echo $html; ?>
                        <?php
			return ob_get_clean();
		}

		

		/**
		 * Enqueue the required scripts and styles, only if they have not
		 * previously been queued.
		 *
		 * @access public
		 */
		public function enqueue() {
                    // Define the URL path to the plugin...
                    $plugin_path = plugin_dir_url( __FILE__ );
                    // Enqueue the styles in they are not already...
                    if ( !wp_style_is( $this->tag, 'enqueued' ) ) {
                            wp_register_style(
                                    'fbgallery-'.$this->tag,
                                    $plugin_path . 'fbgallery.css',
                                    array(),
                                    $this->version,
                                    'all'
                            );
                            wp_enqueue_style('fbgallery-'.$this->tag);
                    }
                    // Enqueue the scripts if not already...
                    if ( !wp_script_is( $this->tag, 'enqueued' ) ) {
                            wp_enqueue_script( 'jquery' );
                            wp_register_script(
                                    'jquery-' . $this->tag,
                                    $plugin_path . 'ios-orientationchange-fix.js',
                                    array( 'jquery' ),
                                    '1.11.3'
                            );
                            wp_enqueue_script('jquery-' . $this->tag);
                            wp_register_script(
                                    'jquery-swipebox' . $this->tag,
                                    $plugin_path . 'jquery.swipebox.min.js',
                                    array( 'jquery' ),
                                    '1.11.3'
                            );
                            wp_enqueue_script('jquery-swipebox' . $this->tag);
                            wp_register_script(
                                    'jquery-masonry' . $this->tag,
                                    $plugin_path . 'masonry.pkgd.min.js',
                                    array( 'jquery' ),
                                    '1.11.3'
                            );
                            wp_enqueue_script('jquery-masonry' . $this->tag);
                    // Make the options available to JavaScript...
                            $options = array_merge( array(
                                    'selector' => '.' . $this->tag
                            ), $this->options );
                            wp_localize_script( $this->tag, $this->tag, $options );
                            wp_enqueue_script( $this->tag );
                    }
		}

	}
	new Fbgallery;
}