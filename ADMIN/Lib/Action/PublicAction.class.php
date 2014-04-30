<?php
   class PublicAction extends CommonAction{
	   public function verify(){
	      header('Content-type:text/html;charset=utf-8');
              import('ORG.Util.Image');
              Image::buildImageVerify($length=5, $mode=1, $type='png', $width=60, $height=26, $verifyName='verify');
		   }
   public function jpgraph() {
	import("ORG.Util.Chart");
    $chart = new Chart();
    $title = "柱状图"; //标题
    $data = array(20,27,45,75,90,10,80,100); //数据
    $size = 140; //尺寸
    $width = 750; //宽度
    $height = 350; //高度
    $legend = array("aaaa","bbbb","cccc","dddd","eeee","ffff","gggg","hhhh");//说明
    $chart->createmonthline($title,$data,$size,$height,$width,$legend);

      }
}
?>