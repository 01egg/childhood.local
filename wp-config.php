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
define( 'DB_NAME', 'childhood' );

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
define( 'AUTH_KEY',         'pi>.9+ZI/ERcQhj>L3(d,r;<Fb88CdhkiR_L;G2wB]Qq;=!@8vqMR3*2y]+l|8,4' );
define( 'SECURE_AUTH_KEY',  'OvyO;yq}|f!Oh`.3S42_}tvuwR_ H1j`=81Z1~>A?xcBoJ?+slXpsT=|Z7WnBpH%' );
define( 'LOGGED_IN_KEY',    'UTsGb~;Ea&Bd9~]gd S[JIRhB5FnmE0,~@WqQK-mM3!mE>z]W`f37#m2gm+HY>kZ' );
define( 'NONCE_KEY',        'M#4%j03~w=Ln#<J%Q(2)7@MS/GV1lAL]Cex-@{hSoN3eSx_OwBIGnG7|>1SvM+NR' );
define( 'AUTH_SALT',        'g0ZboM!-WeBo$![ZsR.ix,<Vq$[~QDo})ebBoIx5RH}]va<`zi<Y$KgLdAWG8ht(' );
define( 'SECURE_AUTH_SALT', 'gjtjBSVf kNUbi>Qp0<QgqP`~@xt4`$(6hgnDmNg?:ER9d:{J419EaFjm4N.aHA0' );
define( 'LOGGED_IN_SALT',   '?T&u=d8d^Nu^O)oew=hf%nV3DCuL_SWAL$4OPe=){=v927~Jl@y~{^e&.w_!cwij' );
define( 'NONCE_SALT',       'n$3(t>XS!]cN/KVYndFY+@&)+T=k,L& +LA:Is0f2Kuk cM&|b0O$(?sWb1 G4|v' );

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
