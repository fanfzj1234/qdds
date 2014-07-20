<?php
class PublicAction extends CommonAction{
	// header('Content-type:text/html;charset=utf-8');
	   public function verify(){
	         import('ORG.Util.Image');
		 Image::buildImageVerify($length=5, $mode=1, $type='jpg', $width=60, $height=26, $verifyName='verify');
	   }   
?>
         
