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
define( 'DB_NAME', 'recordmusic' );

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
define( 'AUTH_KEY',         'hGm<,|39J*gt3^G<@K^=i2h,!iyRqd/uCLpY;5~ Iy8$y7@pRwtY`y<t8B^jk<h2' );
define( 'SECURE_AUTH_KEY',  '[9XflRd u0Djj*tgr)>YrqxZSgm):q&R#k`,4Dj?0}Z8FG%P]!jJKG=CDs<p]eFB' );
define( 'LOGGED_IN_KEY',    'L%V]%K<Y83wBq^R^cz>K8vuc#A&??SC1t^E=uS6/SLf$;BvXJz-m5yf>~_Vij8V^' );
define( 'NONCE_KEY',        'CXo-(V77q)aO1nAtePh).}+#BbiWwp*.!FD0W3`NVwtD^JKa4F,YujhV8>do)Wc5' );
define( 'AUTH_SALT',        ' vMtz5Pd pch&N |/>@UN(V_VcP3fwU@-.*hGq_:Ox~bzFK[gTA&fp.G&0mtsoum' );
define( 'SECURE_AUTH_SALT', 'b<;*W<BzYm4Z>:K[>DQgBl9h..%rHK36v~h:nv8XTn*b;k$efVZ. /Dlek|[N*a~' );
define( 'LOGGED_IN_SALT',   'fy7HLLD3,Kv`XH/nDdCYh*%QR)se^Q.w[ }ykiM-LQWh1K*qMEICa@[Jm`q~?]O-' );
define( 'NONCE_SALT',       'U.^p>^lDv#ku#S]]GW3G3MLce+--k v;`XX@JPaTFiRAl8X,q@ODkI0nO#r@n[S5' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'rm_';

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
