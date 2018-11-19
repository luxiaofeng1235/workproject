<?php
class GoodsController extends Yaf_Controller_Abstract {
    public function detailAction(){
        echo __METHOD__;
        die;
    }

    public function testAction(){
    	echo __METHOD__;
    	echo 333;exit;
    }
}
?>
