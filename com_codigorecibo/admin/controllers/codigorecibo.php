<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controlleradmin library
jimport('joomla.application.component.controlleradmin');
 
/**
 * HelloWorlds Controller
 */
echo '<br/>estoy en controlador --> CODIGORECIBO';
class CodigoreciboControllerCodigorecibo extends JControllerAdmin
{
	/**
	 * Proxy for getModel.
	 * @since	2.5
	 */
	 //cualquier btn toolbar vendra al controlador y leera la funcion del modelo
	 //para asi usar sus funciones y llevarlas a cabo (acciones)
	 //voy al modelo vista que es donde tengo las funciones getTable, getForm, loadForm
	public function getModel($name = 'Vista', $prefix = 'CodigoreciboModel') 
	{
		echo '<br/> **************************************************************';
		 echo '<br/> MODEL codigo  -> funcion getModel   				  ';
		 echo '<br/> ************************************************************** <br/>';
		$model = parent::getModel($name, $prefix, array('ignore_request' => true));
		return $model;
	}
}
