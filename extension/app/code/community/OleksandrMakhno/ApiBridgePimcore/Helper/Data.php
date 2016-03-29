<?php

class OleksandrMakhno_ApiBridgePimcore_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * make api call to pimcore instance
     *
     * @param $commandName
     * @param array $param
     * @return bool|string
     */
    public function pimcoreApiCall($commandName, array $param = [])
    {
        $res = false;

        try {
            // get settings
            $pimcoreHost = Mage::getStoreConfig('tab1/general/pimcorehost',Mage::app()->getStore());
            $pimcoreKey = Mage::getStoreConfig('tab1/general/pimcoreapikey',Mage::app()->getStore());

            // build url
            $url = "$pimcoreHost/plugin/ApiBridgeMagento/api/gateway?apiKey=$pimcoreKey&commandName=$commandName";
            foreach ($param as $key => $value) {
                $url .= "&$key=$value";
            }
            //echo $url; die;

            // make api call
            $res = file_get_contents($url);
        }
        catch (Exception $e) {
            echo $e->getMessage(); die; // TODO
        }

        return $res;
    }
}
