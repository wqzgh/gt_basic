<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class WeChat extends Admin_Controller {

    function __construct()
    {
        parent::__construct();
        //请在这里初始化模块相关设置

        $this->load->model(array('WeChat_model'));#这里加载Demo模型，稍修建立，如果不需要用到数据库，请注释掉这行
    }

    /*
    * 这里是默认的首页，访问
    */
    function index(){


        $hello = "你好";
        $from_table_rows  = $this->WeChat_model->select();
        $from_model_rows = $this->WeChat_model->rows();
        $this->view('index',array('require_js'=>true,'hello'=>'你好','from_table_rows'=>$from_table_rows,'from_model_rows'=>$from_model_rows));#这里是加载默认对应视图， 并传值系统默认参数require_js即开启requrie js

    }

    function config(){
        $hello = "你好";
        $from_table_rows  = $this->WeChat_model->select();
      //  $from_model_rows = $this->WeChat_model->rows();
        $this->view('config',array('require_js'=>true,'hello'=>'你好','from_table_rows'=>$from_table_rows));#这里是加载默认对应视图， 并传值系统默认参数require_js即开启requrie js

    }

    function menu(){
        $hello = "你好";
        $from_table_rows  = $this->WeChat_model->select();
        $from_model_rows = $this->WeChat_model->rows();
        $this->view('index',array('require_js'=>true,'hello'=>'你好','from_table_rows'=>$from_table_rows,'from_model_rows'=>$from_model_rows));#这里是加载默认对应视图， 并传值系统默认参数require_js即开启requrie js

    }
}
?>
