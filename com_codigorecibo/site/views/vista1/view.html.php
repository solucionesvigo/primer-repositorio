<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');
//~ echo '<br/> ************************************************************** <br/>';
//~ echo '<br/> * Estoy en view.html.php de vista1 / Voy a crear Class 		 * <br/>';
//~ echo '<br/> ************************************************************** <br/>';

class CodigoreciboViewVista1 extends JView
{
	protected $resultado;
	//protected $item;
	//	protected $state;
	
	function display($tpl = null)
	{
		//~ echo '<br/> ************************************************************** <br/>';
		//~ echo '<br/> * vista1-> view.html.php y funcion display					 * <br/>';
		//~ echo '<br/> ************************************************************** <br/>';

		$params = JComponentHelper::getParams('com_codigorecibo');
		
		$this->resultado = $this->get('Comprobar');
		
		
		$this->assignRef('params',		$params);
		//display de la vista
		parent::display($tpl);
	}
	
}
