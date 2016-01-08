<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*/
class WeChat_model extends Base_Model {
  public function __construct() {

       $this->db_tablepre = 't_wechat_';// 不设置默认为t_sys_
       $this->table_name = 'config';
       parent::__construct();
   }

   /*
   *    这是一个演示模型方法
   */
   public function rows(){
       return array(

               array('AppID'=>'这'),

               array('AppID'=>'块')

       );
   }
}
