<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelform library
jimport('joomla.application.component.modeladmin');
echo '<br/>estoy en model vista';
/** Vista Model */
class CodigoreciboModelVista extends JModelAdmin
{
        /**
         * Returns a reference to the a Table object, always creating it.
         *
         * @param       type    The table type to instantiate
         * @param       string  A prefix for the table class name. Optional.
         * @param       array   Configuration array for model. Optional.
         * @return      JTable  A database object
         * @since       2.5
         */
        public function getTable($type = 'Vista', $prefix = 'CodigoreciboTable', $config = array()) 
        {
			echo '<br/> **************************************************************';
		 echo '<br/> model VISTA -> funcion getTable				  ';
		 echo '<pre>';
						print_r($config);
						echo '</pre>';
		 echo '<br/> ************************************************************** <br/>';
						
						
                return JTable::getInstance($type, $prefix, $config);
        }
        /**
         * Method to get the record form.
         *
         * @param       array   $data           Data for the form.
         * @param       boolean $loadData       True if the form is to load its own data (default case), false if not.
         * @return      mixed   A JForm object on success, false on failure
         * @since       2.5
         */
 
        public function getForm($data = array(), $loadData = true) 
        {
			echo '<br/> **************************************************************';
		 echo '<br/> model VISTA -> funcion getForm				  ';
		 echo '<br/> ************************************************************** <br/>';
                // Get the form.
                $form = $this->loadForm('com_codigorecibo.vista', 'vista',array('control' => 'jform', 'load_data' => $loadData));
                if (empty($form)) 
                {
                        return false;
                }
                
                
                return $form;
        }
        /**
         * Method to get the data that should be injected in the form.
         *
         * @return      mixed   The data for the form.
         * @since       2.5
         */
//IMPORTANTE para que se vea la vista
        protected function loadFormData() 
        {
			echo '<br/> **************************************************************';
		 echo '<br/> model VISTA -> funcion loadFormData				  ';
		 echo '<br/> ************************************************************** <br/>';
                //Compruebe la sesión de datos de formularios previamente introducidos.
                $data = JFactory::getApplication()->getUserState('com_codigorecibo.edit.vista.data', array());
                if (empty($data)) 
                {
                        $data = $this->getItem();
                        echo '///////////////////////////////////////////////////////////////////';
                        echo '<br/>DENTRO model vista -> data en funcion loadFormData '.$data;
                        echo '<pre>';
                        print_r($data);
                        echo '</pre>';
                        echo '/////////////////////////////////////////////////////////////////////';
                        // Prime some default values.
                        //getstate cojo el id del registro indicando la vista en la que estoy
									//~ if ($this->getState('vista.id') == 0) 
									//~ {
										//~ $id = $this->getState('vista.id');
										//~ echo '<br/> estado Model Vista --> funcion load --> '.$estado;
										//~ 
									//~ }
									
						
                        
                }
                //data = los datos del registro
                $view = $_GET['view'];
                $layout =$_GET['layout'];
                 echo '<br/>DEVUELVE = '.$view.'--'.$layout.' ------- model vista -> data en funcion loadFormData '.$data;
                 //~ echo '<pre>';
                        //~ print_r($this);
                    //~ echo '</pre>';
                        
                return $data;
        }
        

 

}
