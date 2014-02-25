<?php
/**
* Class that creates a png image out of a string.
* This will be then used to validate the input.
* 
*/

class Getpng {
	public function __construct(){
                session_start();
                $num = 0;
        }

        /**
        * returns a random number saved to a session variable called code
        */
        public function generateRand() {
                header("Content-type: image/png");//the document is going to be an image
                $num = rand(1000,9999);
                $_SESSION['code'] = $num;
                return $num;
        }

        /**
        * returns a created PNG image
        */
        public function setImage() {
                $im = imagecreate(80,25);
                $back = imagecolorallocate($im, 0, 0, 0);//backgroud color in RGB
                $text = imagecolorallocate($im, 255, 255, 255);//text color in RGB

                imagestring($im, 12,20,5, $_SESSION['code'], $text); // setting up the image to be created 
                return imagepng($im);//creating the image
        }

}

$image = new Getpng();
$image->generateRand();
$image->setImage();
var_dump($image);
?>

