<?php
  session_start();


?>

<!--  Por método POST se env{an varibles de tama{o ilimitado-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sesión con PHP y Cookies</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
  if (isset($_SESSION['MiSession'])){
    echo "<div class='pull-right'><a  href='salir.php'>salir</a></div><p class='pull-right'>Hola " . $_SESSION['MiSession'] . " </p> ";



    include_once("DemoCollector.php"); 


$id =1;

$DemoCollectorObj = new DemoCollector();
  echo "<br><br>";


 ?>
 

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
      </tr>
    </thead>
    <tbody>


 <?php 
foreach ($DemoCollectorObj->showDemos() as $c){
 ?> 
      <tr>
        <td> <?php echo " ".$c->getIdDemo() ?> </td>
        <td> <?php echo " ".$c->getNombre() ?></td>
        <td>
          <?php
              echo "<a href='formularioDemoEditar.php?id=" .$c->getIdDemo()."'>Editar </a>";                                     
          ?>

        </td>
      </tr>
<?php
 
}

?>
    </tbody>
  </table>
</div>


<?php

  } #end if session
  else {
?>

  <div class="container">
  <h2>Vertical (basic) form</h2>




    <form action="login.php" method="post"> <!-- manda el modo POST a la página LOGIN.PHP -->

      <fieldset>
        <label>User:</label>
           <input type="text" name="user">
        <label>Password:</label>
           <input type="password" name="password">
     <button type="submit">Submit</button>
     </fieldset>
    </form> 
    </div>

<?php } ?>





</body>
</html>

