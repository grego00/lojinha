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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mydb');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'z?S^Xv-nWo=rv64m?5HPSpo7Q|mZ}=5vl=-XK]7HgqXi.UpB3#@VL {E6h[Lw}hF');
define('SECURE_AUTH_KEY',  ':@70.v`#?K_WXGgxOxfby}]0$Ob0~=35t]Bk6xa6+#b]cO1czL}UztC:yFox-}.n');
define('LOGGED_IN_KEY',    'no+%)SM3qmq[&1dOpb/]fLW1I,.aZs_`(oNX2;[-Ed l20h$_8gx .~X`pR+@bQG');
define('NONCE_KEY',        'vo{oK, HgCRx7@D.T`}^PmIj8,Af{xh?RB6*m);9cg=y(J{z@6?AT*T,f_RZfpX ');
define('AUTH_SALT',        'U*G@9sHV,{E^o[%+R6SfE!5u:o4kNmk }d2 bQX1-=.^%l`(+~a9./h6:.| RAZD');
define('SECURE_AUTH_SALT', 'R<.K~0%^r,%tVF][+n;&kdT(qDw6w!#uZk=q,t+%dKDrw1AvQ/7{tOIgpi/sQ8U9');
define('LOGGED_IN_SALT',   'M1xyy4V)WT2QA@;j]uwTd-kgy]b[DRP5{IjpbL3=3QhV=rJqWkiFZH(lPVwn,5Fx');
define('NONCE_SALT',       ',-/toY@qY/O%7,SZ;Hs_cL;HaGIU*{WWTLA-KyCPXAAR.rX@qVO#.C_6;@w3u&?H');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
