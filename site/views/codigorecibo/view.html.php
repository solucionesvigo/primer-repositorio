<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');

class CodigoreciboViewCodigorecibo extends JView
{
	protected $form;
	
	function display($tpl = null)
	{
		//$this->msg ='hola front-end';
		$item = $this->get('Item');
		$this->form = $this->get('Form');
	
			//Inicializo params para poder usar el $params->get('parametro_que_busco') en tmpl
			//es un objeto vacio 
		$params = JComponentHelper::getParams('com_codigorecibo');
	
		/***************************************************************************************/
			//consigo el objeto de site (datos) en data: itemid, view, texto de config del componente
		$app		= JFactory::getApplication();
			//consigo todos los objetos por cada itemMenu que tiene la pagina
		$menus		= $app->getMenu();
			//consigo los datos del objeto del itemMenu activo, con el que estas trabajando
		$menu = $menus->getActive();
		
		
		//page_title--> parametro que indica titulo de la pagina, en la pestaña donde el favicon (arriba)
		//show_page_heading --> opc para mostrar el titulo de la cabecera
		//page_heading --> titulo de la cabecera
		//~ 
		//~ echo '<pre>';
		//~ echo print_r($menu);
		//~ echo '</pre>';
		
		/***************************************************************/
	
		
		$this->assignRef('params',		$menu->params);	
		
		//display de la vista
		parent::display($tpl);
	}
	
	
}
