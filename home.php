<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   

</head>
<body>

<?php include 'components/user_header.php'; ?>


<section class="hero">
        <img src="images/bl.jpg" alt="" class="hero-bg">
      
<!-- quick select section starts  -->

<section class="quick-select">

   <h1 class="heading">quick options</h1>

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
      <div class="box">
         <h3 class="title">courses</h3>
         <p>total likes : <span><?= $total_likes; ?></span></p>
         <a href="search_course.php?" class="inline-btn">view course</a>
         <p>total comments : <span><?= $total_comments; ?></span></p>
         <a href="search_course.php?" class="inline-btn">view comments</a>
         
      </div>
      <?php
         }else{ 
      ?>
      <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      <?php
      }
      ?>

      <div class="box">
         <h3 class="title">top categories</h3>
         <div class="flex">
            <a href="search_course.php?"><i class="fas fa-code"></i><span>development</span></a>
            <a href="search_course.php"><i class="fas fa-chart-simple"></i><span>Maths</span></a>
         
            <a href="search_course.php"><i class="fas fa-vial"></i><span>science</span></a>
         </div>
      </div>

      <div class="box">
         <h3 class="title">popular topics</h3>
         <div class="flex">
            <a href="search_course.php"><i class="fab fa-html5"></i><span>HTML</span></a>
            <a href="search_course.php"><i class="fab fa-css3"></i><span>CSS</span></a>
           
           
         </div>
      </div>

      <div class="box tutor">
         <h3 class="title">Become a tutor</h3>
         <p>signup and become a tutor in byjus academy</p>
         <a href="admin/register.php" class="inline-btn">get started</a>
      </div>

   </div>

</section>

    
        <img src="assets/asset 55.svg" alt="" class="curves">
    </section>
    <section class="quick-select">

   <h1 class="heading">More about Byjus</h1>
   </section>

    <section class="sec2">
      <br>
        <h2 style="font-size:20px">Comprehensive learning programs
            & classes </h2>
        <h2 style="font-size:20px"> Become lifelong learners with India's best teachers, engaging video lessons and
            personalised learning
            journeys</h2>
           
            <br> <br> <br> <br>

        <div class="card-class-4">
            <ion-icon name="triangle" class="triangle"></ion-icon>
            <p class="new">NEW</p>
            <p class="class-4">Classes 4 - 10</p>
            <div class="left">
                <div class="img">
                    <img src="assets/asset 12.png" alt="">
                </div>
                <div class="text">
                    <img src="assets/asset 13.svg" alt="">
                    <p>Personalised learning app to learn anytime, anywhere</p>
                    <h4>byjus <ion-icon name="chevron-forward"></ion-icon>
                    </h4>
                </div>
            </div>
            <div class="line"></div>
            <div class="right">
                <div class="img">
                    <img src="assets/asset 14.png" alt="">
                </div>
                <div class="text">
                    <img src="assets/asset 15.png" alt="">
                    <p>Personalised online tutoring program with a unique two teacher model</p>
                    <h4>byjus <ion-icon name="chevron-forward"></ion-icon>
                    </h4>
                </div>
            </div>
            <button class="free-class">Book a FREE class</button>
        </div>

       

        <div class="card-3">
            <div class="card-lkg">
                <p class="lkg">Classes LKG - 3</p>
                <div class="img">
                    <img src="assets/asset 19.png" alt="">
                </div>
                <div class="text">
                    <img src="assets/asset 20.svg" alt="">
                    <p>Specially crafted early learning program for young minds</p>
                    <button>byjus</button>
                </div>
            </div>

            <div class="card-ias">
                <p class="ias">IAS</p>
                <div class="img">
                    <img src="assets/asset 21.png" alt="">
                </div>
                <div class="text">
                    <img src="assets/asset 22.svg" alt="">
                    <p>Personalised learning program
                        for the leaders of tomorrow</p>
                    <button>byjus learning</button>
                </div>
            </div>
        </div>
    </section>

    <section class="sec3">
        <h1>Get the BYJU'S advantage</h1>
        <div class="advantage">
            <div class="advantage-1">
                <img src="assets/asset 23.png" alt="">
                <p>Conceptual clarity <br> through visualisation</p>
            </div>
            <div class="advantage-2">
                <img src="assets/asset 24.png" alt="">
                <p>Personalised learning <br> programs</p>
            </div>
            <div class="advantage-3">
                <img src="assets/asset 25.png" alt="">
                <p>Unmatched individual <br> attention</p>
            </div>
        </div>
    </section>


      
    
<p id="demo"></p>

