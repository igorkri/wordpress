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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'memory85' );

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
define( 'AUTH_KEY',         '[+wS0>6<yNLR:MN60N_yph^_jfFd6Y>-lR8FbVdvs(S+^#+=(5HC;=GkUU{^H4p9' );
define( 'SECURE_AUTH_KEY',  'dkc3cN,>8gyS0%9:YlNGl4<}>X(6qyj-8&o:7e>vUo)pHjoJ5!Xv=ssD8Y+Nn{:#' );
define( 'LOGGED_IN_KEY',    '78al<m.qMRcO5>TMUXPxg]bphpd){Lzf,%oS659(h4{2HsGcGx,&bG#3PDNl4)6g' );
define( 'NONCE_KEY',        '~CdfKyq+V=hp02+cc(mbMBe`1BOv16I<14/Bt#/m$Qn}PV[,n+BZW,6ETHH@_wt,' );
define( 'AUTH_SALT',        'm*bC8CXT9h0DIsfKr)j~EbP^Y&Ts6I3OU)(<GLZ(hA[x&!$uhsIjOvTU>[>Y7@Kd' );
define( 'SECURE_AUTH_SALT', 'td@}p{#17Oy<]@D)-DBc:QwegOR$G??NiHL1%tm@]* Xk8i)Rw$+sSy#ho|2ZD(I' );
define( 'LOGGED_IN_SALT',   '~<u<D+X^27qe62eg,7k:`*J?oHk:n+82~vr<Kz#:|W_AlT)RhtZJ~?A<O:MEZ`8^' );
define( 'NONCE_SALT',       'i-a>sBE$ +6N`[az:pdk6c&7^%jvuzM^Rv`H[MbS?<m.hxeH@dDAD.V1}p0WM?$w' );

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
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
