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
 * * Настройки базы данных
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
define( 'DB_NAME', 'c78819_synclabv3full_na4u_ru' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'c78819_synclabv3full_na4u_ru' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'ZuSroNihhaguf24' );

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
define( 'AUTH_KEY',         'Jo10mT;(:f2,V3Cq)+=e|:94cUn5(1RNd4l:{C|PCmd-MRm{/s{l*LNncuMK_H9I' );
define( 'SECURE_AUTH_KEY',  'GxG#a0SmK.RRNPJ]#<KNr4NvPp9:AItol|5%p:wen&RI,((MA02bmHuK|LDm.YdD' );
define( 'LOGGED_IN_KEY',    '!XFp)KkAV6Y<0]E)4`M^<cx&<~S|e7OE_{F]mbcfoRDNLHxlQ#[kKxrHe1g.7rwU' );
define( 'NONCE_KEY',        'fDo.}v7mBetU3.oKY{ c^`2tEXT.Oks;[afvbOh?A?CCN[@eN_m0zSk/ftG>+F+@' );
define( 'AUTH_SALT',        'MY6X3p|a)d,F7M!qOuH0xN1/G+P]A/H< (yI@8az/<b:MD3=E>4|@iXfeOZl[P/W' );
define( 'SECURE_AUTH_SALT', 'l-Fq&~~}c#ug2W+~Kf6:LR7q&H%e<cv8RQ_^n}>uIVh*lM`eBK>73Na7+&pfFABR' );
define( 'LOGGED_IN_SALT',   'EX/QV*h5j|ViOJtE?Rr}c{J^90XBr%%e.@Uu3<zfa^5}c4sv;!-SN}jXO`Y/U}0,' );
define( 'NONCE_SALT',       'u/eiQ*rO`NWGP{x}q5aOEIa9fy?YhHP|wWH3FNSLB)}!C_%N5lG^BLklw?P6UT*F' );

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
