<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
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
<div class="about_bg">

<section class="about">

   <div class="row">

      <div class="content" style="float:right; text-align:right;">
         <p><br><b>Artistic creations that aim for aesthetic excellence <br>should also convey deeper meaning.</b></p>
         </div>

   </div>

</section>
</div>

<section class="about_me">

   <div class="row_me">

      <div class="image_me">
         <img src="images/aboutt.png" height="550px" style="float:right; padding-left: 1rem;" alt="">
      </div>

      <div class="content_me">
         <h2 style="font-size: 30px; color:var(--black);">Hi guys!</h2>
         <p style="line-height: 2; font-size:18px; color:var(--black); padding:1rem 0;  text-align: justify;">My name is Trina Morados, but please - call me TC. I’m a self-taught, calligrapher and engraver known around the internet as @inksandcoffee, typically recognized for my modern design work, ultra-detailed journal spreads, and addiction with coffee. <br><br> All of those efforts are really the icing on the cake of my career as an artist, which frequently still feels like a pleasant dream. I'm so delighted to welcome you to my tiny corner of the internet, whether you want to collaborate on a creative project or need a creative bestie.
         <br><br>The essence and driving force behind what I do has evolved into my capacity to enrich others' experiences. I realized I wanted to share this kind of pleasure with as many people as I could after seeing the smiles on people's faces when they saw the artwork I do. Everyone should be delighted and feel that glint of excitement.<br><br></p>
      </div>

   </div>

</section>








<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
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