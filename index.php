<!DOCTYPE html>
<html>
    <head>
        <title>Geekbytes Solutions</title>
    </head>
    <style>
        body{
            margin: 0;
            padding: 0;
        }

        nav{
            background: linear-gradient(to bottom right,#1f1f1f,#000000) ;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav img{
            width: 15%;
        }

        .navbar {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          text-align: right;
        }

        .navbar li {
          display: inline-block;
        }

        .navbar li a {
          display: block;
          color: white;
          text-align: center;
          margin-right: 5px;
          padding: 15px;
          text-decoration: none;
          font-size: 18px;
          text-transform: uppercase;
        }

        .navbar li a:hover {
           background-color: #010320;
        }

        .home{
            height:90vh; 
            background: linear-gradient(to bottom right, #020865,#02063d, #010320,#010320,#010320,#000000) ; 
            display: flex;
        }
        .container{
            flex: 1;
        }
        .form{
            flex:1;
            background-color: white;
            justify-items: center;
            
        }

       .form form{
            display: flex;
            flex-direction: column;
            background: linear-gradient(to bottom right, #020865,#02063d, #010320,#010320,#010320,#000000) ;
            margin: 40px;
            border-radius: 10px;
            margin-top: 10%;            
       }

       input, textarea{
        margin: 20px 50px;
        padding: 10px;
        border-radius: 5px;
        border: none;
       }

       button{
        width: fit-content;
        margin: 20px;
        padding: 10px 40px;
        background-color: #32C0F7;
        color: #010320;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        align-self: center;
       }

       h1{
        color: white;
        align-self: center;
       }

       .arrow{
        margin-left: 30%;
        padding: 30px;
        background-color: #32C0F7;
        clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%);
        width: fit-content;
        margin-top: 10%;
        color: #010320;
        font-weight: 900;
       }

       .arrow:hover{
        animation: 0.5s rotate;
        cursor: pointer;
       }

       .main-text h1{
        font-size: 60px;
        margin: 20px;
        margin-top: 10%;
       }

       #spin{
        font-style: italic;
       }

       #spin:after{
        content: "";
        animation: spin 3s linear infinite;
       }
       
       img{
        width: 30px;
        padding: 0px 10px;
        vertical-align: bottom;
       }

       @keyframes rotate{
        0%{
            transform: rotate(0);
        }
        100%{
            transform: rotate(360deg);
        }
       }

       @keyframes spin{
        0%{
            content: "WEB DEVELOPERS";
        }
        25%{
            content: "APP DEVELOPERS";
            color: blue;
        }
        50%{
            content: "LOGO DESIGNS";
            color: rgb(9, 37, 2);
        }
        75%{
            content: "ML EXPERTS";
            color: rgb(174, 0, 255);
        }
        100%{
            content: "IoT ENGINEERS";
            color: rgb(255, 0, 111);
        }
        
       }

    </style>
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

           if(isset($_POST['submit']))
          {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
         }

        $conn = new mysqli($host,$user,$password,$db);

        if($conn->connect_error)
        {
            die("Connection Failed" . $conn->connect_error);
        }

        $sql = "INSERT INTO contact (name , email , message )  VALUES ('$name' , '$email' , '$message')";

        if($conn->query($sql) === TRUE)
        {
            echo "<script>alert('Message Sent.');</script>";
        }
        else
        {
            echo "<script>alert('ERROR');</script>";
            echo "ERROR".$sql."<br>".$conn->error;
        }

    $conn->close();
          ?>
        </div>
       </section>
       <script>
    const button = document.querySelector('#submit');
    const colors = ['#FFFFFF', '#FFFF00', 'rgb(255, 0, 111)'];
    
    button.addEventListener('mouseover', changeColor);
    
    function changeColor() {
      const randomColor = colors[Math.floor(Math.random() * colors.length)];
      button.style.backgroundColor = randomColor;
    }
  </script>
    </body>
</html>