<?php 

require_once("config.inc.php");

?>
<html>
<head>
<script src="jquery-3.5.1.min.js"></script>
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
<script src="./bootstrap/js/bootstrap.min.js"></script>
<link href="starter-template.css" rel="stylesheet">
<script>
function copyTextToClipboard(text) {
  var textArea = document.createElement("textarea");

  //
  // *** This styling is an extra step which is likely not required. ***
  //
  // Why is it here? To ensure:
  // 1. the element is able to have focus and selection.
  // 2. if element was to flash render it has minimal visual impact.
  // 3. less flakyness with selection and copying which **might** occur if
  //    the textarea element is not visible.
  //
  // The likelihood is the element won't even render, not even a
  // flash, so some of these are just precautions. However in
  // Internet Explorer the element is visible whilst the popup
  // box asking the user for permission for the web page to
  // copy to the clipboard.
  //

  // Place in top-left corner of screen regardless of scroll position.
  textArea.style.position = 'fixed';
  textArea.style.top = 0;
  textArea.style.left = 0;

  // Ensure it has a small width and height. Setting to 1px / 1em
  // doesn't work as this gives a negative w/h on some browsers.
  textArea.style.width = '2em';
  textArea.style.height = '2em';

  // We don't need padding, reducing the size if it does flash render.
  textArea.style.padding = 0;

  // Clean up any borders.
  textArea.style.border = 'none';
  textArea.style.outline = 'none';
  textArea.style.boxShadow = 'none';

  // Avoid flash of white box if rendered for any reason.
  textArea.style.background = 'transparent';


  textArea.value = text;

  document.body.appendChild(textArea);
  textArea.focus();
  textArea.select();

  try {
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Copying text command was ' + msg);
	
	if (successful == true){
		 $("#copysuccessModal").modal('show');
	}else{
		 $("#copynosuccessModal").modal('show');
		
	}
	
  } catch (err) {
    console.log('Oops, unable to copy');
	$("#copynosuccessModal").modal('show');
  }

  document.body.removeChild(textArea);
}

</script>
</head>
<body>
<?php

require_once("navigation.inc.php");

?>

<main role="main" class="container">

<text for="streamname">Stream name:</text>
<input id="streamname" value="" onchange="clear();" placeholder="My Stream" class="form-control" />
<button id="btn_generate" class="btn btn-primary">Generate</button>
<br>
<br>
<div class="alert alert-primary" role="alert">
<b>Your Streamkey:&nbsp;</b><code><text id="streamkey"></text></code>
<button class="btn btn-secondary btn-sm"  onclick="copyTextToClipboard($('#streamkey').html());">Copy</button>
</div>


<script>
$( "#btn_generate" ).click(function() {
	$("#streamkey").html(btoa($("#streamname").val()));
});


function clear(){
	
	$("#streamkey").html("");
	
}



</script>

<!--# Modal Area #-->
<div class="modal fade" id="copysuccessModal" tabindex="-1" aria-labelledby="copysuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="copysuccessModalLabel">Copy Streamkey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Streamkey successfully copied!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="copynosuccessModal" tabindex="-1" aria-labelledby="copynosuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="copynosuccessModalLabel">Copy Streamkey</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Streamkey wasn't successfully copied!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
require_once("footer.inc.php");
?>

</main>

</body>
</html>