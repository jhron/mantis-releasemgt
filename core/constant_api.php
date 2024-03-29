<?php

/**
 * ReleaseMgt plugin
 *
 * Original author Vincent DEBOUT
 * modified for new Mantis plugin system by Jiri Hron 
 *
 * Created: 2008-01-05
 * Last update: 2012-05-23
 *
 * @link http://deboutv.free.fr/mantis/
 * @copyright 
 * @author Vincent DEBOUT <vincent.debout@morinie.fr>
 * @author Jiri Hron <jirka.hron@gmail.com>
 */

define( 'PLUGINS_RELEASEMGT_UPLOAD_THRESHOLD_LEVEL_DEFAULT', ADMINISTRATOR );
define( 'PLUGINS_RELEASEMGT_UPLOAD_METHOD_DEFAULT', DISK );
define( 'PLUGINS_RELEASEMGT_DISK_DIR_DEFAULT', '' );
define( 'PLUGINS_RELEASEMGT_FTP_SERVER_DEFAULT', '' );
define( 'PLUGINS_RELEASEMGT_FTP_USER_DEFAULT', '' );
define( 'PLUGINS_RELEASEMGT_FTP_PASS_DEFAULT', '' );
define( 'PLUGINS_RELEASEMGT_FILE_NUMBER_DEFAULT', 1 );
define( 'PLUGINS_RELEASEMGT_NOTIFICATION_ENABLE_DEFAULT', OFF );
define( 'PLUGINS_RELEASEMGT_NOTIFY_HANDLER_DEFAULT', ON );
define( 'PLUGINS_RELEASEMGT_NOTIFY_REPORTER_DEFAULT', OFF );
define( 'PLUGINS_RELEASEMGT_NOTIFY_EMAIL_DEFAULT', '' );
define( 'PLUGINS_RELEASEMGT_EMAIL_SUBJECT_DEFAULT', '[*P]: *c new file(s) has(ve) been added.' );
define( 'PLUGINS_RELEASEMGT_EMAIL_TEMPLATE_DEFAULT', 'default' );
define( 'ERROR_FILE_NOT_FOUND', 510 );

?>