<?php
defined('_JEXEC') or die;
//print_r("hola componente site");

// importar librería de controladores de Joomla
jimport('joomla.application.component.controller');
 // codigorecibo esta en la nomenclatura de la class en controller.php 

/* Instancia objecto controller , pero no entra dentro de funciones 
 * de controlador controller.php
 * */
$controller = JController::getInstance('Codigorecibo');
//~ echo '<br/> Ejecuto tarea tasK de controller<br/>';
$controller->execute( JRequest::getVar( 'task'));
// Pienso que está lines suelta el componente, es decir continua montando la pagina.. pie pagina por ejemplo
$controller->redirect();
