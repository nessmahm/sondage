<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <title>Submition</title>
    <style>
        .sondage {
        margin:auto  ;
        background-color: rgb(230, 169, 211);
        max-width: 600px;
        margin-top: 50px;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        padding: 50px;
    }
       </style>
</head>
<body>
   
<?php   

   if(!isset($_COOKIE["vote"]))    {
      setcookie("vote",$_POST["vote"],time()+60*2);
      $msg="successfully submitted 👍";
   }
   else 
      $msg="Vous avez deja voté a " .  $_COOKIE["vote"] . " !!" ;
?>
      



    <div class="sondage">
        <h1><?= $msg ?></h1>
    </div>
</body>
</html>
