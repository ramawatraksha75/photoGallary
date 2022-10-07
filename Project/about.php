<?php
    $connection = new mysqli('localhost', 'root', '', 'project');

    // Check connection
    if ($connection->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];

    $sql = "INSERT INTO contactus (Nname, email, Nnumber) VALUES ('$name', '$email','$number');";

    if ($connection->query($sql) === TRUE) {
        header('location:index.php#contactus');
      } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
      }
      
          
          echo "Registration successful";
          $connection ->close();
      

    }
?>