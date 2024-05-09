<?php
include("database.php");



if(isset($_POST["submit"]))
{

    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $conf_password= $_POST['confirm_password'];


    $error =array();

    if(empty($name) || empty($email) || empty($password) || empty($conf_password))
    {
        array_push($error,'All fields required');
       
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        array_push($error,'Invalid email');
    }

    if(strlen($password)<8)
    {
        array_push($error,'Password Sould be atleast 8 char long');
        
    }

    if($password!==$conf_password)
    {
        array_push($error,'Password did not match');
    }

//check duplicate mail
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);  
    //bind parameter with place holder
    $stmt->execute();
    $result = $stmt->get_result();
    //results from executed statement
    $stmt->close();

    if ($result->num_rows > 0) {
        array_push($error,'email already exsits');
    }

    if(count($error)> 0)
    {
    
        $Err="error";
    }

    else{
        
       $hashed_password = password_hash($password, PASSWORD_DEFAULT);


       $sql = "INSERT INTO users (full_name, email, passwords)
       VALUES ('$name', '$email', '$hashed_password')";          
        if (mysqli_query($conn, $sql)) {
            header("Location: ../loginpage/login.php");
        } else {
          $der1= "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
       
       $conn->close();


    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="./register.css">
  <title>Register</title>
</head>

<body>
  <section class="reg-header">
    <nav>
      <a href="../index.html"> <img src="../res/logo.svg" alt="logo" class="logo"> </a>

      <div class="navlink" id="navLinks">

        <img src="./res/close.svg" alt="close" class="fa" onclick="hidemenu()">
        <ul>
          <li><a href="../index.html">Home</a></li>
          <li><a href="../index.html#sell2">Catagory</a></li>
          <li><a href="../index.html#abt">About</a></li>
          <li><a href="../contect/contect.php">Contect</a></li>
        </ul>

      </div>



      <img src="./res/menu.svg" alt="menu" class="fa" onclick="showmenu()">

    </nav>

  </section>


  <!-- -----------------------------------------------actual form----------------- -->




  <div class="regbg">
<!-- ----------------------------- -->
               
                <?php
                        if(isset($Err)) {
                        
                          echo '<h1 id="message">';
                        
                              echo"You are not registered ";
                        
                          echo '</h1>';
                          echo "<script>
                              setTimeout(function() {
                                  document.getElementById('message').innerText = '';
                              }, 2000);
                          </script>";}
             
                ?>
       
 <!-- ----------------- -->

    <h1 class="reghe">Registration Form</h1>

    <form action="./registers.php" method="POST">

      <div>
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your full name">
      </div>

      <div>
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

      </div>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password">

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password" name="confirm_password" placeholder="Re-enter your password">

      <div class="checkbox">
        <label>
          <input type="checkbox" name="terms" required> I agree to the terms and conditions
        </label>
      </div>

      <input class="sbtn" type="submit" value="Submit" name="submit">


    </form>

  </div>





  <!-- foteer----------------------- -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-company">
        <h2>Ebid.com</h2>
        <p>Where Every Bid Unveils a Treasure: Your Online Auction Destination</p>
      </div>
      <div class="footer-features">
        <h2>Features</h2>
        <ul>
          <li><a href="../index.html#cat">Art</a></li>
          <li><a href="../index.html#cat">Antique</a></li>
          <li><a href="../index.html#cat">Second hand</a></li>
        </ul>
      </div>
      <div class="footer-contact">
        <h2>Contact</h2>
        <ul>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Instagram</a></li>
          <li><a href="#">LinkdIn</a></li>
          <li><a href="#">Email: info@ebid.com</a></li>
        </ul>
      </div>
      <div class="footer-logo">
        <img src="../res/logo.svg" alt="Company Logo">
      </div>
    </div>

  </footer>


  <script src="../main.js"></script>

</body>

</html>
