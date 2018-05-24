<?php
  namespace Admin\Controller;

  use Think\Controller;

  class CommonController extends Controller
  {
      public function __construct()
      {
          parent::__construct();
          if (!Session('uid'))
          {
              $this->error('未登录, 前往登录页', U('Login/index'));
          }
      }
  }
?>