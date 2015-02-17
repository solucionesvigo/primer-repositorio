<?php

// No direct access
defined('_JEXEC') or die;
jimport('joomla.application.component.modelform');
//~ echo '<br/>Entro en modelo codigorecibo.php<br/>';

class CodigoreciboModelCodigorecibo extends JModelForm
{
		protected $view_item = 'codigorecibo';
	
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm('com_codigorecibo.codigorecibo', 'codigorecibo', array('control' => 'jform', 'load_data' => true));
		if (empty($form)) {
			return false;
		}
		
		//~ echo '<br/>Estoy modelo codigorecibo.php / funcion getForm<br/>';
		
		return $form;
	}
	
	protected function loadFormData()
	{
		$data = (array)JFactory::getApplication()->getUserState('com_codigorecibo.codigorecibo.data', array());
		return $data;
	}
	
	
}
