<?php
return array(
	//'配置项'=>'配置值'
	'DB_TYPE'   => 'mysql', // 数据库类型
'DB_HOST'   => 'localhost', // 服务器地址
'DB_NAME'   => 'zheng', // 数据库名
'DB_USER'   => 'root', // 用户名
'DB_PWD'    => 'root', // 密码
'DB_PORT'   => 3306, // 端口
'DB_PREFIX' => 'zheng_', // 数据库表前缀 
'DB_CHARSET'=> 'utf8', // 字符集
'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

'TMPL_PARSE_STRING'  =>array(  
	   '__HPUBLIC__' => SITE_URL.'/Application/Home/Public', // 更改默认的/Public 替换规则     '__JS__'     => '/Public/JS/', // 增加新的JS类库路径替换规则     '__UPLOAD__' => '/Uploads', // 增加新的上传路径替换规则
	   ),
);