<?php
/**
 * This is the handler for logout completed from the consent page.
 *
 * @package simpleSAMLphp
 * @version $Id$
 */

$globalConfig = SimpleSAML_Configuration::getInstance();
$t = new SimpleSAML_XHTML_Template($globalConfig, 'consent:logout_completed.php');
$t->show();