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

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="r2">

<p style="font-size:20px">At BYJU’S Education for All, we strive to make a difference in the lives of millions of underprivileged children. We hope we can help them get a step closer to their dreams.

Aligned with this mission, BYJUites crafted a storybook for the EFA beneficiaries on World Children’s Day, commemorated on November 20 every year. The book contains a slew of exciting adventures, life lessons and others penned by BYJUites for these children.

BYJUites showed a lot of enthusiasm and shared thoughtfully written stories that could encourage children to inculcate a reading habit. From adventures in the town of Vazhoor, Kerala, to a simple lesson of how it is impossible to please everyone, the book covers an exciting range of fun stories and life morals, perfect for children of all ages.

The book was then stitched together and illustrated by BYJUites in the most fun, colourful and engaging manner that could appeal significantly to children. We then shared this book with our NGO partners, who will further share it with the beneficiaries.</p>
</section>
<section class="hero">
        <img src="assets/asset 4.svg" alt="" class="hero-bg">
        <img class="srk" src="assets/asset 5.png" alt="">
</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>