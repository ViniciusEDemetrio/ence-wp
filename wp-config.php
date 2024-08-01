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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'encedb' );

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
define ( 'FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'u3#NcpPZZu0+A6qqam8Pf,aMRge]5jiT>1rK#Wt{~l}BUh*kJ`,F }^ldyK74*aD' );
define( 'SECURE_AUTH_KEY',  'oPC6ni&[LcW|yg:vls6,`w-G~}W*eK)pL3~}71baCzce{SnKxYPz1s1Y%l:rk 7K' );
define( 'LOGGED_IN_KEY',    ' Z2;c%<8AKx5k%HC)8{kc@Xy$$qSp),}dl93)NwWLgNf5n)2WcM7Ti&9))hBvtHt' );
define( 'NONCE_KEY',        'y=R1R.W<{J8X(z-jfl,YBac:kXvFi3`.@AIY^!>ky9 oNk/7(,_W5ZKPX28@$54:' );
define( 'AUTH_SALT',        'V{8G2l)Wc}Rt;cI+XD%+]D$!;W{LrP!a qr=jOMf3Spa]}wbQC6LQ@e<|9<+ ~k/' );
define( 'SECURE_AUTH_SALT', 'Gbv$8$X7QPW:FuE TcB&n*ab/%ZEG|A%>4rZ6NqN3Z,#shkX!/8Q:3$o[a0WBe&I' );
define( 'LOGGED_IN_SALT',   '@[R]r[&90}lLXXEL|xZW?OTv9,z<n~neyel,|:+qL`>DLbYn8kqF/4Xb(X%*6]SS' );
define( 'NONCE_SALT',       'c#g43tpfmk)xb3Y:(]x?EQEO5(,021n$]IpK,`KM1L=LG=Rru9X~*r3)7z-m76pi' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
