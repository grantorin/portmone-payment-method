<?php
// app/code/local/Envato/Custompaymentmethod/Model/Paymentmethod.php
class Envato_Custompaymentmethod_Model_Paymentmethod extends Mage_Payment_Model_Method_Abstract {
    protected $_code  = 'custompaymentmethod';
    protected $_formBlockType = 'custompaymentmethod/form_custompaymentmethod';
    protected $_infoBlockType = 'custompaymentmethod/info_custompaymentmethod';

    public function assignData($data)
    {
        $info = $this->getInfoInstance();

        if ($data->getCustomFieldOne())
        {
            $info->setCustomFieldOne($data->getCustomFieldOne());
        }

        if ($data->getCustomFieldTwo())
        {
            $info->setCustomFieldTwo($data->getCustomFieldTwo());
        }

        return $this;
    }
    public function getOrderPlaceRedirectUrl()
    {
        return Mage::getUrl('checkout/onepage/success', array('_secure' => false));
    }
}