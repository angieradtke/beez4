<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * beezDivision chrome.
 *
 * @since   3.0
 */
function modChrome_beezDivision($module, &$params, &$attribs)
{
	$headerLevel = $params->get('header_tag') ;
	if (!empty ($module->content)) : ?>
		<<?php echo $params->get('module_tag'); ?> class="moduletable<?php echo htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8'); ?>">
		<?php if ($module->showtitle) : ?>
		<<?php echo $headerLevel; ?>><?php echo $module->title; ?></<?php echo $headerLevel; ?>>
		<?php endif; ?>
		<?php echo $module->content; ?>
	<?php endif;
	   echo '</'. $params->get('module_tag').' >';
}
