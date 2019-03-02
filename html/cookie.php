<?php
echo "<pre>";print_r($_COOKIE);echo "</pre>";
?>


<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>


<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  /* xhttp.open("GET", "cookie.php", true); */
  xhttp.open("GET", "https://jetairways.globallinker.com", true);
  xhttp.send();
}
</script>

<iframe/>

</body>
</html>

<?php
    //setcookie('a', $_GET['c']);
   // header("Location: https://jetairways.globallinker.com");
?>
