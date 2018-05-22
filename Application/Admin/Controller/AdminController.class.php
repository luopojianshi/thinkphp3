<?php
  namespace Admin\Controller;

  use Think\Controller;

  class AdminController extends Controller {
    // 列表显示
    public function index() {
      $admin = D('Admin');                // 实例化 User 对象
      $count = $admin->count();           // 查询满足要求的总记录数
      $Page = new \Think\Page($count, 2); // 实例化分页类
      $show = $Page->show();              // 分页显示输出
      // 进行分页数据查询 注意 limit 方法的参数要使用 Page 类的属性
      $list = $admin->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
      $this->assign('list', $list);       // 赋值数据集
      $this->assign('page', $show);       // 赋值分页输出
      $this->display();                   // 输出模板 
    }

    public function add() {
      $admin = D('Admin');
      if (IS_POST) {
        if ($admin->create()) {
          if ($admin->add()) {
            $this->success('管理员添加成功!', U('index'));
          } else {
            $this->error('管理员添加失败!');
          }
        } else {
          $this->error($admin->getError());
        }
        return;
      }
      $this->display();
    }

    public function del() {
      $admin = D('Admin');
      if ($admin->delete(I('id'))) {
        $this->success('删除管理员成功!');
      } else {
        $this->error('删除管理员失败!');
      }
    }

    public function edit() {
      $admin = D('Admin');
      $admins = $admin->find(I('id'));
      if(IS_POST) {
        if($admin->create()) {
          if(I('password')) {
            $admin->password = md5(I('password'));
          } else {
            $admin->password = $admins['password'];
          }
          if($admin->save() !== false) {
            $this->success('修改管理员成功!', U('index'));
          } else {
            $this->error('修改管理员失败!');
          }
        } else {
          $this->error($admin->getError());
        }
      }
      $this->assign('admins', $admins);
      $this->display();
    }
  }
?>