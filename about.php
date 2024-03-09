<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>



<section class="about">

   


<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">
   
      <div class="box">
      <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Ayush Sanjaysingh Pardesi </h3>
         <p>I used to regularly watch the recorded videos and solve various practice tests available on the app. This helped boost my confidence level.</p>
         
         <button>State Topper | Ayush Sanjaysingh Pardesi | Maharashtra | 99.6% in Class 10 2021</button>
         
         
               
            </div>
         </div>
      </div>

      <div class="box">
      <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3> Prachi Bhadauria </h3>
         <p>I believe in the power of visualization, when I see anything happening, it becomes easier to memorize. And BYJU'S made things much easier before the final exams.</p>
          
         <button>State Topper | Prachi Bhadauria | Rajasthan | 99.83% in Class 10 2021</button>
        
              
            </div>
         </div>
      </div>

      <div class="box">
      <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Arina Khatun</h3>
              
            </div>
         <p>Before any chapter was taught in school classes, I would go through the BYJU'S videos once to understand the concepts.</p>
        
       
         </div>
      </div>

      <div class="box">
         
      <div class="user">
      <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Reshma Ganesh Hegde</h3>
             
            </div>
        
      <p>I regularly revised all my portions with the help of the BYJU'S app before the board exams.</p>
      
         </div>
      </div>
</section>




<?php include 'components/footer.php'; ?>


<script src="js/script.js"></script>
   
</body>
</html>