<?php
/*
echo $this->mensaje;
echo '<pre>';
	 print_r($this);
echo '</pre>';
*/
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');

JHtml::_('behavior.formvalidation');
echo '<br/>estoy en tmplate vista --> edit.php ***************************************';

//~ <form action="<?php echo //JRoute::_('index.php?option=com_codigorecibo&layout=edit&id='.(int) $this->item->id); ?>"
?>

<form method="post" name="adminForm" id="adminForm" class="form-validate">
        <fieldset class="adminform">
                <legend><?php echo JText::_( 'COM_CODIGORECIBO_DETAILS' ); ?></legend>
                <ul class="adminformlist">
					<?php foreach($this->form->getFieldset() as $field): ?>
                        <li><?php echo $field->label;echo $field->input;?></li>
					<?php  endforeach; ?>
                </ul>
        </fieldset>
        <div>
                <input type="hidden" name="task" value="vista.edit" />
                <?php echo JHtml::_('form.token'); ?>
        </div>
</form>
