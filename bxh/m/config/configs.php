<?php
if(!class_exists('configs')) {
    class configs{
        public function permission(){
            $Arr=array(
                array('id'=>'1','per_level'=>'1','per_name'=>'Admin'),
                array('id'=>'2','per_level'=>'2','per_name'=>'Level 2'),
                array('id'=>'3','per_level'=>'3','per_name'=>'Level 3'),
            );
            return $Arr;
        }
        public function banners_type(){
            $Arr=array(
                array('id'=>'1','cat_name'=>'Slides','cat_rewrite'=>'slides'),
                array('id'=>'2','cat_name'=>'Banners Top','cat_rewrite'=>'banners-top'),
                array('id'=>'3','cat_name'=>'Banners Trái','cat_rewrite'=>'banners-trai'),
                array('id'=>'4','cat_name'=>'Banners ph?i','cat_rewrite'=>'banners-phai'),
                array('id'=>'5','cat_name'=>'Banners footer','cat_rewrite'=>'banners-footer'),
            );
            return $Arr;
        }
        public function con_element(){
            $Arr=array(
                array('id'=>1,'cat_name'=>'Text','cat_rewrite'=>'text'),
                array('id'=>2,'cat_name'=>'File','cat_rewrite'=>'file'),
            );
            return $Arr;
        }
    }
}
?>