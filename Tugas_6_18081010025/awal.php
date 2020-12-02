<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/model.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#demo").load("18081010025.php", function(responseTxt, statusTxt, xhr){
      if(statusTxt == "success")
        alert("kamu akan menuju ke profilku :)))");
      if(statusTxt == "error")
        alert("Error: " + xhr.status + ": " + xhr.statusText);
    });
  });
});
</script>
</head>
<body>

<div id="demo">
<h2>Jangan Lupa Subscribes !!!</h2>
<button  type="button" onclick="loadDoc()">Subscribes</button>

</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
}
</script>

</body>
</html>