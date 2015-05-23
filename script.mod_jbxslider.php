<?php
// No direct access to this file
defined('_JEXEC') or die;

jimport('joomla.filesystem.folder');

/**
 * Script file of HelloWorld module
 */
class mod_jbxsliderInstallerScript
{
  /**
   * Method to install the extension
   * $parent is the class calling this method
   *
   * @return void
   */
  function install($parent) 
  {
    echo '<p>The module ' . $parent->get('manifest')->name . ' has been installed</p>';
    $source = JPATH_SITE . '/modules/mod_jbxslider/slides';
    $destination = JPATH_SITE . '/images/jbxslider';
    JFolder::copy($source, $destination, $path = '', $force = true);
    JFolder::delete($source);
  }
 
  /**
   * Method to uninstall the extension
   * $parent is the class calling this method
   *
   * @return void
   */
  function uninstall($parent) 
  {
    echo '<p>The module ' . $parent->get('manifest')->name . ' has been uninstalled</p>';
    // $destination = JPATH_SITE . '/images/jbxslider';
    JFolder::delete($destination);
  }
 
  /**
   * Method to update the extension
   * $parent is the class calling this method
   *
   * @return void
   */
  function update($parent) 
  {
    echo '<p>The module has been updated to version' . $parent->get('manifest')->version . '</p>';
    $source = JPATH_SITE . '/modules/mod_jbxslider/slides';
    JFolder::delete($source);
  }

  /**
   * Method to run before an install/update/uninstall method
   * $parent is the class calling this method
   * $type is the type of change (install, update or discover_install)
   *
   * @return void
   */
  function preflight($type, $parent) 
  {
 
  }
 
  /**
   * Method to run after an install/update/uninstall method
   * $parent is the class calling this method
   * $type is the type of change (install, update or discover_install)
   *
   * @return void
   */
  function postflight($type, $parent) 
  {


  }
}