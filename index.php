<!-- 

HOW TO PUBLISH THIS WEBSITE 
1) Go to the terminal window at the bottom and type 'deploy' [without the quotes]
2) Click the balloon icon on the top left of the screen
3) Click the 'Sadie' button
4) Click yes! 
5) Go to http://sadie.herokuapp.com/

HOW TO PREVIEW 
1) Make sure you are looking at this file 
2) Press the Run button with the green arrow next to it
3) Go to https://sadie_portfolio-c9-jimmytidey.c9.io/index.php

--> 

<?php include("header.php")  ?>



<div class='container'> 
    
    <div class='row'>
        <div class='col-md-4 col-md-offset-8'> 
            <ul class="nav nav-pills nav-justified">
              <li class="active"><a href="#">All work</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">CV</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
        </div>    
    </div>
    
    <div class='row'>
        <div class='col-md-12'> 
            <h1 class='main_header'>
                I'm Sadie. I'm a <a data-mode='artist' class='selected_mode'>practising artist</a>. I also work on <a data-mode='community' class='community_mode' >community projects</a> and <a data-mode='organise'  class='organise_mode' >organise events</a>.   
            </h1>
        </div>
    </div>
    

    
    <div class='row image_under_text'>
        <div class='col-md-12 frame_for_animation'>
            <div class='header_artist_mode mode_header mode_header_open'>
                <p class='text_that_goes_on_image col-md-6'>'Weaving Bankers' Outside Departure Foundation, Monument, London. Part of my investigation of using human bodies as a material.</p>
    
                <img class='main_image'  src='images/weaving_bankers_crop.jpg' />
            </div>
            
            
            <div class='header_community_mode mode_header'>
                <p class='text_that_goes_on_image col-md-6'>Communuity </p>
    
                <img class='main_image'  src='images/weaving_bankers_crop.jpg' />
            </div>
            
            <div class='header_organise_mode mode_header'>
                <p class='text_that_goes_on_image col-md-6'>Organising events </p>
    
                <img class='main_image'  src='images/weaving_bankers_crop.jpg' />
            </div>
            
        </div>
    </div>
    
    <div class='row'>
   
    </div>
    
    
    
    
    
</div>





<?php include("footer.php")  ?>