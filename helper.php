<?php
// No direct access
defined('_JEXEC') or die;

// Import filesystem libraries. Perhaps not necessary, but does not hurt
jimport('joomla.filesystem.folder');

/**
 * Helper class for Bootstrap Carousel module
 * 
 * @package     Joomla.Tutorials
 * @subpackage  Modules
 * @link        http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license     GNU/GPL, see LICENSE.php
 */
class ModJbxsliderHelper
{
    public static function getSlideFiles($params){
        return $files = JFolder::files($params->get('folder'), $params->get('type'));
    }
}