<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'napssive');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'pUq]$f._V+Gl5Tn3Sjp|8EDKE;5jmIIZ 6fUZ}Eh=uf:1`Cp4MEf=3`KBX!` o,4');
define('SECURE_AUTH_KEY',  '+Ne4FYRb1x<?*%Z:agGe=olAts3H.{D-gvZ;~%G?p5.A(t1AadX_+L=GKwma4bMu');
define('LOGGED_IN_KEY',    'bzM@8O//476#3:$cs3*r~}:D`9%!IU2yj[#R$oCpR?Y**rf$qnyMcKEf[NEhUOD6');
define('NONCE_KEY',        '}C/%s.}W4<fmZG|GF7?$Ay||Jfk?]CM,!*Q)gQPz.NXoYl5pD^/Q#eh_>)%v:#v=');
define('AUTH_SALT',        'OjOeR)q;+)Qqy=%)rgnErQj~}.)3uAHhuAK7]QrYn8iRCw-ce^EJx_%D=kSr=:3^');
define('SECURE_AUTH_SALT', '&``TGD`g(s%!CRO~p}H=zAGy@8 6Mv92%;dbe#x3GJDV2zknNmztu-doDg&#-0<j');
define('LOGGED_IN_SALT',   ',*. g[MEtF1% `m~%G.`tYx@xI}t`>Sp:Z:h8Ex#GSFA~&2UUUIt<kw~RGWVg*74');
define('NONCE_SALT',       '5BX0Al,qj~TM0XYf4BN281q?pA@*KOYKD@@(#sD,#^CM>[3/C]mWqL5UTORn ++&');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');