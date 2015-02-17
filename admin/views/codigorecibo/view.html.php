<?php
defined( '_JEXEC') or die( 'Restricted access');
jimport( 'joomla.application.component.view');
//~ 
 //~ echo '<pre>';
 //~ print_r($this);
 //~ echo '</pre>';
echo '<br/> estoy en view.html de codigo';
//nomenclatura : nombreComponente+View+nombreVista
class CodigoreciboViewCodigorecibo extends JView
{
	
	function display($tpl = null)
	{
		echo '<br/> **************************************************************';
		 echo '<br/> VIEW.html codigo  -> funcion display				  ';
		 echo '<br/> ************************************************************** <br/>';
		//conseguimos el modelo
	//	$model =& $this->getModel();
		//recogemos el mensaje del modelo y lo pasamos por referencia dspues
		//~ $mensaje = $model->getMensaje();
		//~ //uso assignRef para crear referencias que usará el layout (tmpl)
		//~ $this->assignRef('mensaje',$mensaje);
		/*
JPagination es una clase Joomla capaz de gestionar 
y visualizar objeto paginación.
*/
		
		//es necesario establecerlos para poder usarlos en default...
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
		
		
			//check errores
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}
		
		$this->addToolbar();
		
		//si la funcion toolbar la tienes en MODELS se llamaria  asi:
		//añadimos titulo componente y btnes añadir, editar..
		//~ $toolbar = $model->addToolbar();
		//~ $this->assignRef('addToolbar', $toolbar);
		
		
		parent::display($tpl);
	}
	
	function addToolbar()
	{
		
		echo '<br/> **************************************************************';
		 echo '<br/> VIEW.html codigo  -> funcion addToolbar 				  ';
		 echo '<br/> ************************************************************** <br/>';
				//intencion AÑADIR menu Toolbar btnes añadir, editar..
	 JToolBarHelper::title( 'Componente Codigo Recibo ', 'print.png' );
     JToolBarHelper::addNew('vista.add');
     JToolBarHelper::editList('vista.edit', 'JTOOLBAR_EDIT');     
     
     //----- nuevo es cambiado por => codigorecibo -----------//
     //AVISO!! btn borrar no necesita otra vista por eso al quedarse en la vista
     //general (nuevo) va al controlador de nuevo (nuevo.delete) y en el controlador
     //de nuevo va al modelo de la vista (singular) pork es alli dnde estan las 
     //funciones de getTable, getForm, loadFormData..
     JToolBarHelper::deleteList('Seguro de eliminar este registro?','codigorecibo.delete', 'JTOOLBAR_DELETE');
     JToolBarHelper::preferences('com_codigorecibo', '500');	
	}
	
 
}
