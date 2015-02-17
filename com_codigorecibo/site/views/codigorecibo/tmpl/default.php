<?php
defined('_JEXEC') or die('Restricted Access');
?>
<?php

//~ echo '<pre>';
//~ print_r($this->params);
//~ echo'</pre>';
//show_page_heading
//page_heading
?>
<div class="codigotitulo" style="text-align:center">	
<h1> 
	<?php // opc del componente PROBLEMA: solo tiene acceso el administrador
		//params esta asignado en la view.html para poder recoger los parametros de opc dl componente
		
		//parametros de opc menuItem creado y asignado en view.html de codigo
		if ($this->params->get('show_page_heading') == '1')
		{
				echo $this->params->get('page_heading');
		}else{
				echo JText::_('COM_CODIGORECIBO_FIELD_CONFIG_TEXTO_PRINCIPAL_LABEL');
			}
		?>
</h1>
<?php echo $this->loadTemplate('form'); ?>

</div>
