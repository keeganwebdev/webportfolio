<?php include("../functions/includedfiles.php");

if(isset($_GET['id'])){
  $artistId=$_GET['id'];
}else{
  header("Location:../index.php");
}
$artist = new Artist($con,$artistId); ?>
<div class="entityInfo">
  <div class="centerSection">
    <div class="artistInfo">
      <h1 class="artistName"><?php echo $artist->getName();?></h1>
      <div class="headerButtons">
        <button class="button green" onclick="playFirstSong()">PLAY</button>
      </div>
    </div>
  </div>
</div>

<script>
var tempSongIds='<?php echo json_encode($songIdArray);?>';
tempPlaylist=JSON.parse(tempSongIds);
</script>

<?php $albumQuery=mysqli_query($con,"SELECT * FROM albums WHERE artist='$artistId'");
while($row=mysqli_fetch_array($albumQuery)){

}
  ?>
<?php
$songsIdarray=$artist->getSongIds();
$i=1;
foreach($songsIdarray==$songId){
  if($i>5){
break;
  }
}
$albumSong=new Song($con,$songId);
$albumArtist=$albumSong->getArtist();
?>
