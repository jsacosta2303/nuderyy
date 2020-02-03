<?php

require ('conn.php'); 


 

if(isset($_REQUEST['action'])){

    switch($_REQUEST['action']){
        case 'get_videos' : 
            if(isset($_REQUEST['categorie'])){

                $categorie = "WHERE categorias LIKE '%".$_REQUEST['categorie']."%'";

            }else{
                $categorie = "WHERE categorias NOT LIKE '%gay%'";
            }

        break;

    }
    
        
    $query ="SELECT * FROM video ".$categorie."  ORDER BY fecha_creacion DESC ";

    $result = mysqli_query($conn , $query);
    
    if($result){

        $out = '';
        while($row = mysqli_fetch_array($result)){
            
           
            
            $out.='<div class="videoBlock clear " >
            <div class="videoPic">
                <span class="view"><img src="images/5k.png" alt=""></span>
                <a href="video-player.php?watch='.$row['id'].'">
                    <img src="'.$row['thumbnail'].'" alt="">
                   </a>
                <span class="like">7</span>
                <span class="timeline">44:54</span>
            </div>
            <div class="videoTitle">
                <a href="#" class="videoHeading">Sunny Casting</a>
                <a href="#" class="studios">CzechVRCasting</a>
            </div>
            <div class="anglefps"><a href="#">180˚</a>  <span>·</span>  <a href="#">60 FPS</a></div>
          </div>';





        }

        echo json_encode(['success'=> 'success', 'data' => $out]);

     

    }else{

        echo json_encode(['error'=> 'Error Query Please contact the administrator', 'mysqli_error'=> mysqli_error($conn)]); 

    }
    
}else{

    echo json_encode(['error'=> 'No action provided please contact the administrator']);

}




?>