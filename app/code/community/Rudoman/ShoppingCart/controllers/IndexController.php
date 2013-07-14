<?php

/**
 * @category    Rudoman
 * @package     Rudoman_ShoppingCart
 * @author      Evgenia Rudoman (evgenia.rudoman@gmail.com)
 */
class Rudoman_ShoppingCart_IndexController extends Mage_Core_Controller_Front_Action
{

    public function indexAction()
    {
        $this->loadLayout()->renderLayout();
    }


}
