
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./contect.css">
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

<div class="cntbg">

                    <h2 class="conthead">Contact Form</h2>
  <form action="contact.php" method="post">  <label for="email">Email Address:</label>
    <input type="email" id="email" name="email" placeholder="Enter your email">

    <label for="phone">Phone Number:</label>
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number (optional)">

    <label for="message">Message:</label>
    <textarea id="message" name="message" placeholder="Enter your message"></textarea>

    <input type="submit" value="Send">
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