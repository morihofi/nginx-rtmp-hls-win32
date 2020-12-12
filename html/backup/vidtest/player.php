<?php
			$id = $_GET['watch'];
			


         //$id = "00002"

?>
<html>
<head>
<title>Javascript Test</title>
<script type="text/javascript" src="./jw6/jwplayer.js"></script>


<style>
.download {
	-moz-box-shadow:inset 0px 39px 0px -24px #e67a73;
	-webkit-box-shadow:inset 0px 39px 0px -24px #e67a73;
	box-shadow:inset 0px 39px 0px -24px #e67a73;
	background-color:#e4685d;
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	padding:6px 15px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.download:hover {
	background-color:#eb675e;
}
.download:active {
	position:relative;
	top:1px;
}


</style>


</head>
<body>

<a href="./"><button>Zur&uuml;ck</button></a>
<div id="myElement">Loading the player...</div>
<form name="jump">
        <table width="100" border="0" cellpadding="0" cellspacing="2" >
         <tr>
          <td><select name="menu">
        <option value="./video/1080/<?php echo $id; ?>.mp4">1080p</option>
        <option value="./video/720/<?php echo $id; ?>.mp4">720p</option>
		<option value="./video/480/<?php echo $id; ?>.mp4">480p</option>
		<option value="./video/360/<?php echo $id; ?>.mp4">360p</option>
		<option value="./video/240/<?php echo $id; ?>.mp4">240p</option>
        </select></td>
          <td><a href="javascript:location=document.jump.menu.options[document.jump.menu.selectedIndex].value;" class="download">Herunterladen</a></td>
         </tr>
        </table>
</form>




<script type="text/javascript">
jwplayer("myElement").setup({
  "playlist": [{

    "sources": [{
		
    "file": "./video/1080/<?php echo $id; ?>.mp4",
    "label": "1080p",
	"default": true
    },{
    "file": "./video/720/<?php echo $id; ?>.mp4",
    "label": "720p"
    },{
    "file": "./video/480/<?php echo $id; ?>.mp4",
    "label": "480p"
    },{
    "file": "./video/360/<?php echo $id; ?>.mp4",
    "label": "360p"
    },{
    "file": "./video/240/<?php echo $id; ?>.mp4",
    "label": "240p"
    }]
	  }],
	"image": "./image/<?php echo $id; ?>.png",
	"abouttext": "",
	"aboutlink": "#",
	//Player breite x höhe
	"width": "640",
	"height": "480",
	 plugins: {
    "./plugin/overlay.js": {
      text: "Video Player"
    },
	"cast": {}
  }

});




</script>



</body>
</html>