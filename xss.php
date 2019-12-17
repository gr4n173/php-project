<!DOCTYPE html>

<?php
$cookie_name = "flag";
$cookie_value = "dmVjdG9yX2N0ZiB7e3RoaXMgaXMgdGhlIGZsYWd9fQ";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>


<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1> Pop the flag using the given input field</h1>





    <form class="" action="#" method="post">

    <label for="">Your Message</label> <br>
      <input type="text" id="field">
      <br> <br>
      <input type="button" class = "btn btn-primary"value="Submit" onclick="post()">
    <br><br>
    <div id="content"></div>
    <br><br>

    <script>
      function post(){
        var word = document.getElementById('field').value;
      document.getElementById('content').innerHTML=word;
      document.getElementById('field').value="";
      }
    </script>

    </form>


      </div>

    </div>

  </body>
</html>
