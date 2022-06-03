<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'petshop' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9+C`yI$<o3f99h74ua|R+IQ4DuV%3GL*};)r^xShE+.>j55v^T@}| OQt|~LK5dS' );
define( 'SECURE_AUTH_KEY',  ']Zp{{m5o_?uXaE`p| AE.g-&0SZ`}S{Pk#(aS,VVH4q]fi3WNGVy&8B/H(EA)kI0' );
define( 'LOGGED_IN_KEY',    'Z~V?$u8g`.z{x<9PadfoRVv4tJ`J!y(tC:V8l@jQosi3<4^Gp&1<D,f~_*;lS A^' );
define( 'NONCE_KEY',        '^VgBfAhsrXt6fV&I#aggm9#]h@m*h7GoW%oCtEFM2s@[luSf.Ge$U:lKPw:p{:3#' );
define( 'AUTH_SALT',        'D_4eV>V~fBb?n!)!#k?S8eb0f`YJBNn^zg^N0q_3,eV.:-IZ?uc;6pJfBsA 7{#_' );
define( 'SECURE_AUTH_SALT', 'j<!b.G{{p}VGi8x.iMBWDru`9Mmx}08 5O6TZt{R O86QYb_5pftu~0m(@BoeXts' );
define( 'LOGGED_IN_SALT',   '(i  Lz n=bv9w17u_j.wWI2|%9DWsj%QlQ?%d#bh^lZ$&[5$w*$TX([8=[z?:|iX' );
define( 'NONCE_SALT',       '#}p#Dj_i.;m1#C(+f9~$1%Ja;B3&Iz?m.}+*EW7>.ju.6R-(}9T[ /SiXI_B.Q#c' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
