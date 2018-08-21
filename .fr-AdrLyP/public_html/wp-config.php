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
define('DB_NAME', 'cs84711_ecwid2');

/** Имя пользователя MySQL */
define('DB_USER', 'cs84711_ecwid2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'SQRT149162536');

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
define('AUTH_KEY',         'FAz3_A(<~2r/7pxRb<1hh/_g!smMG~DI<.yoDo|/sqp drC$=squ{g8R_gGHBY*$');
define('SECURE_AUTH_KEY',  '#+-JWSwd{4ulN^7t Vw(W,A-v@dIEQb5k>SVV78ztA&_, ?us=uspQJucW`0d0+G');
define('LOGGED_IN_KEY',    '*UJo-m@;52b6qV-j=oQ$b!1i]zGUc:%EVaj ~<YZ;<_k+jZXPN&[;/WRSYkO|;6l');
define('NONCE_KEY',        '$icDl3O ]NASRPd]N&xbo`iQ@&D,hfc%JDoBr%u|@F*^sf@(T0fy$RuM%=+O*%8+');
define('AUTH_SALT',        '2~)=^$d,-QZb+W=Pz(&-kYWYO0@X*Rs6;RUwLqe3F/,gT/yhb/`#DLU`l UYjeut');
define('SECURE_AUTH_SALT', '$*GxDMY_+Tz-|#%C@2!itX(>AcVj.G^p+9Ec/p|CX_E/@:?F>m3(Q4PKK5fBq2u[');
define('LOGGED_IN_SALT',   '}8Awg=+|T$zf:]JxD+j}]}O3&x4mH_$`M!L[q5tkL[6+(X2O<m,N@s?Y5VfM64Ht');
define('NONCE_SALT',       'G;iuViHX$+MR7Pw[wQIG&v3Nber&n5sS~yyYFXm^~x%t,u!7> }@2aZFQ)wHgs3Q');

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
