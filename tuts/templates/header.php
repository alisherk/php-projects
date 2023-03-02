<?php
session_start();

if($_SERVER['QUERY_STRING'] === 'noname') {
  
  unset($_SESSION['name']); //unset sessions vars

  // session_unset(); unset all
}

//null coalesce operator
$name = $_SESSION['name'] ?? 'Guest'; 

$gender = $_COOKIE['gender'] ?? 'Unknown';

?>


<head>
	<title>Ninja Pizza</title>
	<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style type="text/css">
	  .brand{
	  	background: #cbb09c !important;
	  }
  	.brand-text{
  		color: #cbb09c !important;
  	}
  </style>
</head>
<body class="grey lighten-4">
	<nav class="white z-depth-0">
    <div class="container">
      <a href="index.php" class="brand-logo brand-text">Ninja Pizza</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li><a href="add.php" class="btn brand z-depth-0">Add a Pizza</a></li>
        <li class="grey-text"> Hello <?php echo htmlspecialchars($name); ?> </li>
        <li class="grey-text"> Gender <?php echo htmlspecialchars($gender); ?> </li>
      </ul>
    </div>
  </nav>