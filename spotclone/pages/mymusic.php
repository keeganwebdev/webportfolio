<div class="playlistsContainer">

	<div class="gridViewContainer">
		<h2>PLAYLISTS</h2>

		<div class="buttonItems">
			<button class="button green" onclick="createPlaylist()">NEW PLAYLIST</button>
		</div>
<?php include("../functions/includedfiles.php");
$username=$userLoggedIn->getUsername();
 $albumQuery =mysqli_query($con,"SELECT * FROM albums WHERE title LIKE '$term%'LIMIT 10");
if(mysqli_fetch_arrau($albumQuery)){
  echo "<span class='noResults'>No albums found match ".$term."</span>";

}
while($row=mysqli_fetch_array($albumQuery)){
  $playlist=new Playlist($con,$row);
  echo "<div class='gridViewItem' role='link' tabindex='0'
        onclick='openPage(\"playlist.php?id=" . $playlist->getId() . "\")'>

      <div class='playlistImage'>
        <img src='../assets/images/icons/playlist.png'>
      </div>

      <div class='gridViewInfo'>"
        . $playlist->getName() .
      "</div>

    </div>";
}
 ?>
