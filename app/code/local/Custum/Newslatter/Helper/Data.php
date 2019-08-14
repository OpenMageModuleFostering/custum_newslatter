<?php

class Custum_Newslatter_Helper_Data extends Mage_Core_Helper_Abstract
{
     
    //get customer first name from customer session
    public function getCustumerfirstname()  
    {
           if (Mage::helper('customer')->isLoggedIn())
           {
                 $firstname = Mage::getSingleton("customer/session")->getCustomer()->getFirstname();
                   
           }
         
        return $firstname;
    }
}