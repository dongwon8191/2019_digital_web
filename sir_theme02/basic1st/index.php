<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
    $(document).ready(function(){
        $(".slider").bxSlider({

            auto:true, mode:'fade'

        });

       

           



    });
</script>



<ul class="slider">

    <li style="height: 591px !important;">
      

<img src="<?echo G5_THEME_IMG_URL?>/slide01.jpg" alt="" style="width:1400px" >

  <div class="text">
      <p style="text-align: center;padding-top: 10px;font-weight: bold; font-size: 14px; color: #565555;"
 
     >INDUSTRY EXPERT: INDUSTRY EXPERT: WITHERSWORLDWIDE</p>
  </div>
   </li>

   
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/slide02.jpg" alt="" style="width:1400px">
        <div class="text">
      <p style="text-align: center;padding-top: 10px;font-weight: bold; font-size: 14px; color: #565555;"
 
     >DESIGNER OF THE WEEK: RAY CHU</p>
  </div>
    </li>

        <li>
        <img src="<?echo G5_THEME_IMG_URL?>/slide03.jpg" alt="" style="width:1400px">
        <div class="text">
      <p style="text-align: center;padding-top: 10px;font-weight: bold; font-size: 14px; color: #565555;"
 
     >START SELLING YOUR COLLECTION WITH NJAL+ THE SHOP FOR ONLY $15/MONTH/p>
  </div>
    </li>

</ul>



<ul class="content01">
<img src="<?echo G5_THEME_IMG_URL?>/menu_title.png" style="position: absolute;z-index: 9;right: 0;
    top: 30%;"> 



    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img01.jpg" alt="" >
        <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img02.jpg" alt="">
         <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title01.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img03.jpg" alt="">
         <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title02.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img04.jpg" alt="">
         <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title03.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img05.jpg" alt="">
         <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title04.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>
    <li>
        <img src="<?echo G5_THEME_IMG_URL?>/content_img06.jpg" alt="">
         <div class="overlay">
            <!-- <h3>MOON CHANG</h3> -->
            <img src="<?echo G5_THEME_IMG_URL?>/title05.png" alt="" class="title">
            <p>BLACK SHEEP <br> NJAL+</p>

        </div>
    </li>

    <div class="text01" style="width: 1400px; margin:0 auto; height: 50px;text-align: center;">
    
   
        <h3 style="width: 100%;font-size: 14px; ">SEARCH FOR MORE SHOP</h3>
    
    </div>
</ul>

<div class="content02">
    <section class="scene one"></section>

    <section class="scene two" style="position:relative;">
        <img src="<?echo G5_THEME_IMG_URL?>/content02_title.png" alt="" 
        style=" 
        width: 700px;
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;left: 50%;">
    
    
    
   

        <div class="text" style=" position: absolute; transform: translate(-50%,-50%);top: 70%;left: 50%;">
    
            <p style="
                font-weight: bold; 
                color: #5a5a5a;
                width: 1000px;">
   
            NOT JUST A LABEL (NJAL) IS THE WORLD’S LEADING DESIGNER PLATFORM FOR SHOWCASING AND NURTURING 

              TODAY’S PIONEERS IN CONTEMPORARY FASHION</p>
   
        </div>
    </section>
    <section class="scene three">
        <div class="img_content" style="width: 1400px; position: absolute;left: 330px;
    
   
        ">
            <img src="<?echo G5_THEME_IMG_URL?>/section03_img.jpg" alt=""
            style="width: 600px; display: block; float: left; padding: 20px;  ">
   

            <img src="<?echo G5_THEME_IMG_URL?>/section03_img2.jpg" alt=""
             style="width: 600px; padding: 20px; " >
   
           
        </div>

        
    </section>
    <section class="scene four"></section>
</div>

<div class="content03">
    <img src="<?echo G5_THEME_IMG_URL?>/menu_title01.png" style="position: absolute;z-index: 9;right: 185px;
    top: 120px;"> 

    
    <ul>
        <li>
       <img src="<?echo G5_THEME_IMG_URL?>/fe01.jpg" alt="">
       <p>DESIGNER FOCUS: DE MIL</p>
        </li>

        <li>
            <img src="<?echo G5_THEME_IMG_URL?>/fe02.jpg" alt="">
        <p>FASHION’S IMPULSE TO FAVOR CREATIVITY OVER GENDER EQUALITY</p>
        </li>

        <li>
            <img src="<?echo G5_THEME_IMG_URL?>/fe03.jpg" alt="">
            <p>HOW DID THE 1980S AIDS CRISIS AFFECT FASHION?</p>
        </li>

        <li>
            <img src="<?echo G5_THEME_IMG_URL?>/fe04.jpg" alt="">
            <p>FASHION & FANTASY | PART 28</p>
        </li>

        <li>
            <img src="<?echo G5_THEME_IMG_URL?>/fe05.jpg" alt="">
            <p>THE CLASS OF 2019 STANDOUTS</p>
        </li>

        <li>
            <img src="<?echo G5_THEME_IMG_URL?>/fe06.jpg" alt="">
            <p>MY FAVOURITE PIECE: MYRIAMSOS FINE JEWELLERY</p>
        </li>
    </ul>
</div>
    

    







<?php
include_once(G5_THEME_PATH.'/tail.php');
?>