<!DOCTYPE HTML>
<html>
<head
    <?php  session_start();?>
    <meta charset="utf-8">
    <title>Your Classes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
		<link href="../css/main/sidebar/styles.css" rel="stylesheet">
    	<link href="../css/main/main.css" rel="stylesheet">
      <link href="../css/main/flexbox.css" rel="stylesheet">
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main/font.css" rel="stylesheet">
    <link href="../css/main/table.css" rel="stylesheet">
    <link href="../css/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script scr="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../js/jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/jquery.timepicker.css" />

  <script type="text/javascript" src="../css/lib/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/lib/bootstrap-datepicker.css" />
  <script src="wickedpicker.js"></script>

  <script type="text/javascript" src="../css/lib/site.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/lib/site.css" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="../css/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="../css/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->



    <link href="http://fonts.googleapis.com/css?family=Chewy" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Terminal+Dosis+Light" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">

    <link href="../css/main/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo">
                        <a href="../../index.php" id="divSiteTitle"><img src="../../img/tafe-brisbane.png"></a><br />
                        <?php  if (!isset($_SESSION['login'])){
                          echo '
                        <form action="../../pages/login.php">
                            <input type="submit" value="Login">
                          </form> ';
                        }else{
                          echo '
                        <form action="../../pages/logout.php">
                            <input type="submit" value="Logout">
                          </form> ';
                        } ?>

                       
                    </div>

	            </div>
            </div>
            <div class="row-fluid">
                <div class="span12">

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown"><a href="../../pages/login.php">Home</a></li>

                              
                            </ul>
                        </div>
                    </div>
                    </div>

	            </div>
            </div>
    </html>