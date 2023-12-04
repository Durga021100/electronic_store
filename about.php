<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/22.jpg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Keeping in touch is as easier as ever these days. Most of us walk around with a mini computer in our pockets every day. It can text, video chat, and send email. But, think about it, are you really communicating? Are you engaging in conversation? Letting someone know how you feel? Thanking them for a gift they sent or are you simply sharing jokes, and checking in?

               This is why, now more than ever it is so very important to send a handwritten note. Many would say why wait for it to travel through the mail when we can contact someone across the globe within minutes?</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">client's reviews</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/client.jpg" alt="">
               <p>I recently purchased the "JBL Headphones," and they have completely blown me away. The sound quality is phenomenal, with crystal-clear audio and deep bass. They are incredibly comfortable, even for extended wear. The noise-cancellation feature is a game-changer, and the build quality is solid. If you're a music enthusiast, these headphones are a must-have.
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>K_Durga</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-02.jpg" alt="">
               <p>I recently upgraded to the Samsung Galaxy S22 Ultra, and it's nothing short of amazing. The camera quality is exceptional, with stunning photos even in challenging conditions. The performance is lightning-fast, and the battery life is impressive. The sleek design and gorgeous display add to the overall appeal. If you're looking for a top-tier smartphone, the S22 Ultra is a game-changer..</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Coomar</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-03.jpg" alt="">
               <p>The JBL Xtreme 3 is a portable Bluetooth speaker that has completely transformed my music experience. Its sound quality is nothing short of spectacular, delivering powerful bass and crisp highs. Whether I'm at a beach party, camping in the woods, or just lounging at home, this speaker provides an immersive audio experience.
               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>Ritik</h3>
            </div>

            <!--   <div class="swiper-slide slide">
               <img src="images/pic-4.png" alt="">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>john deo</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-5.png" alt="">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>john deo</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-6.png" alt="">
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia tempore distinctio hic, iusto adipisci a rerum nemo perspiciatis fugiat sapiente.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3>john deo</h3>
            </div> -->

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>