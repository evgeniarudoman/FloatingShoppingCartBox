<?php

/**
 * Shopping Cart Block
 * 
 * @category    Rudoman
 * @package     Rudoman_ShoppingCart
 * @author      Evgenia Rudoman (evgenia.rudoman@gmail.com)
 */
class Rudoman_ShoppingCart_Block_Checkout_Cart extends Mage_Checkout_Block_Cart
{

    public function getItemsQty()
    {
        $qty = $this->getItemsSummaryQty();
        switch ($qty)
        {
            case 0:
                return $this->__('No items in Shopping Cart');
                break;
            case 1:
                return $qty . $this->__(' item');
                break;
            default:
                return $qty . $this->__(' items');
                break;
        }
    }


    public function getRemoveUrl($itemId)
    {
        return $this->getUrl('checkout/cart/delete', array(
            'id' => $itemId,
            Mage_Core_Controller_Front_Action::PARAM_NAME_URL_ENCODED => $this->helper('core/url')->getEncodedUrl()
                )
        );
    }


    public function getConfigureUrl($itemId)
    {
        return $this->getUrl('checkout/cart/configure', array('id' => $itemId));
    }


}
