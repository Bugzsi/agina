<html>

 <head>
  <link rel="stylesheet" href="style.css" type="text/css">
 </head>


 <body>
<h1 align = "center"> Auction House </h1>


  <form action="" method="POST">

  
   <label> Username: <br>
    <input type="text" name="username" class="Input" style="width: 225px" required>
   </label>
   
   </br>
   
   <label> Trade Text: <br>
    <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
   </label>
   
   </br>
   
   <label> Server: <br>
   <input type="text" name="servers" class="Input" style="width: 225px" required>
   </label>
   
   </br>
   
   <input type="submit" name="fubmit" value="Submit Comment" class="Submit">

  
   
   
  

   
   
   
  </form>

 </body>

</html>


<?php
 
 if($_POST['fubmit']){
  print "<h1>Your comment has been submitted!</h1>";
  header("Location: http://localhost/project/Project.php");

  $Player_Name = $_POST['username'];
  
  $Server = $_POST['servers'];
  
  $Trade_Text = $_POST['Comment'];

 
  
  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);
 

 
  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Player_Name."</b>".$Server."<br>".$Trade_Text."</br><br>".$old_comments."</br>";
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>

