<?php

require_once 'ibanrecoder.civix.php';

use CRM_Ibanrecoder_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function ibanrecoder_civicrm_config(&$config): void {
  _ibanrecoder_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function ibanrecoder_civicrm_install(): void {
  _ibanrecoder_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function ibanrecoder_civicrm_enable(): void {
  _ibanrecoder_civix_civicrm_enable();
}
