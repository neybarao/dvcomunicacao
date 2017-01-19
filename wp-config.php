<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'neyricar_sitedv');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'neyricar_dvsite');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '10530lvX');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=V/q!rOGWnaBf-Ci-50]8*aaqX:vo`%mxdy.(V|.9+/S&zx8R.2.>sVA00T>XAA5');
define('SECURE_AUTH_KEY',  'aRQ1Fj*u30|I-tNmf3tmgm#C+!r&@NU|MeujW3ZOD`KWHb?-,.eDD=q^f8[%:,gF');
define('LOGGED_IN_KEY',    'em;A,j!_E<vo0h7>mM&Y=l}U/]_BPmL I#Qx9})9=oi&8J~RK9/&7Ysg9%Yz >Mx');
define('NONCE_KEY',        'MXU7U(uT%rI}uCw_Jh$uCyF0ISpkm|{|oH^+F/n<;(xSZa.K@~1o{aZKklp*ZFar');
define('AUTH_SALT',        '.4Li3-mfg8_.p#?X2VhN/cWcWBc8AH{Os*0Rb+dnx<+94`#R[W7M3oa71shZ^{s@');
define('SECURE_AUTH_SALT', 'y;a]kOEMx&p{[7-;J}7Qf76N`o+QSQ7uy%,d`A|/il)DCpruJ#7yr9_NF?PBL`^M');
define('LOGGED_IN_SALT',   '5@Kfee@$e50Jdg08$FK=_=B8Kkc+Ii;OF8Ey`{733>,nt*7JXz!+dgwl-1KDODSA');
define('NONCE_SALT',       '#+7It:F!d{@ *3s<-0Ds_Z|G_YQMQ! C5Oy<So._5/Du&z>ro.b/9Y5DLl86X4mZ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
