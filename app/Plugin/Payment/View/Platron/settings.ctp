<?php
/* -----------------------------------------------------------------------------------------
   VamShop - http://vamshop.com
   -----------------------------------------------------------------------------------------
   Copyright (c) 2014 VamSoft Ltd.
   License - http://vamshop.com/license.html
   ---------------------------------------------------------------------------------------*/

echo $this->Form->input('platron.merchant_id', array(
	'label' => __d('platron','Merchant id'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][0]['value']
	));
	
echo $this->Form->input('platron.secret_key', array(
	'label' => __d('platron','Secret key'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][1]['value']
	));

echo $this->Form->input('platron.lifetime', array(
	'label' => __d('platron','Life time'),
	'type' => 'text',
	'value' => $data['PaymentMethodValue'][2]['value']
	));

echo $this->Form->input('platron.testmode', array(
	'label' => __d('platron','Demo mode'),
	'type' => 'select',
	'options' => array('1'=>'test', '0'=>'production'),
	'value' => $data['PaymentMethodValue'][3]['value']
	));
?>