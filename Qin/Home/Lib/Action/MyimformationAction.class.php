<?php

    class MyimformationAction extends Action
    {   

		function index()
		{
			$User = M("imformation");
			$value1 = session('username');//获得Login模块的session值

			$id = $User->where(" username = '$value1' ")->getField('id');     
   
            $this->assign('username',$value1);//将value1的值传入模板
            $this->assign('id',$id);//将value1的值传入模板

            $this->display();//显示页面
		}

     }
?>