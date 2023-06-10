<!DOCTYPE html>
<html>
    <head>
        <title>Geekbytes Solutions</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <nav>
            <img src="images/logo.png">
            <ul class="navbar">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
        </nav>
       <section class="home">
        <div class="container">
            <div class="main-text">
              <h1>WE PROVIDE 
                <br>THE BEST 
                <br><span id="spin"></span>
                 <br>FOR YOU.</h1>
            </div>
            <div class="arrow">
              <h2>Send us a message</h2>
            </div>
        </div>
        <div class="form">
          <form action="index.php" method="post">
            <h1><img src="images/email.png">CONTACT US</h1>
            <input type="text" id="name" name="name" required placeholder="NAME">
            <input type="email" id="email" name="email" required placeholder="E-MAIL">
            <textarea id="message" name="message" rows="5" required placeholder="MESSAGE"></textarea>
            <button id="submit" name="submit" type="submit">SUBMIT</button>
          </form> 
          <?php
            $host="localhost";
            $user="root";
            $password="";
            $db="geekbytes";
            $name="";
            $email="";
            $message="";

        $conn = new mysqli($host,$user,$password,$db);

        if($conn->connect_error)
        {
            die("Connection Failed" . $conn->connect_error);
        }
        
        if(isset($_POST['submit']))
        {
      $name = isset($_POST['name'])?$_POST['name']:'';
      $email = $_POST['email']?$_POST['email']:'';
      $message = $_POST['message']?$_POST['message']:'';
       }

        $sql = "INSERT INTO contact (name , email , message )  VALUES ('$name' , '$email' , '$message')";
 
        if($conn->query($sql) === TRUE && isset($_POST['submit']))
        { 
            echo "<script>alert('Message Sent.');</script>";
            unset($_POST['submit']);
        }
        else if($conn->query($sql) != TRUE && isset($_POST['submit']))
        {
            echo "<script>alert('ERROR');</script>";
            echo "ERROR".$sql."<br>".$conn->error;
        }

    $conn->close();
          ?>
        </div>
       </section>
       <script type="text/javascript" src="script.js"></script>
    </body>
</html>