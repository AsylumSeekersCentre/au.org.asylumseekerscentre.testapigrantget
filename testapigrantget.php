<?php

require_once 'testapigrantget.civix.php';
// phpcs:disable
use CRM_Testapigrantget_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function testapigrantget_civicrm_config(&$config) {
  _testapigrantget_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function testapigrantget_civicrm_xmlMenu(&$files) {
  _testapigrantget_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function testapigrantget_civicrm_install() {
  _testapigrantget_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function testapigrantget_civicrm_postInstall() {
  _testapigrantget_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function testapigrantget_civicrm_uninstall() {
  _testapigrantget_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function testapigrantget_civicrm_enable() {
  _testapigrantget_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function testapigrantget_civicrm_disable() {
  _testapigrantget_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function testapigrantget_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _testapigrantget_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function testapigrantget_civicrm_managed(&$entities) {
  _testapigrantget_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function testapigrantget_civicrm_caseTypes(&$caseTypes) {
  _testapigrantget_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function testapigrantget_civicrm_angularModules(&$angularModules) {
  _testapigrantget_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function testapigrantget_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _testapigrantget_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function testapigrantget_civicrm_entityTypes(&$entityTypes) {
  _testapigrantget_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function testapigrantget_civicrm_themes(&$themes) {
  _testapigrantget_civix_civicrm_themes($themes);
}

function testapigrantget_civicrm_alterContent(  &$content, $context, $tplName, &$object ) {
  $api3result = civicrm_api3('Grant', 'get', [
    'sequential' => 1,
  ]);
  CRM_Core_Error::debug_log_message('api3 Grant.get count: '.$api3result['count']);
  // You can remove this try...except wrapping to see a more useful error message 
  // in the CMS log, but be warned that doing so will crash the site for non-admins.
  try {
    $api4grants = \Civi\Api4\Grant::get()
      ->setLimit(25)
      ->execute();
    CRM_Core_Error::debug_log_message('api4 Grant.get count: '.count($api4grants));
  }
  catch (exception $e) {
    CRM_Core_Error::debug_log_message('testapigrantget Failed with exception: '.$e);
  }
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function testapigrantget_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function testapigrantget_civicrm_navigationMenu(&$menu) {
//  _testapigrantget_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _testapigrantget_civix_navigationMenu($menu);
//}
