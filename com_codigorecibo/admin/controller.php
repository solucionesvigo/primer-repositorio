<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.controller');

echo '<br/> 11 estro en controlador general<br/>';
//es obligatorio que herede JController
class CodigoreciboController extends JController
{	
	
	
	function display($cachable = false, $urlparams = false) 
	{
		 echo '<br/> ************************************************************** <br/>';
		 echo '<br/> Controler general -> funcion display						   <br/>';
		 echo '<br/> ************************************************************** <br/>';
		
	
		//programar una vista por defecto si no se establece
		$input = JFactory::getApplication()->input;
		//set establece y get toma
		//$input->set('view', $input->getCmd('view', 'codigorecibo'));
	
		$view = $input->getCmd('view');
		$layout = $input->getCmd('layout');
		$id = $_GET['id'];
		
		
		
		//ESTO NO ME HACE NADA
			// Compruebe formulario de edición . 
			
			if ($view == 'vista' && $layout == 'edit')
			{
					echo '<br/>VISTA EDITAR<br/>';
				
				}
/*
		if ($view == 'vista' && $layout == 'edit' && !$this->checkEditId('com_codigorecibo.edit.vista', $id)) 
		{
			echo '<br/>controler general -> if view = vista y layout= edit .. <br/>';
			
			$this->setRedirect(JRoute::_('index.php?option=com_codigorecibo&view=codigorecibo', false));
			return false;
		}
*/
		
		
		
		// call parent behavior
//		parent::display($cachable);
	
		parent::display();
	}
}
