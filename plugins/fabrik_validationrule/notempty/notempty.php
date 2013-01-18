<?php
/**
 * Not Empty Validation Rule
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.validationrule.notempty
 * @copyright   Copyright (C) 2005 Fabrik. All rights reserved.
 * @license     http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die();

// Require the abstract plugin class
require_once COM_FABRIK_FRONTEND . '/models/validation_rule.php';

/**
 * Not Empty Validation Rule
 *
 * @package     Joomla.Plugin
 * @subpackage  Fabrik.validationrule.notempty
 * @since       3.0
 */

class plgFabrik_ValidationruleNotempty extends plgFabrik_Validationrule
{

	/**
	 * Plugin name
	 *
	 * @var string
	 */
	var $_pluginName = 'notempty';

	/**
	 * Classname used for formatting error messages generated by plugin
	 *
	 * @var string
	 */
	var $_className = 'notempty';

	/**
	 * If true uses icon of same name as validation, otherwise uses png icon specified by $icon
	 *
	 *  @var bool
	 */
	protected $icon = 'notempty';

	/**
	 * Validate the elements data against the rule
	 *
	 * @param   string  $data           to check
	 * @param   object  &$elementModel  element Model
	 * @param   int     $pluginc        plugin sequence ref
	 * @param   int     $repeatCounter  repeat group counter
	 *
	 * @return  bool  true if validation passes, false if fails
	 */

	public function validate($data, &$elementModel, $pluginc, $repeatCounter)
	{
		$ok = $elementModel->dataConsideredEmpty($data, $repeatCounter);
		return !$ok;
	}

}
