<?php defined( '_JEXEC' ) or die( 'Restricted access' );

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_wotscrore', $params->get('layout', 'default'));