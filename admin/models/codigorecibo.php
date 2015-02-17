<?php
defined('_JEXEC') or die("Invalid access");
jimport('joomla.application.component.modellist');
echo 'estoy en modelo de codigorecibo<br/>';

//nomenclatura : nombreComponente+Model+nombreVista
class CodigoreciboModelCodigorecibo extends JModelList
{
	protected function getListQuery()
	{
		echo '<br/> **************************************************************';
		 echo '<br/> model codigo recibo -> funcion getListQuery				  ';
		 echo '<br/> ************************************************************** <br/>';
		
		//Crea un nuevo objeto de consulta
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Selecciona algunos campos
		$query->select('id, created, codigo, recibo, tonelada');
		// de nuestra tabla
		$query->from('#__codigoRecibo');
		
	
		
		//columnas que se muestran, id  , ordenado asc...
		$orderCol	= $this->state->get('list.ordering', 'id');
		$orderDirn	= $this->state->get('list.direction', 'asc');
		//~ if ($orderCol == 'a.ordering' || $orderCol == 'category_title') {
			//~ $orderCol = 'c.title '.$orderDirn.', a.ordering';
		//~ }
		$query->order($db->escape($orderCol.' '.$orderDirn));
		
		
		return $query;
	}
	
}
