<?php 

require_once("config.inc.php");

?>
<html>
<head>
<script src="jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<link href="starter-template.css" rel="stylesheet">


</head>
<body>

<main role="main" class="container">
<?php $streams = glob("hls/*.m3u8"); ?>
    <?php
    if(count($streams)) {
      //natcasesort($streams);
      foreach($streams as $stream) {
?>


 
<h2><?php echo base64_decode(basename($stream, ".m3u8")); ?></h2>
<a class="btn btn-primary" href="player.php?stream=<?php echo basename($stream, ".m3u8"); ?>">Play</a>
<hr>





<?php


        }} else {
			?>
			
<div class="alert alert-danger" role="alert">
  There are no active streams.
</div>
		  <?php
        }
    ?>

