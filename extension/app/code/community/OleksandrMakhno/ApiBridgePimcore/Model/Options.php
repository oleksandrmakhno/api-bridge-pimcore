<?php

class OleksandrMakhno_ApiBridgePimcore_Model_Options
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        $res = [];

        try {
            $apiHelper = Mage::helper('OleksandrMakhno_ApiBridgePimcore/Data');
            $data = $apiHelper->pimcoreApiCall('commandGetApiCommandList');
            $data = json_decode($data);

            foreach ($data as $key => $value) {
                $res[] = [
                    'value' => $key,
                    'label' => $value,
                ];
            }
        } catch (Exception $e) {
            Mage::logException($e);
        }

        return $res;
    }
}