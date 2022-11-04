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
define( 'DB_NAME', 'palladiumestetica' );

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
define( 'AUTH_KEY',         'LSOqRJY|v9 C<Id{uh]uo/u;#d~!J&.y)2bZ]),0+!HPNj-;=)g;|@kZjlCtba>y' );
define( 'SECURE_AUTH_KEY',  '_2^zbt^]=zbfKf)YN+,DU%]G6nG,XwlF=T(!/~@[@{R(QE4wI&L1vf11H4Gjsi%f' );
define( 'LOGGED_IN_KEY',    'WhTQO@ P~)Ex&J6)2hsZ/#|3eLvL~)jU>UztK6J6qF7F:Vm4;z+:8_1suhHz_U=H' );
define( 'NONCE_KEY',        'pO+FhQ.y*Yh-$nj2|T%Aw9}78h%]O#--t:8<<6b:.`b#yydJ]5*CUjsVw(3A?P_f' );
define( 'AUTH_SALT',        '*l%8_D3r#cKfv/O!CCqnt-<,<d9sAxD2tetm@k/_Koxfv)X)+{)Z~YxogF<&UezY' );
define( 'SECURE_AUTH_SALT', '`JSHmXGg&3_Rnu ]cj,;):Z hY<aMM`[FC%bQ]i%_C~+9)5C8h&Qt.(cZt:TO*of' );
define( 'LOGGED_IN_SALT',   'Xl&,S2s+vbaIKk0]IG`AbfQs(~2|hp|=5oxQ^klI@DBF4izfE`QO_<?_n::We{at' );
define( 'NONCE_SALT',       'Al$c+f0+ev>*z:ETPQ]bekeik<XL.nk5q8@Z<}dB1q&Rz=1=O{nSb!m%z*WMC9{x' );

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
