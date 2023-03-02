<?php
$score = 50;

/*
convert number to string 
option 1 using strval method
$num = 42;
$num_string = strval($num);
echo $num_string; // outputs: "42"


option 2 using concatenation
$num = 42;
$num_string = "" . $num;
echo $num_string; // outputs: "42"

convert str tp number 
option 1 using intval function
$str = "42";
$int = intval($str);
echo $int; // outputs: 42

option 2 using type casting
$str = "42";
$int = (int)$str;
echo $int; // outputs: 42


*/

//ternary operator
//echo $score < 40 ? "hish score" : "low score";

//super globals
// $_GET['name'], $_POST['name']; 
//echo $_SERVER['SERVER_NAME'] . '<br />';
//echo $_SERVER['REQUEST_METHOD'] . '<br />';
//echo $_SERVER['SCRIPT_FILENAME'] . '<br />';
//echo $_SERVER['PHP_SELF'] . '<br />';  //path ralative to localhost
//echo $_SERVER['REQUEST_METHOD'] . '<br />';

//null coalescing operator
//name = $_SESSION['name'] ?? 'Guest'; 

//cookies 

if(isset($_POST['submit'])){

    //cookie for gender
    setcookie('gender', $_POST['gender'], time() + 86400);

    session_start();

    $_SESSION['name'] = $_POST['name'];

    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>php tuts</title>
</head>

<body>
<!--     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit" value="submit">
    </form> -->

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<input type="text" name="name">
		<select name="gender">
			<option value="male">male</option>
			<option value="female">female</option>
		</select>
		<input type="submit" name="submit" value="submit">
	</form>

</body>

</html>