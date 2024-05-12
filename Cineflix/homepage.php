<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cineflix</title>

    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="Move.css">
    <script src="Moviepage.js"></script>
    <script src="slider.js"></script>
</head>
<body>

<?php

  include('Header.php');

?>


<!--Slider--------------Slider-----------Slider------------------------Slider--------------Start-->    
    <section>

        <div class="SliderWrapper">

            <div class="slider">
                
                <img class="fry" id="slide1" src="SliderImg/leoSliderHd.jpg" alt="">
                <img class="fry" id="slide2" src="SliderImg/kung_fu_panda_four_Slider.jpg" alt="">
                <img class="fry" id="slide3" src="SliderImg/AngryBirdSlider.jpeg" alt="">
                <img class="fry" id="slide4" src="SliderImg/DUNE.jpg" alt="">
                <img class="fry" id="slide5" src="SliderImg/spiderman_no_way_home_ver4_xxlg.jpg" alt="">


            </div>

            <div class="slider-nav">

                <a href="#slide1"></a>
                <a href="#slide2"></a>
                <a href="#slide3"></a>
                <a href="#slide4"></a>
                <a href="#slide5"></a>
                

            </div>

        </div>

    </section> 


<!--Slider--------------Slider-----------Slider------------------------Slider--------------End-->

<!--Card ----------------------------------------------------Card-->


<section>
    <h2 class="heading" id="movies"><hr></h2>
        <div class="container">
            
            <!--Box-1-->
            <div class="card">
                  <div class="box-img">
                    <img src="posters/NowayHome.jpg" alt="">
                  </div> 
                    <h3>SpiderMan NWH</h3>
            </div>

            <!--Box-2-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/Wolvwrine X DEadpool.jpg" alt="">
                </div> 
                  <h3>Deadpool & Wolverine</h3>
            </div>

            <!--Box-3-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/The Batman.jpeg" alt="">
                </div> 
                  <h3>The Batman</h3>
            </div>

            <!--Box-4-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/fb.jpeg" alt="">
                </div> 
                  <h3>Fantastic Beasts</h3>
            </div>

            <!--Box-5-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/migration.jpg" alt="">
                </div> 
                  <h3>Migration</h3>
            </div>

            <!--Box-6-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/Ponniyin-Selvin.jpeg" alt="">
                </div> 
                  <h3>Ponniyin Selvan 2</h3>
            </div>


            <!--Box-7-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/Dune_poster.jpeg" alt="">
                </div> 
                  <h3>DUNE</h3>
            </div>
            

            <!--Box-8-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/Beast_Poster.jpeg" alt="">
                </div> 
                  <h3>Beast</h3>
            </div>

            <!--Box-9-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/Vikram.jpeg" alt="">
                </div> 
                  <h3>Vikram</h3>
            </div>

                <!--Box-10-->
            <div class="card">
                <div class="box-img">
                  <img src="posters/ANGRY BIRDS 2 _ In theaters August 16, 2019.jpeg" alt="">
                </div> 
                  <h3>Angry Birds 2</h3>
            </div>
            

        </div>    
</section>

<!--Card-----------------card---------------------------End-->


<?php

  include('footer.php');

?>


</body>
</html>