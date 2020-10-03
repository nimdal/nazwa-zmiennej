<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8" />
     </head>
<body>

<input type="text" value="<?php include("/home/dev/public_html/nazwa_zmiennej/losuj.php"); ?>" id="myInput">

<button onclick="myFunction()">Kopiuj do schowka</button>

<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>

<button onClick="window.location.reload();">Losuj kolejną</button>

</body>
</html>