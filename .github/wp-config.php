<?php
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * Veritabanı ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Veritabanı ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'test' );

/** Veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** Veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** Veritabanı sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * 
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz.
 * Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '](aHV/hSJ@pRr$&^Vt)hgEjT<J9N{N)sN&l eCgd&7+$w%^idFg682!0`PqvxE^5' );
define( 'SECURE_AUTH_KEY',  ',W>-i2EKOA8*ySm8~-VCdS46]r_.dIB)`qO`+I^rR8rW5Rgmslm~iaDR.x7zxQ:=' );
define( 'LOGGED_IN_KEY',    'I7Z B8:O+*s-prKz.x$?4uztR_o%>0)>>-*&v]ax*X[<w-a,;^h=d+0dWpIRAayQ' );
define( 'NONCE_KEY',        '4kBKeqq3wXS3&<pwKI~i_-P&Y>fgUP]fsbd3.Gj4b[ENeTk-b&-0>Ps1Ss}yz5;9' );
define( 'AUTH_SALT',        'tLE~$,o^Yo>oCXs^~[uS?5=y7L5<2#Q4L:HXhvk)?]LRJ(ZGIh3|n%!enOP*Ts~y' );
define( 'SECURE_AUTH_SALT', 'o^KW43b,-B25Gv1 zIkshkx7LJ9}|w1:Z?k~1$!?RQxa`~?c~{#bL!>:X>x7+^^L' );
define( 'LOGGED_IN_SALT',   '#!Qsw/-P=pCLx_]c#{r|AK$XxsJ)c_`0UR3c0LE!&*J,=BJ $izLrBL#V0k}-vDZ' );
define( 'NONCE_SALT',       'U&Nqyw&-.},`xyKtI< 2KA5cL@*S*l1Q ;iTAL35gQVO!o:OZyaO=D.n}C#(= I8' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri true olarak ayarlayıp geliştirme sırasında hataların ekrana
 * basılmasını sağlayabilirsiniz. Tema ve eklenti geliştiricilerinin geliştirme
 * aşamasında WP_DEBUG kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Her türlü özel değeri bu satı ile "Hepsi bu kadar" yazan satır arasına ekleyebilirsiniz. */



/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';