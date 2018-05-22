<?php
  namespace Admin\Model;

  use Think\Model;
  
  class AdminModel extends Model {
    protected $_validate = array(
      array('username', 'require', '管理员名称不能为空!', 1),
      array('password', 'require', '管理员密码不能为空!', 1, regex, 1),
      array('username', '', '管理员名称已经存在!', 1, 'unique', 1),
      array('username', '', '管理员名称已经存在!', 1, 'unique', 2)
    );
  }
?>