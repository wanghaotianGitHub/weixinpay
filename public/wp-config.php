<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'weixin');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'oneinstack');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'o27Asb7O=clEZeE@qLwsIQ{gJ[/;0V-|I@M/1;fG/?wpc_F~x.s#J$&Is]<p;8T~');
define('SECURE_AUTH_KEY',  '0ZTe+YJH*3._!BW*qi&.7n a)xQ{WgkJL*dr$`TKYy-KIYV8b5GN=>E`q9,sBF?)');
define('LOGGED_IN_KEY',    '>7gW@j624=~Cr91IFIFj7Tp)6_D:(6Y|)syEUFAGVSUcsv`@0LSZjle&u(@LQ@<p');
define('NONCE_KEY',        'U.t!)5sjhYRm-.krRm4w,)*r .mni7?),^R>QT*4hDJ+K(D9[yTbJb*,wPm^3~Vj');
define('AUTH_SALT',        'W+?c*oOhs~a*AB8ATi*(em`PdwI$8u{Tds`%_}w0.0(fO7{.,B23#1=hfzV~4Wnb');
define('SECURE_AUTH_SALT', ']5<>w4%O F7%:l/#ws_x X89Y,$ixvyb|q96,iY(A=xEUxgfi$M7avKy{a@QlusC');
define('LOGGED_IN_SALT',   'g=d[ywET$y}tmo!1dZ&N.+m,[=uax?ygY1|((<Mlj;s3]U}^YnD+q{Trb8;q>aRw');
define('NONCE_SALT',       'no*gS.b_&4{8-B$5!Qk6xU}>-F3_S?cI*DTPJ(x-4,!F SP3M4VXRq% `sa1cm2j');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');