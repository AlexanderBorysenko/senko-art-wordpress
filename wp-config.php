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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'senkoart');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1-2-3-4-5-6-7-8-9QWer');

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
define('AUTH_KEY',         ' gL5b@&Wx^$MOe$2=k]IxVS[@g|,Y`(9MV,S]nq*1&ojH2X(H+jz.RcV!--TeRiU');
define('SECURE_AUTH_KEY',  ' 9$c<99{5sE.jr;-uA?6.z^dMR>4YRZr_95-*z22D{Z6p~|KIz+.4Ne3FG0~o%wp');
define('LOGGED_IN_KEY',    'AEhIJ>Uqm`}PuRf s)Lw>6<T3{uqBEg~|:&SaA*Oe*7v:Xhl_@!CN:5,(*,dhB]E');
define('NONCE_KEY',        'Zly`8`4Q!4{f_wqbYek)EC-DQ<vEkKTLEG{`VNy=kUuLlmFPI CJYGFp&IsF<(cH');
define('AUTH_SALT',        'Ys+d6s}*M&EKmi[%*$}+o3?rew#Z;C<I;mvt&48W[vjb!frev~q0(v#_|%lde]ty');
define('SECURE_AUTH_SALT', '`V4ity:AerNQJ$TvVcB]$vq$%BmZP1+In%3<2MvIrRX[h{j4>ULoM|HIpmP!S//?');
define('LOGGED_IN_SALT',   'o}m/&:+fK,[u6r_<^?UJk]?vG%L^i^;LUGq#eAt_tlQ;9zWoDI,:!V{(iMooBiD:');
define('NONCE_SALT',       'thz@6Gc|Wg)jXZ#w<x/&y{QWH.*r(~R7s7!B] 9*`TEe *pR}_)s(y`}KRZOq1[8');

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
