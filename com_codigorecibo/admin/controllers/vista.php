<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla controllerform library
jimport('joomla.application.component.controllerform');
 
echo '<br/>estoy en controlador --> VISTA';
class CodigoreciboControllerVista extends JControllerForm
{
	protected $view_item = 'vista';
	protected $view_list = 'codigorecibo';
	

}
