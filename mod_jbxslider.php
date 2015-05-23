<?php
// No direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';

$folder = $params->get('folder');

if (!JFolder::exists($folder)) {
  JError::raiseNotice( 100, 'MOD_JBXSLIDER_NO_FOLDER' );
}else{
  if($files = ModJbxsliderHelper::getSlideFiles($params)){
    require JModuleHelper::getLayoutPath('mod_jbxslider');
  }else{
    echo JText::_('MOD_JBXSLIDER_NO_IMAGE');
  }
}
?>