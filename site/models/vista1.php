<?php

// No direct access
defined('_JEXEC') or die;

//~ //jimport('joomla.application.component.modelform');
//~ echo '<br/> Antes de entrar vista.hmtl entra en modelo de la vista. <br/>';
//~ echo '<br/> mod ->vista1.php  <br/>';
//~ echo '<br/> El objeto $controler y $this no existe... por lo que no podemos acceder  <br/>';

			
class CodigoreciboModelVista1 extends JModel
{
	
	public function getComprobar()
	{
			//~ echo '<br/> Modulo Vista1 general -> funcion comprobar <br/>';
			$codigo = $_GET['id'];
		
			
			
			$db = JFactory::getDBO();
			$query = "SELECT codigo, recibo, tonelada FROM #__codigoRecibo "
					."WHERE codigo ='".$codigo."'";
			$db->setQuery($query);
			$resul =  $db->loadObjectList();
			
			
			if ($resul)
			{
/*
				$codigo = $resul['0']->codigo;
				$recibo = $resul['0']->recibo;
				$tonelada = $resul['0']->tonelada;	
		
*/
				$this->resultado = $resul;
			
				return $this->resultado;
			}
			
			
	}
	
}
