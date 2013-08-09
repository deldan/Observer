<?
/*help?
* save errors in events.log magento:  Mage::log('ERROR TEXT', null, 'events.log', true);
* console: tail events.log or tail -f events.log
*/


class Invoice_Order_Model_Observer {



/**
 * orderView private method observer magento
 *
 * @param array $observer
 * @return Mage_Sales_Model_Order
 */
  public function orderView($observer) {

    $event = $observer->getEvent();
    $order = $event->getOrder();
    
    Mage::log('orden id: ' . $order->getRealOrderId() . ' total:' . $order->getGrandTotal(););
    return $this;


  }

}

?>