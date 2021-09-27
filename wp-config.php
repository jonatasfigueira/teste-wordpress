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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'fusiondba' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'A#8A&^>kv`v~95^&<=t>`|,7`zbl#-L6pRq5Nl[/}$8SnUsDn|h9D @W]p265bF<');
define('SECURE_AUTH_KEY',  '-EjnCwq6aNYxXm!-RF2EHhjEnkB#n2mhU=cxh7ivY],4V_QMrL,roR{+arClvx+*');
define('LOGGED_IN_KEY',    'f5~RXV_z}a-2bga-8-rEHvo>D|5z<z/U+IQ1ldTVEH@;GX)4s@@,N)V^`tJ@U!KK');
define('NONCE_KEY',        '!6Q&2:LV77`wf-dhRb=rE6{r]LYkL:JykEvJEIW1zxd-nDg4px`+l 0%+9Imzum8');
define('AUTH_SALT',        '[v:0}|w|aO3[=-D8x-0(t1cM8|)pG<P;c(5p2w$qb``4~H u7#rGaU#:zm*Mz*,x');
define('SECURE_AUTH_SALT', '-D#*gl6<_|8,A-skHLwET?Y(//3=tUM?-J/ zz|$DnQ~m<X#i`8yb9&8IDtxR(aq');
define('LOGGED_IN_SALT',   '|@lmT@lvIt6[w_YH8zUM-0F90M@X&CZ_**{,~^gbAklGTa3xDsb}4M7:wMbx=4+7');
define('NONCE_SALT',       'IH-dsrf9 +oZ%Uh!2y^4:Ur?3HxVd5;#_|P,,Vw- Lc#q(Q]Ym!~pY8=e%X-m||m');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'fsjf_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
