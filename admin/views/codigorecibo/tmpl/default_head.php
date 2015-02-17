<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>

<tr>

	<th width="1%">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>
	<th width="2%">
		<?php echo  JHTML::_('grid.sort', 'Id', 'id', $listDirn, $listOrder); ?>
	</th>			
	<th width="2%">
		<?php echo  JHTML::_('grid.sort', 'Fecha', 'created', $listDirn, $listOrder); ?>
	</th>			
	<th width="5%">
		<?php echo  JHTML::_('grid.sort', 'Código', 'codigo', $listDirn, $listOrder); ?>
	</th>
	<th width="5%">
		<?php echo  JHTML::_('grid.sort', 'Recibo', 'recibo', $listDirn, $listOrder); ?>
	</th>
	<th width="5%">
		<?php echo  JHTML::_('grid.sort', 'Tonelada', 'a.tonelada', $listDirn, $listOrder); ?>
	</th>
	
	
</tr>
