<?php
function getImg($dir_path){
    if(!empty($dir_path)){
        $files = scandir($dir_path);
        $count = count($files);
        if($count > 2){
            $index = rand(2, ($count-1));
            $filename = $files[$index];
            // return'<img src="'.$dir_path."/".$filename.
            // '" alt="'.$filename.'">';
            echo $dir_path."/".$filename;
        } else {
            return "The directory is empty!";
        }
    } else {
        return "Please enter valid path to image directory!";
    }    
}
// getRandomImage();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLOTH RECOMMENDATION</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="heading-div">This is our clothes
        recommendation website.
    </div>
    <!-- this carries all the four divs -->
    <div class="overall-container">
        <div class="cloth-div">
            <!-- div with the image -->
            <div class="image-div">
            <!-- <img src="images/jeans/jeans (3).jpeg"> -->
            <img src="<?php getImg('images/jeans')?>">
            </div>
            <!-- div with text -->
            <div class="text-div">JEANS</div>
        </div>


        <div class="cloth-div">
            <!-- div with the image -->
            <div class="image-div">
            <!-- <img src="images/shirts/shirt (6).jpeg"> -->
            <img src="<?php getImg('images/shirts')?>">
            </div>
            <!-- div with text -->
            <div class="text-div">SHIRTS</div>
        </div>


        <div class="cloth-div">
            <!-- div with the image -->
            <div class="image-div">
            <!-- <img src="images/tshirts/tshirt (4).jpeg"> -->
            <img src="<?php getImg('images/tshirts')?>">
            </div>
            <!-- div with text -->
            <div class="text-div">T-SHIRTS</div>
        </div>


        <div class="cloth-div">
            <!-- div with the image -->
            <div class="image-div">
            <!-- <img src="images/coats/coat (7).jpeg"> -->
            <img src="<?php getImg('images/coats')?>">
            </div>
            <!-- div with text -->
            <div class="text-div">COATS</div>
        </div>


    </div>
</body>
</html>