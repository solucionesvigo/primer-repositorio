<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
 //~ echo '<pre>';
 //~ print_r($this);
 //~ echo '</pre>';
 echo 'esto en view.html de vista';
 
class CodigoreciboViewVista extends JView
{
        /*** display method of Hello view
         * @return void  */
        public function display($tpl = null) 
        {
			echo '<br/> **************************************************************';
		 echo '<br/> VIEW.html vista  -> funcion display 				  ';
		 echo '<br/> ************************************************************** <br/>';
					
                // get the Data
                $form = $this->get('Form');
                $item = $this->get('Item');
 
                // Check for errors.
                if (count($errors = $this->get('Errors'))) 
                {
                        JError::raiseError(500, implode('<br />', $errors));
                        return false;
                }
                // Assign the Data
                $this->form = $form;
                $this->item = $item;
 
                // Set the toolbar
                $this->addToolBar();
 
                // Display the template
                parent::display($tpl);
        }
 
        /**
         * Setting the toolbar
         */
        protected function addToolBar() 
        {
			echo '<br/> **************************************************************';
		 echo '<br/> VIEW.html vista  -> funcion addToolbar 				  ';
		 echo '<br/> ************************************************************** <br/>';
                $input = JFactory::getApplication()->input;
                $input->set('hidemainmenu', true);
                $isNew = ($this->item->id == 0);
                //si el articulo a editar es nuevo pone un titulo
                // y si es para editar pone el titulo de editar
                JToolBarHelper::title($isNew ?   JText::_('COM_CODIGORECIBO_MANAGER_VISTA_NEW')
                                             :  JText::_('COM_CODIGORECIBO_MANAGER_VISTA_EDIT'));
                JToolBarHelper::save('vista.save');
                JToolBarHelper::cancel('vista.cancel', $isNew ? 'cancelar' //'JTOOLBAR_CANCEL'
                                                                   : 'cerrar'); //'JTOOLBAR_CLOSE');
        }
}
