<?php
/**
 * Created by PhpStorm.
 * User: qinlizhi
 * Date: 2017/11/6
 * Time: 下午8:03
 */
class LoginOutAction extends Action{
    function index(){
        session('[destroy]');   //thinkphp中清除session方法
        $this->redirect('Login/index');   //完成后跳转到相应的页
    }
}