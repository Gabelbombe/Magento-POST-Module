<?php
Class Ehime_Postmodule_Model_Observer
{
    public function ping(Varien_Event_Observer $observer)
    {
//        // im not sure how to fire this prior to the events, but maybe we can detect and discard?
//        $event = $observer->getEvent();
//        if (! isset($event)) {
//            return $this;
//        }

        $data = $observer->getData('order_ids');
        $url  = 'http://foo.com'; // needs to be fetched...

        try
        {
            $client = New Zend_Http_Client($url);

            $client->setRawData(json_encode($data), 'application/json')->request('POST');

            var_dump($client->request()->getBody());

            Mage::log('Order has been sent to foo.com');

        } catch (Exception $e) {
            Mage::logException($e);
        }

        return $this;
    }

    /**
     * SHTF and needs to be cron'd i guess
     */
    private function pong()
    {
        // .....
    }
}