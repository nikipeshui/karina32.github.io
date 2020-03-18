<?php
$name = $_POST['name'];
$email = $_POST['email'];
$rewiew = $_POST['rewiew'];
$conn = mysqli_connect("localhost", "s97762ev_site", "7EeD9Nds", "s97762ev_site");
if (strlen($_POST['rewiew']) < 10 or strlen($_POST['rewiew']) > 10 )
exit(["Размер отзыва должен быть 10-100 символов"]);
else { 
    $sql = "INSERT INTO `rewiews`(`email`, `name`, `rewiew`) VALUES ('".$email."','".$name."','".$rewiew."')"; 
}

if (mysqli_query($conn, $sql)) {
      echo header( "Location: http://s97762ev.beget.tech/rewiews.php" );
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
