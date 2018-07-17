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
require __DIR__ . '/vendor/autoload.php';
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'web-wp');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DZ0L;PN-:g*is/=sg(dr!Lj*fHd0rdYR.(s_GEvy!XKV9g2J~y,92@DNn}8NOR$i');
define('SECURE_AUTH_KEY',  '*wtUN~SY@-LaW4l%8>5[g:%v54 p/GEo/hJP` B1jmgE3`3%mSGG>fj?N-sX=>xb');
define('LOGGED_IN_KEY',    '(xRFY@VCqq+e*/SRdhE[Nf?7qdE/?~%tuDckcJk[68MVoA@Jpsk*`n<Fai|CJP~9');
define('NONCE_KEY',        'Ui#%3~9woW!^_.zV]N5O-DlKvw!$;/NFk|{az:1m-AL;nUsS:DmlU!7XV~=cLk/F');
define('AUTH_SALT',        '4<z!EGu_N@@<y&6k},tpu$+?x#8K<,nK]vu:*_Fpn!vAU--bV^8_YWSTyjeo/h;V');
define('SECURE_AUTH_SALT', '@V#)z?S4^.]fc$>|yYc(c{7xbp54O>r|SM0(=~/pf<</,/uUAYld:dw2d|P)7j4,');
define('LOGGED_IN_SALT',   'N*0IFF!!%X~6dnKlS$ vR]YSWLi7RrAz%ZCwh*MAwodo5dXm`7wbBw}ca(wQp+C]');
define('NONCE_SALT',       ',b|F$ahg&Z[LS}gpd3.Ycv:f[G|;o:1sG9b=w;Jw;pvMs@P|.n]f%UKqn8B/9ym5');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
