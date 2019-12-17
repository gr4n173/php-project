<!DOCTYPE html>

<?php



if(isset($_GET['source'])){
  highlight_file(__FILE__);
  die();
}

if(isset($_GET['password'])) {
  $what_you_answered = $_GET['password'];
  $what_you_cannot_say = 'pretty_good_passphrase';
  $what_you_actually_said = preg_replace(
                                  "/$what_you_cannot_say/",' ', $what_you_answered);

    if($what_you_actually_said === $what_you_cannot_say){
      worthy_password_is_worthy();

      header('location: /flag.php');

    }

}
 ?>





<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <header id = "showcase">

      <h2>Words, Words , I DESIRE WORDS!!!</h2>

      <p>Get The <code> worthy_password_is_worthy(); </code> </p>

      <a target = " _blank "href="?source" class = "button">View The Source</a>

    </header>

  </body>
</html>
