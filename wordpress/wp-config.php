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
define( 'DB_NAME', '0025lawyer' );

/** Имя пользователя MySQL */
define( 'DB_USER', '0025lawyer' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'XT56WWo42D5Ov4lF' );

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
define( 'AUTH_KEY',         '0+=|K<E:D_.ZOskmN`{SP(UZ28QtD?KI04$Nh#{ane/6pH@,=k>sz/9|t^Kz<AWV' );
define( 'SECURE_AUTH_KEY',  '*2<l>:#,z]YwnJ!<@My:JZb9Or21p0(AP)+JhCv#t,PL%MwHmp=^,R#=:1NN%PiP' );
define( 'LOGGED_IN_KEY',    '@/<I+J72juD7i%3ktp]C*$07Cg%t^YK@Sg]xsoc~K^>JU}dZH}OOAwe@S/MykWmg' );
define( 'NONCE_KEY',        'j]Ww4me.b7p)[WzfGn,8~yZi#U;;@F}Ft#u.SkIAUBgVGi^,;Ti}l& =Y}-w2~3c' );
define( 'AUTH_SALT',        '[4$Y<UsYLRVrF+OP9_Ko_H/vGnn0wt`}c7$!z#P1,o8Ghx-RG?0:T2MG3lNC>YL;' );
define( 'SECURE_AUTH_SALT', '-X tBupmJHA(;6x3J%`iy;?*Q*a2EB+zW5#b/LUJS0zpfxZG5A|m.M.q7U^c:@-X' );
define( 'LOGGED_IN_SALT',   'Q2:c$E7Z)Vl-Im6dD<e|%:V(r9nx4M|oVGct|Yt$?B?C,=/qa,ggsYyl.*JFd%dP' );
define( 'NONCE_SALT',       '442>6VVP;g774V3T*GCW;T&tSo=_*Oz/Z:ITT8_}=)4]5$XqGjAt -pO+1a@OoEz' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'lawyerwp_';

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
