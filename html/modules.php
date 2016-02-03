<?php  
/*------------------------------------------------------------------------
# author    your name or company
# copyright Copyright (C) 2011 example.com. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.example.com
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

jimport( 'joomla.application.module.helper' );

function modChrome_custom($module, &$params, &$attribs) { ?>
	<div class="module<?php echo htmlspecialchars($params->get('moduleclass_sfx')); ?>">
		<?php if ($module->showtitle) : ?>
		<h3 class="module-title"><?php echo JText::_( $module->title ); ?></h3>
		<?php endif; ?>
		<div class="module-content"><?php echo $module->content; ?></div>
		
	</div>
	<?php
}
?>