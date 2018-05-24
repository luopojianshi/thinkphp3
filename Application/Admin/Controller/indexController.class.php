<?php
    namespace Admin\Controller;
    
    use Think\Controller;
    
    class IndexController extends CommonController
    {
        /**
         * 管理中心
         */
        public function index()
        {
            $this->display();
        }
    }
?>