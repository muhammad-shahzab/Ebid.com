<?php



include('database.php');
if(isset($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = "SELECT passwords FROM users WHERE email = '$email'";
$hs = $conn->query($hashed_password);

if($hs->num_rows > 0){
    $row = $hs->fetch_assoc();
    if(password_verify($password, $row["passwords"])){

        

        header("Location: ../index.html");
    }
}

}
$conn->close();

?>