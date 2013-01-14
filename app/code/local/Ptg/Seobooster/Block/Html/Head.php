<?php 
	class Ptg_Seobooster_Block_Html_Head extends Mage_Page_Block_Html_Head {
	    public function getDescription()
	    {
	        if (empty($this->_data['description'])) {
	            $this->_data['description'] = Mage::getStoreConfig('design/head/default_description') . " " . $this->helper('catalogsearch')->getEscapedQueryText();
	        }
	        return $this->_data['description'];
	    }
	}
?>