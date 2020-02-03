<?php
require ('src/core/conn.php'); 

if(isset($_REQUEST['watch'])){

    $out = '';  

    $query = "SELECT * FROM video WHERE id = ".$_REQUEST['watch']."";
   
    $result = mysqli_query($conn , $query);
    
    if($result){

       
        $row = mysqli_fetch_array($result);
        $tags= '';
        $video = $row['ruta'];

        $description = $row['descripcion'];
        $arr =  explode(";", $row['tags']);
    
        foreach ($arr as $tag) {
            // Observa que no hay $b en este caso.
        $tags .= '<li><a href="#">'.$tag.'</a></li>';

            
        }

           
        

        json_encode(['success'=> 'success', 'data' => $out]);

     

    }else{

        $out = json_encode(['error'=> 'Error Query Please contact the administrator', 'mysqli_error'=> mysqli_error($conn)]); 

    }   

}else{

    header("location:index.php");


}

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Welcome to Virtual Porn</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0;">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Assistant:600" rel="stylesheet"> 
<link rel="stylesheet" href="css/media.css">
<script type="text/javascript" src="https://www.hubtraffic.com/js/external/helpers.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/easyResponsiveTabs.js"></script>
<script src="js/jquery.meanmenu.min.js"></script>

<script>
$(document).ready(function() {
	$('nav').meanmenu();
	$('.searchIcon').on('click',function(){
		$('.searchArea').slideToggle();
	});
	$('.vrTubes').on('click',function(){
		$('.fRight ul ul').slideToggle();
	});
	$('.downloadLink').on('click',function(){
		$('.downloadVideos ul').slideToggle();
		$(this).toggleClass('active');
	});
	$('.tags').on('click',function(){
		$('.popularTags ul').slideToggle();
		$(this).toggleClass('active');
	});
});
</script>
</head>
<body>
    <!-- <iframe src="https://es.pornhub.com/embed/ph5ba0e17be681d" frameborder="0" width="560" height="340" scrolling="no" allowfullscreen></iframe> -->
<header class="black">
	<div class="centerwrap clear">
    	<div class="logo"><a href="index.html"><img src="images/logo.png" alt=""></a></div>
        <nav>
        	<ul>
            	<li><a href="index.html">Home</a></li>
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
<div class="videoPlayerArea">
	<div class="centerwrap clear">
    	<div class="playerTitle clear">
        	<h2>Exclusive Models Compilation <a href="#">Adriana Chechik</a>, <a href="#">Brett Rossi</a> and <a href="#">Jill Kassidy</a></h2>
            <div class="views clear">
            	<span>180˚</span>
                <span>60 FPS</span>
                <p>Date: 28 March, 2019  |  Runtime: 10:01  |  Views: 20,693</p>
            </div>
            <div class="videotags">
            	<ul class="clear">
                	<?php echo $tags;?>
                </ul>
            </div>
        </div>
        <div class="playerLeft clear">
        	<div class="videoHere" style="width: 100%; height: 600px;">
                <!-- <a href="#"><i></i><img src="images/poster.jpg" alt=""></a> -->
                <?php echo $video; ?>
            </div>

            <div class="videoAdsB">
                <!-- <a href="#"><img src="images/advertisement.jpg" alt=""></a> -->
                <a href="https://www.exoclick.com/?login=SebasVAR"><img src="https://www.exoclick.com/banners/468x120.gif" border="0"></a>
            </div>
            <div class="studioData clear">
            	<div class="studio clear">
                	<div class="stdLogo"><img src="images/studio-logo2.jpg" alt=""></div>
                    <div class="sName">
                    	<h3>BaDoinkVR</h3>
                        <p><a href="#">287 VR Videos</a>  <span>|</span>  <a href="#">Read Review</a></p>
                    </div>
                    <a href="#" class="videoLike ResponsiveView">1256</a>
                </div>
                <div class="likeDownload">
                	<a href="#" class="videoLike ResponsiveNone">1256</a>
                    <div class="downloadVideos">
                    	<div class="downloadLink"><span>Download</span></div>
                        <ul>
                        	<li class="clear"><a href="#">Smartphone <span>(247.8 MB)</span></a></li>
                            <li class="clear"><a href="#">Oculus Rift / Vive <span>(517.6 MB)</span></a></li>
                            <li class="clear"><a href="#">Oculus Go <span>(517.6 MB)</span></a></li>
                            <li class="clear"><a href="#">GearVR / DayDream <span>(517.6 MB)</span></a></li>
                            <li class="clear"><a href="#">PlaystationVR <span>(197.0 MB)</span></a></li>
                            <li class="clear"><a href="#">Windows MR <span>(517.6 MB)</span></a></li>
                            <li class="clear"><a href="#">Max Quality  <span>(746.3 MB)</span></a></li>
                            <li class="clear"><a href="howto.html">How to Watch VR Videos</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn">Join BaDoinkVR</a>
                </div>
            </div>
            <div class="videoDetails">
            	<p><?php echo $description;?></p>
            </div>
        </div>
        <div class="videoAds">
        	<h3>Advertisements</h3>
            <div class="videobanner"><a href="#" target="_blank"><img src="images/ads3.jpg" alt=""></a></div>
            <div class="videobanner"><a href="https://www.exoclick.com/?login=SebasVAR"><img src="https://www.exoclick.com/banners/250x250_2.gif" border="0"></a></div>
        </div>
        <div class="relatedVideos">
            <div class="title clear">
                <h2 class="title">Related Videos</h2>
                <a href="videos.html" class="sellAll">See All</a>
            </div>
            <div class="videosBlock clear">
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/5k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/4k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/vr.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/6k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/4k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/vr.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/6k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
                <div class="videoBlock clear">
                    <div class="videoPic">
                        <span class="view"><img src="images/5k.png" alt=""></span>
                        <a href="video-player.html">
                            <img src="images/videoPic.jpg" alt="">
                        </a>
                        <span class="like">7</span>
                        <span class="timeline">44:54</span>
                    </div>
                    <div class="videoTitle">
                        <a href="#" class="videoHeading">Sunny Casting</a>
                        <a href="#" class="studios">CzechVRCasting</a>
                    </div>
                    <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
                </div>
            </div>
        </div>
        <div class="comments">
            <h4>0 Comments</h4>
            <div class="needLogin">You must <a href="login-signup.html">login</a> or <a href="login-signup.html">sign up</a> to post a comment.</div>
        </div>
    </div>
</div>
<footer>
	<div class="centerwrap clear">
    	<div class="fRight clear">
        	<ul>
            	<li><a href="index.html">Home</a></li>
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
            <p>&copy; 2019 Virtual Porn - All Rights Reserved.</p>
        </div>
    </div>
</footer>
</body>
</html>