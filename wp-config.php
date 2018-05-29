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
define('DB_NAME', 'casinotoplists');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '3$7%ZNM,s/*]shA7b^`{*8r>uq#K#*bh2q7[oJ=;Xx(]/;fA>8^u|&4s83Bm#iXj');
define('SECURE_AUTH_KEY',  'S&LkrMy?`%Eg B3?>dK O%V98Qp+_)nGI*yYqP9zj&~aH{IIUbmKwFx2[@vX([({');
define('LOGGED_IN_KEY',    'XV!/4p9t(h=u8->0(FhqZ>40&c>$V:zy#uRE^J1Y`_T`UOP$zL_Jz]^EYoSZw4[u');
define('NONCE_KEY',        '%E9y[?Ld*^r9M+l lXY7;G&?K@u>M0Cn}`35zuM.u>jj<MQhvwIuJ!/{px!}:{-b');
define('AUTH_SALT',        '_-<)W8sStP/,8tVI/of40^b>jG4p3LQ4y%+T:7{H+?}:C]Q8w0u@_s.V8I-(87uQ');
define('SECURE_AUTH_SALT', 'bGQIT me)yiz6{_~0=/m[M9&72tQ-{P{8Q.%Ax{Wv6J#E9@3|(_A+fE3v:ueE1+^');
define('LOGGED_IN_SALT',   'isZ_6fc&l>K=Q22Msk_*3NP(Jfjf(/se=;@r -L7V%UiC9?$YWzX]ttgOUV2z(+t');
define('NONCE_SALT',       '{mF92W)k0Jq;JoOV:w0GN%ehSvS0Yv#OD)!a:4YQ6;VUCj%HC!zDcTAKL,%}|MJb');

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
