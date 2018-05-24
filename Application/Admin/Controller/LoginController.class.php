<?php
  namespace Admin\Controller;

  use Think\Controller;

  class LoginController extends Controller
  {
      public function index()
      {
          $admin = D('Admin');
          if(IS_POST) {
              if($admin->create($_POST, 4)) {
                  if($admin->login()) {
                      $this->success('登录成功, 跳转中...', U('Index/index'));
                      session('uid', $admin->id);
                      session('username', $admin->username);
                  } else {
                      $this->error('用户名或密码错误!');
                  }
              } else {
                  $this->error($admin->getError());
              }
              return;
          }
          $this->display();
      }

      public function verify()
      {
          $Verify = new \Think\Verify();
          $Verify->length = 4;
          $Verify->entry();
      }
  }
?>