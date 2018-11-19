<?php
/**
 * @name IndexController
 * @author root
 * @desc 默认控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
use home\Test;//使用命名空间
class IndexController extends Yaf_Controller_Abstract {

	/** 
     * 默认动作
     * Yaf支持直接把Yaf_Request_Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/yaf_product/index/index/index/name/root 的时候, 你就会发现不同
     */
	public function indexAction($name = "Stranger") {
        //获取yaf的配置基本信息
        $conf =  Yaf_Application::app()->getConfig();
        echo $this->getRequest()->getMethod();
        print_r($conf);
        //1. fetch query
        //获取相关的get参数请求
        $get = $this->getRequest()->getQuery("xx", "default value");
        $get1 = $this->getRequest()->getQuery("aid", "default value");
        print_r($get);
        print_r($get1);
        echo "<hr />";

        //2. fetch model
        $model = new SampleModel();
        phpinfo();
        //3. assign
        $this->getView()->assign("content", $model->selectSample());
        $this->getView()->assign("name", $name);

        //4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
    }

    //测试
    public function redAction(){
        $result = new Test();
        echo '<pre>';
        var_dump($result->getarr());
        echo '</pre>';
        exit;
        echo "<pre/>";
        print_R($_SERVER);
        echo 333;   
        exit;
    }


    public function myOrderAction(){
        echo '这事一个测试的方法';
        echo 333;exit;
    }
}
