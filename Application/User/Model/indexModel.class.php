<?php
  namespace User\Modal;

  use Think\Model;

  class IndexModel extends Model {
    protected $insertFields = 'name,email';   // 新增数据的时候允许写入 name、email 字段
    protected $updateFields = 'email';        // 编辑数据的时候只允许写入 email 字段
  }
?>