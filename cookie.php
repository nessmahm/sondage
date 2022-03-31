
<?php   

if(!isset($_COOKIE["vote"]))    {
setcookie("vote",$_POST["vote"],time()+60*2);
header("location: index.html"); 
}
 else {
      ?>
       <script>  
          alert("Vous avez deja voté a <?=  $_COOKIE["vote"] ?>!!!!!")  ; </script>
    

<?php }


?>

