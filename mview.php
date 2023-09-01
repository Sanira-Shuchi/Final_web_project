<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['user_id'];



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>messages</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php include 'mheader.php'; ?>

<section class="messages">

   <h1 class="title"> Task List </h1>

   <div class="box-container">
   <?php
      $select_message = mysqli_query($conn, "SELECT * FROM `task`") or die('query failed');
      if(mysqli_num_rows($select_message) > 0){
         while($fetch_message = mysqli_fetch_assoc($select_message)){
      
   ?>
   <div class="box">
   <p> Employe Type : <span><?php echo $fetch_message['type']; ?></span> </p>
      <p> name : <span><?php echo $fetch_message['name']; ?></span> </p>
      
      <p> email : <span><?php echo $fetch_message['email']; ?></span> </p>
      <p> your Task : <span><?php echo $fetch_message['message']; ?></span> </p>
      
   </div>
   <?php
      };
   }else{
      echo '<p class="empty">you have no task!</p>';
   }
   ?>
   </div>

</section>









<!-- custom admin js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>