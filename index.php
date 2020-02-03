

<!-- begin:: Page -->
<?php

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Nudery</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Assistant:600" rel="stylesheet"> 
<link rel="stylesheet" href="css/media.css">

<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>
<script src="js/pagination.js"></script>
<script>
$(document).ready(function() {
	$('nav').meanmenu();
	$('.searchIcon').on('click',function(){
		$('.searchArea').slideToggle();
	})
	$('.vrTubes').on('click',function(){
		$('.fRight ul ul').slideToggle();
	})
});
</script>
</head>
<body>
<header>
	<div class="centerwrap clear">
    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
        <nav>
        	<ul>
            	<li><a href="index.html" class="active">Home</a></li>
                <li><a href="categories.html">Categories</a></li>
                <li><a href="vrsites.html">VR Sites</a></li>
                <li><a href="pornstars.html">Pornstars</a></li>
                <li><a href="studios.html">Studios</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="howto.html">How to watch vr</a></li>
                <li class="responsiveOnly"><a href="login-signup.html">Login</a></li>
                <li class="responsiveOnly"><a href="login-signup.html">Free Sign up</a></li>
            </ul>
        </nav>
        <div class="headerRight clear">
        	<div class="forMobile">
            	<i class="searchIcon"></i>
                <div class="searchArea">
                    <input type="text" class="searchBox" placeholder="Search Virtual Porn">
                    <input type="submit" value="" class="search">
                </div>
            </div>
            <div class="twoLinks clear">
            	<a href="login-signup.html" class="freesignup">Free Sign up</a>
                <a href="login-signup.html" class="login">Login</a>
            </div>
        </div>
    </div>
</header>
<div class="categories"><img src="images/categories.jpg" alt=""></div>
<div class="centerwrap clear">
	<div class="videos" >
    	<div class="title clear">
	    	<h2 class="title">Full VR Videos</h2>
            <a href="videos.html" class="sellAll">See All</a>
        </div>
        <div class="videosBlock clear" id="vr_videos">
        	
            
        </div>
    </div>
	
    <div class="pagination">
    	<ul>
        	<li class="prev"><a href="#">Prev</a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><span>...</span></li>
            <li><a href="#">99</a></li>
            <li class="next"><a href="#">Next</a></li>
        </ul>
    </div>
    <div class="about">
    	<p>Virtual.Porn is daily free VR news, reviews, and videos showcase the best of adult VR entertainment, the latest innovations, and the future of digital sex. From cosplay cuties to horny stepsisters to kinky MILFs, VR porn offers viewers an immersive fantasy world where our deepest desires appear before our very eyes. Virtual.Porn reviews VR and AR headsets and other devices - from Oculus Go to HTC Vive Pro, Daydream to Cardboard - as well as all the major VR porn providers giving us virtual access to our favorite stars. Porn pushes VR's evolution forward and Virtual.Porn keeps you at the forefront of the VR porn explosion.</p>
    </div>
</div>
<footer>
	<div class="centerwrap clear">
    	<div class="fRight clear">
        	<ul>
            	<li><a href="index.html" class="active">Home</a></li>
                <li><a href="vrsites.html">VR Sites</a></li>
                <li><a href="pornstars.html">Pornstars</a></li>
                <li><a href="vrnews.html">VR News</a></li>
                <li><a class="vrTubes" href="javascript:void(0);">VR Tubes</a>
                	<ul>
                    	<li><a href="#">PornFox VR</a></li>
                        <li><a href="#">Pornhub VR</a></li>
                        <li><a href="#">RedTube VR</a></li>
                        <li><a href="#">VR Smash</a></li>
                        <li><a href="#">VR Sumo</a></li>
                        <li><a href="#">xHamster VR</a></li>
                        <li><a href="#">xVideos VR</a></li>
                        <li><a href="#">YouPorn VR</a></li>
                    </ul>
                </li>
                <li><a href="howto.html">How to watch vr</a></li>
                <li><a href="login-signup.html" class="active">Login</a></li>
                <li><a href="login-signup.html" class="active">Signup free</a></li>
            </ul>
            <p>All models were over the age of 18 at time of photography.<br>
<a href="#">Terms of Service</a><span>|</span><a href="#">Privacy</a><span>|</span><a href="#">18 U.S.C. 2257 Record-Keeping Requirements Compliance Statement</a></p>
			<div class="social clear">
            	<a href="https://twitter.com/bestvirtualporn" target="_blank"><img src="images/twitter.png" alt=""></a>
                <a href="https://www.reddit.com/r/BestVirtualPorn/" target="_blank"><img src="images/reddit.png" alt=""></a>
            </div>
        </div>
        <div class="fLeft">
        	<div class="fLogo"><img src="images/logo.png" alt=""></div>
            <p>&copy; 2020 Nudery - All Rights Reserved.</p>
        </div>
    </div>
</footer>


<script>
$(document).ready(function() {

    
    function get_videos(){

        $.ajax({
            url: 'src/core/videos.php',
            data: {'action': 'get_videos' },
            success: function(response, status, xhr) {

                var data = JSON.parse(response);    
                if (data.success){
                    
                    $("#vr_videos").html(data.data);

                }else{

                    Swal.fire('Oops...', data.error + data.description, 'error');

                }
                
            },
            error : function(xhr, status) {
                Swal.fire('Disculpe, existió un problema','error', 'error');
            }
        });
    }

    get_videos();    
    // roomslive =  setInterval(get_rooms,10000);
$(function() {
    $('.pagination').pagination({
        items: 100,
        itemsOnPage: 10,
        cssStyle: 'light-theme'
    });
});

});




</script>
</body>
</html>