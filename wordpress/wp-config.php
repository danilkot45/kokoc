<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y:3?lv0DDE5kic`RM}Ym i.TWEOX?;[f9>2;9O%eBx))tEWPOBr{U(rbh#eX{m#,' );
define( 'SECURE_AUTH_KEY',  '*k48ZDY4:]t$q:}5^RF-Ar/6-RyD]RcvE|33<|4GM3.C-3)[XfK_y>=>AwH`si s' );
define( 'LOGGED_IN_KEY',    'xA$:E0z2K8YJ.7%3)MM?t=e!{njnCn@ G;p`v!x|W1bS&7HNV@r*<>)}GK-{AhC#' );
define( 'NONCE_KEY',        'C21.OXsLrTqROa!pSWNByFEhxcTDOmH$S2SX6#(|tcW@sk<nq)x9)zcPXly8{CW4' );
define( 'AUTH_SALT',        '0Zv7!:vC7n8dwLd+rf/NnK/=*+#U6hb9d}pXS5X^gJmW7[v{UItMFT3+sjO zF.=' );
define( 'SECURE_AUTH_SALT', '}%V}f7|Om0x>bNL0Y[2/eSVx:;{rw2=iIV`PhsNN.FQZh5Iyl#?A.KPh<bPn~Z_v' );
define( 'LOGGED_IN_SALT',   '2DUU~t)ev-4[y5DT+!+IvSGtnO9?zI.P]KMi>FTyS`uS5riWJ~7u7JUl<ZsjoO??' );
define( 'NONCE_SALT',       '8bz <[%?f (evn9oB!c26efmWigZ3x]5?,z:x)/S]01w:x?bmmzjSL>v(rakJ6S>' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
