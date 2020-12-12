<?php 
require_once("config.inc.php");

$streamname = $_GET["stream"];


?>
<html>
<head>
<link href="video-js.css" rel="stylesheet">
<style>
#video-player {

width: 100%;
height: 480;

}


</style>
<script src="jquery-3.5.1.min.js"></script>
<link href="videojs.watermark.css" rel="stylesheet">
<script src='videojs.watermark.js'></script>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<link href="starter-template.css" rel="stylesheet">
</head>
<body>
<?php

require_once("navigation.inc.php");

?>

<main role="main" class="container">


<?php 

	?>
<video id="video-player"  class="video-js vjs-default-skin" controls> 
  <source src="./hls/<?php echo $streamname; ?>.m3u8" type="application/x-mpegURL">
</video>

<h2><?php echo base64_decode($streamname); ?></h2>


<script src="video.js"></script>
<script src="videojs-contrib-hls.min.js"></script>

<script>
var player = videojs('video-player');
player.play();
</script>


<?php
require_once("footer.inc.php");
?>

</main>


</body>
</html>