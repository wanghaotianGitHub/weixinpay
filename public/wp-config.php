<?php
/**
 * WordPress���������ļ���
 *
 * ����ļ�����װ���������Զ�����wp-config.php�����ļ���
 * �����Բ�ʹ����վ������Ҫ�ֶ���������ļ���
 * ��������Ϊ��wp-config.php����Ȼ�����������Ϣ��
 *
 * ���ļ�������������ѡ�
 *
 * * MySQL����
 * * ��Կ
 * * ���ݿ����ǰ׺
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL ���� - ������Ϣ����������ʹ�õ����� ** //
/** WordPress���ݿ������ */
define('DB_NAME', 'weixin');

/** MySQL���ݿ��û��� */
define('DB_USER', 'root');

/** MySQL���ݿ����� */
define('DB_PASSWORD', 'oneinstack');

/** MySQL���� */
define('DB_HOST', '127.0.0.1');

/** �������ݱ�ʱĬ�ϵ����ֱ��� */
define('DB_CHARSET', 'utf8mb4');

/** ���ݿ��������͡��粻ȷ��������� */
define('DB_COLLATE', '');

/**#@+
 * �����֤��Կ���Ρ�
 *
 * �޸�Ϊ�����һ�޶����ִ���
 * ����ֱ�ӷ���{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org��Կ���ɷ���}
 * �κ��޸Ķ��ᵼ������cookiesʧЧ�������û����������µ�¼��
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
 * WordPress���ݱ�ǰ׺��
 *
 * ���������ͬһ���ݿ��ڰ�װ���WordPress��������Ϊÿ��WordPress����
 * ��ͬ�����ݱ�ǰ׺��ǰ׺��ֻ��Ϊ���֡���ĸ���»��ߡ�
 */
$table_prefix  = 'wp_';

/**
 * ������ר�ã�WordPress����ģʽ��
 *
 * �����ֵ��Ϊtrue��WordPress����ʾ�������ڿ�������ʾ��
 * ǿ�ҽ������������ڿ�������������WP_DEBUG��
 *
 * Ҫ��ȡ���������ڵ��Ե���Ϣ�������Codex��
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ���ˣ��벻Ҫ�ټ����༭���뱣�汾�ļ���ʹ����죡 */

/** WordPressĿ¼�ľ���·���� */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** ����WordPress�����Ͱ����ļ��� */
require_once(ABSPATH . 'wp-settings.php');