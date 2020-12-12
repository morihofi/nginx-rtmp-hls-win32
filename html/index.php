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

<?php

require_once("navigation.inc.php");

?>

<main role="main" class="container">


<script type="text/javascript">
$(document).ready(function() {
    $("#refresh").load("ajax_streams.php");
    var refreshId = setInterval(function() {
        $("#refresh").load('ajax_streams.php?' + 1*new Date());
        
    }, 10000);
});


</script>

<div id="refresh">
   <img src="loading.gif" /> Loading...
</div>


	
<?php
require_once("footer.inc.php");
?>
</main>

</body>
</html>
