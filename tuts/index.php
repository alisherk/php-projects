<?php

//MySQLi or PDO 
require('config/db_connect.php');
//construct query
$sql = 'SELECT * FROM pizzas ORDER BY created_at';

//make query & get result
$result = mysqli_query($conn, $sql); 

//fetch the resulting rows as an array
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result); 

//close the connection 
mysqli_close($conn);

//print_r(explode(',', $pizzas[0]['ingredients']));
?>

<!DOCTYPE html>
<html>

<head>

<body>
  <?php include('templates/header.php') ?>

  <h4 class="center grey-text"> Pizzas! </h4>

  <div class="container"> 
     <div class="row">
      <?php foreach($pizzas as $pizza): ?>
          <div class="col s6 md3">
             <div class="card z-depth-0"> 
               <div class="card-content center"> 
                  <h6> <?php echo htmlspecialchars($pizza['title']); ?> </h6>
                  <ul>
                  <?php foreach(explode(',', $pizza['ingredients']) as $ing ) {?>
                     <li> <?php echo htmlspecialchars($ing); ?> </li>
                  <?php }?>
                 </ul>
               </div>
               <div class="card-action right-align"> 
                 <a class="brand-text" href="#">more info </a>
               </div>
             </div>
          </div>
      <?php endforeach; ?>
        
    </div>
  </div>

  <?php include('templates/footer.php') ?>
</body>

</html>