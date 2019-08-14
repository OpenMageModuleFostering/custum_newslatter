<?php

class Custum_Newslatter_Block_Newslatter extends Mage_Newsletter_Block_Subscribe
{

  
    public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
	
  public function getFormActionUrlkush()
    {
        return $this->getUrl('newsletter222/subscriber/new', array('_secure' => true));
    }
}