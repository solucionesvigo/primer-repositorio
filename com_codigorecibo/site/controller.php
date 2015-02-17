<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport('joomla.application.component.controller');
//echo ' 30 Entre en controlador general';

class CodigoreciboController extends JControllerLegacy
{	
	public $dato; // Es donde quiero guardar el dato que envia el formulario	
	public function display($cachable = false, $urlparams = false)
	{
		/* Iniciamos variable */
		/* La variables $cachable y $ urlparams , si las imprimimos con 
		 * print_r siempre es 1 , ya que la ponemos en falso.
		 * Si le quito = false , da un error ya que no recibe parametro el display.
		 * */
	//	echo '<br/> Controler general -> funcion display <br/>';
		$cachable = true;
		
		//programar una vista por defecto si no se establece
		$input = JFactory::getApplication()->input;
		//set establece y get toma
		//~ $input->set('view', $input->getCmd('view', 'codigorecibo'));
		/* La linea anterior la cambio , ya que no hace falta, ya que
		 * al venir la primera vez ya viene con codigorecibo 
		 * y al volver trae la vista por defecto.
		 * */
		 
		if  ($input->getCmd('view') == 'codigorecibo')
		{
			//~ echo '<br/> Controler general -> funcion display-->  En if codigorecibo <br/>';
		}
		if  ($input->getCmd('view') == 'vista1')
		{
			//~ echo '<br/> ************************************************************** <br/>';
			//~ echo '<br/> Controler general -> funcion display-->  En if  vista1 <br/>';
			//~ echo '<br/> ************************************************************** <br/>';
			$id = $_GET['id'];
			//~ echo ' Imprimo ID:'.$id;
			$this->comprobar($id);
			
			/* La cuestión es que  si va comprobar y toma datos, pero no sabemos 
			 * como enviarlo al objeto creado por la view.vista1
			 * Si embargo en el fichero codigorecibo.php de raiz si muestra el objeto.
			 * por lo que entiendo que si lo supieramos instancias entonces si podríamos 
			 * recuperarlo.
			 * */
		}
					
		 
		return parent::display($this);

	}
	public function submit()
	{
		//~ echo '<br/> Controler general -> funcion submit <br/>';

		// Initialise variables.
		//$input	= JFactory::getApplication()->input;
		
		//~ // Get the data from POST
		 $this->data = JRequest::getVar('jform', array(), 'post', 'array');
		 $codigo		= $this->data['codigorecibo_codigo'];
		 $resul = $this->comprobar($codigo);
	
		/* Tengo que volver a meter está variable porque me problemas
		 * el input->getCmd que no existe objeto */
		$input = JFactory::getApplication()->input;
		if  ($input->getCmd('view') == 'codigorecibo')
		{
			//~ echo '<br/> ************************************************************** <br/>';
			//~ echo '<br/> Controler general -> funcion display-->  En if codigorecibo <br/>';
			//~ echo '<br/> ************************************************************** <br/>';
			//~ echo ' Voy a redireccionar ';
			/* Yo en vez de redirecciona, pienso se podría 
			 * 1.- Cambiar la vista directamente...
			 * Y luego creo que los datos ya estarían...*/
			 
			$this->dato = $codigo;
			//~ //$this->set('view', $input->getCmd('view', 'vista1')); 
			
			$this->setRedirect(JRoute::_('index.php?option=com_codigorecibo&view=vista1&id='.$codigo),false);
			return ;
		}
		
		return $resul;
	}	
		
	public function comprobar($codigo)
	{
			//~ echo '<br/> Controler general -> funcion comprobar <br/>';
			
			$db = JFactory::getDBO();
			$query = "SELECT codigo, recibo, tonelada FROM #__codigoRecibo "
					."WHERE codigo ='".$codigo."'";
			$db->setQuery($query);
			$resul =  $db->loadObjectList();
			// $resul = $db->loadResult();
			
			//~ echo '<pre>';
			//~ print_r($resul);
			//~ echo '</pre>';		
			if ($resul)
			{
				//~ $codigo = $resul['0']->codigo;
				//~ $recibo = $resul['0']->recibo;
				//~ $tonelada = $resul['0']->tonelada;
				
				//~ $this->resultado = $resul;
					//~ echo $this->pepe;
				//	return $resul;
				// $resultado->assignRef('resultado',		$resul);
				//$this->setRedirect(JRoute::_('index.php?option=com_codigorecibo&view=vista1'));
			
				
				return $this->resultado;
			}
			//~ else{
					//~ echo 'vacio';
				//~ //	$this->setRedirect(JRoute::_('index.php?option=com_codigorecibo&view=vista1'));
				//~ }
			
	}//hacer vista y redirigirla alli


}
