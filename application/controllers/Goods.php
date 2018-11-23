<?php
/**
* @note 测试方法
*/

class GoodsController extends Yaf_Controller_Abstract {


    public function detailAction(){
        echo __METHOD__;
        die;
    }


    /*
     *@note 测试方法
     * */
    public function testAction(){
    	echo __METHOD__;
    	echo 333;exit;
    }

    public function initMyReductAction(){
       echo __METHOD__;
       echo "<br/>";
        return false;
    }
}
?>
