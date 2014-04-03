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
    
    <div class='row'>
        <div class='col-md-12'> 
            <h1 class='main_header'>
                Sadie Edginton. 
                I'm an <a data-mode='artist' class='selected_mode'>artist</a>. 
                I also work on <a data-mode='community' class='community_mode' >projects</a> and 
                <a data-mode='organise'  class='organise_mode' >organise events, exhibitions and workshops</a>.   
            </h1>
        </div>
    </div>
    

    
    <div class='row image_under_text'>
        <div class='col-md-12 frame_for_animation'>
        
            <!-- Art    -->
            <div class='header_artist_mode mode_header mode_header_open'>
                <p class='text_that_goes_on_image col-md-6'><i>Image from <a href=''>'Weaving Bankers'</a><i>. 
                I manipulate materials and situations. Using forms of communication, whether through  
                props or hints, questioning the audience / volunteer / sculpture / performer divide. In 2013 I co-founded 
                <a href=''>NAVIGATE</a> (workshop and performance collective) and have worked with <a href=''>exchange projects</a> for <a href=''>Hackney 
                WickED DEVELOPMENT</a>and <a href=''>AltMFA</a>.</p>
    
                <img class='main_image'  src='images/weaving_bankers_crop.jpg' />
            </div>
            
            
            <!-- Community    -->
            <div class='header_community_mode mode_header'>
                <p class='text_that_goes_on_image col-md-6'>Community</p>
    
                <img class='main_image'  src='images/weaving_bankers_crop.jpg' />
            </div>
            
            <!-- Organising --> 
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