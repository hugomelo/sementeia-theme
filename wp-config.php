<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'sementeia_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');
define('WP_HOME',"http://sementeia");
define('WP_SITEURL',"http://sementeia");




/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',J?C5i5NgRm~omW 66be-=CuTet)ohcD|7){sAA,+g8(58.=^M^QT-kOU$PQt.X4');
define('SECURE_AUTH_KEY',  'VSH{(v[ 3_:L0M@=6[G3zIyi;c4biQkk r{=+YdbF#A_4OV<%2tQ7$8^=I]c1pRz');
define('LOGGED_IN_KEY',    ',:!!!2dX!Vzjc3R%|3?NEBut%bfZWn9 v>r>(HT&m.cj],-G$l$49PtuV<VdR96Q');
define('NONCE_KEY',        'U*lb5VEnCl1LxbJOW|dW`#O;s25U1GF6GY/#?&w2&(K dNP}JPxdTf$*MC/6X`BN');
define('AUTH_SALT',        '4z^Vi}v?x@,K_su(,hc>ykB=UI)@EhgNH@s~(p/HG&e}&Ng ^t2V|o/DgN_Vt>2x');
define('SECURE_AUTH_SALT', 'L~:J=kG^~kZARV4}[HNR*0hX-*=h%VQB5@<{sz3gY7<1<}{[UZ>zl4,FK@v30b7E');
define('LOGGED_IN_SALT',   '-jNLHA% Qr>X,nP.^b>iG<W-/OGgf7ZkFwPTy21~C5~/r4^A{B>j,]Q5fvAM_z?Y');
define('NONCE_SALT',       'WyfHO5Q~U_2KjU-eGQM>D}r7Sm!k$51yl$+1W!K2,$I!ZW:3rOLNQZ`i7O)9IBPK');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
