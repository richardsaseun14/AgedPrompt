 <?php
$email ="";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $conn=new mysqli("localhost", "root", "", "mydata");
    $cmd="INSERT into emails value('$email');";
    if(mysqli_query($conn, $cmd))
    {
        echo "Successfully";
    }
    else{
        echo "Email not sent";
    }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!--custom css-->
    <link rel="stylesheet" href="style.css">

    <!--font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
    
    <title>AgedPrompt</title>
  </head>
  <body>

  <!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
</nav>
<section id="info-section">
  <div class="container">
   <div class="row">
    <div class="col col-md-8 first-col">
     <h1>Lonely shouldn’t come with Age </h1>
     <p>Register for self or register for a loved one</p>
     <p>Track and set reminders for medications</p>
     <p>Chat away worries and loniless our with resident bots
       <span class="support-team">Agatha and Patrick</span>  </p>

        <form method="POST">
     <input type="email" name="email" placeholder="Email">
     <br>
     
     <input type="submit" name="submit" value="Subscribe">
      </form>
    </div>
  </div>

  <div class="col cl-md-4">
  

  </div>
  </div>

  </section>
   

 

   
   

   

    <!--custom js-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>