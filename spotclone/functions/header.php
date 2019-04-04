<?php
include("config.php");
include("classes/User.php");
include("classes/Artist.php");
include("classes/Album.php");
include("classes/Song.php");
include("classes/Playlist.php");
//session_destroy(); LOGOUT

if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
	echo "<script>userLoggedIn = '$userLoggedIn';</script>";
}
else {
	header("Location: register.php");
}

?>

<html>
<head>
	<title>Welcome to Slotify!</title>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/script.js"></script>
</head>


<body>

	<div id="mainContainer">

		<div id="topContainer">

			<?php include("navBarContainer.php"); ?>

			<div id="mainViewContainer">

				<div id="mainContent">
