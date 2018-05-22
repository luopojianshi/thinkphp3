# --secure-file-priv
## desc: #### 在终端中运行 mysql 命令 select ... into outfile /path/xxx.text,  查询数据表将数据表的内容输出到文件中, 报错 ERROR 1290 (HY000): The MySQL server is running with the --secure-file-priv option so it cannot execute this statement.

## solution: #### 搜索解决办法时, 找到网页 http://geodatawrangler.lazym8.com/blog/2017/02/16/secure-file-priv, 按照其中的办法运行 mysql --help (| more)(我的本机不需要) 后, 找到默认的配置文件读取顺序 "Default options are read from the following files in the given order:
/etc/my.cnf /etc/mysql/my.cnf /usr/local/mysql/etc/my.cnf ~/.my.cnf", 我的本机上 mysql 安装在 /usr/local/mysql-xxx 目录中, 我在 myslq-xxx 目录下创建了 my.cnf 文件并在其中写入 secure-file-priv = "", 重启 mysql 服务器(系统偏好设置 - mysql)(网上方法 mysql.server start 我的不起作用, 暂不处理), 将输出内容保存的目录设置 777 权限, 然后在终端中连接 mysql 服务器, 执行 select ... into outfile /path/xxx 即可.
