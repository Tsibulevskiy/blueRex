<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\OSPanel\domains\wp.loc\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'Wp-blue-rex' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LR#HpfTJMtqb}!&Zh{)`$_zFW;^Pi`IYc=JY**},lwF{-)ody,zyb[|u7~(S*G?R' );
define( 'SECURE_AUTH_KEY',  '+%?trW2V91R4x[^L$dGFxZ,jgm$Zp1qKRe@tq*Y7b.(0YoDeW8@ev T=Tat|m<K7' );
define( 'LOGGED_IN_KEY',    'Xy;b.Cl V)xS1^;T/NE+0EEfWE|B-7/9zZUQU~G{0_::M(sF}hGZR;ybV>+(?e(O' );
define( 'NONCE_KEY',        ',/L~~pmj+?I=qxd4lJ&4*;i){Z8oeC~9c-9Vy,TI{hmU_o-,&J:%KwweKPb.>M<O' );
define( 'AUTH_SALT',        '6_bVK[z@Ivmj:.IFs.DCFxJK3lm%sr_Nt6?MwGqiios`jV|*0(Q$:P;[CBJNJ,IJ' );
define( 'SECURE_AUTH_SALT', 'hnGkhC/_?*$4qkULapT2Nw`pubyoDQ:ahl87k]4BX6[!;Jm.Ikm1b;{45lJn)R=S' );
define( 'LOGGED_IN_SALT',   'cH$z!`x/?>YXtVXX6B#|4Q2<{6ruKJw5EN=[0O/N4^X?G(V.f;GFtfS(7Ui%J~~9' );
define( 'NONCE_SALT',       'f|DkT=$s,-)<;aq:sIHm$-yy2wc&QX:h-HsCdKJ1&br%b!4/dX@+`L!cU;v`OD0V' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