<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Henmcmcmcmcnlksnclknsckskknkslncsnkk;sc;kcsm;kkcskmckmsckck;sk;ckcsmkmcksmk;csmkcmskmcskmkscmkscmkcsmmscmk;ckkkkkkkkmkmkxkakxkamkmllo nnnWorld";
}
</script>
            </div>
   </div>
  

</section>



    <section class="sec5">
        <div class="top">
            <img src="assets/asset 38.jpeg" alt="">
            <p>A student's go-to blog for the latest stories, <br> discoveries, fun activities exam tips, and more.</p>
        </div>

        <div class="middle">
            <img class="arrow" src="assets/asset 37.svg" alt="">
            <div class="card">
                <img src="assets/asset 39.jpeg" alt="">
                <h4>Social Invitiatives</h4>
                <p>A Children's Book for BYJU'S EFA beneficiaries</p>
                <p>At BYJU’S Education for All, we strive to make a difference in the lives of millions of underprivileged children. We hope we can help them get a step closer to their dreams.

Aligned with this mission, BYJUites crafted a storybook for the EFA beneficiaries on World Children’s Day, commemorated on November 20 every year. The book contains a slew of exciting adventures, life lessons and others penned by BYJUites for these children.



The book was then stitched together and illustrated by BYJUites in the most fun, colourful and engaging manner that could appeal significantly to children. We then shared this book with our NGO partners, who will further share it with the beneficiaries.</p>
            </div>
            
            <div class="card">
                <img src="assets/asset 41.gif" alt="">
                <h4>Early Learn</h4>
                <p>Why Do Some Plants Eat Insects?</p>
                <p>Any plant that traps, eats, and consumes insects or animals is called an insectivorous plant or carnivorous plant. But why do they indulge in this strange behaviour? The main reason is that the compound although they mostly grow in humid wildernesses where there is plenty of sunlight and moisture, that amount is insufficient for these plants to survive. They need more nutrients than they can get from soil and water and hence, they capture insects for their nutrition supplements. While most of these carnivorous plants capture small insects, and also large carnivorous plants in tropical areas have been known to capture rats, birds, and frogs!</p>
            </div>

            <div class="card">
                <img src="assets/asset 42.jpeg" alt="">
                <h4>Exam Tips</h4>
                <p>Textbook vs Internet: Acing the Balancing Act</p>
                <p>Digital Education in India is the way forward to learning and gaining knowledge through the means of technology and digital devices.

COVID-19 pandemic had briefly disrupted the school education system and the other affects in India. Since the 1st lockdown in March 2020, all the states have responded to the COVID-19 situation with speed and innovation. The existing digital resources were leveraged to maintain continuity in students’ education.

Aspiring civil servants need to stay updated with the latest development in the domain of digital education</p>
            </div>
          
        </div>

        <div class="r2">
         <h3 class="title" style="font-size:20px">Become a tutor</h3>
         <p style="font-size:20px">signup and become a tutor in byjus academy</p>
         <a href="admin/register.php" class="inline-btn">get started</a>
      </div>

    </section>


<section class="courses">

   <h1 class="heading">latest courses</h1>

   <div class="box-container">

      <?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
      <div class="box">
         <div class="tutor">
            <img src="uploaded_files/<?= $fetch_tutor['image']; ?>" alt="">
            <div>
               <h3><?= $fetch_tutor['name']; ?></h3>
               <span><?= $fetch_course['date']; ?></span>
            </div>
         </div>
         <img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt="">
         <h3 class="title"><?= $fetch_course['title']; ?></h3>
         <a href="playlist.php?get_id=<?= $course_id; ?>" class="inline-btn">view playlist</a>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>

   </div>

   <div class="more-btn">
      <a href="courses.php" class="inline-option-btn">view more</a>
   </div>

</section>






<section class="sec4">
        <h1>Our students and parents love us</h1>

        <div class="rating">
            <div class="download">
                <img src="assets/asset 26.svg" alt="">
                <h2>150+ Million</h2>
                <p>downloads</p>
            </div>
            <div class="star-rating">
                <img src="assets/asset 27.svg" alt="">
                <h2>4.7+ Star</h2>
                <p>app rating</p>
            </div>
            <div class="cities">
                <img src="assets/asset 28.svg" alt="">
                <h2>1701+ Cities</h2>
                <p>worldwide</p>
            </div>
            <div class="minutes">
                <img src="assets/asset 29.svg" alt="">
                <h2>71 mins avg.</h2>
                <p>time spent daily</p>
            </div>
        </div>









<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>
   
</body>
</html>