# Magento extension api-bridge-pimcore

Bridge includes 2 extensions: 

1. magento extension https://github.com/oleksandrmakhno/api-bridge-pimcore 
2. pimcore plugin https://github.com/oleksandrmakhno/api-bridge-magento

## Magento extension installation

Manually: 

```
1. in this archive there is folder 'extension' which contains extension files
2. copy all folders / files from this 'extension' folder to magento web root directory, update files permissions to new files if needed 
3. in magento backend 'System => Cache Management' disable all cache types
4. 
5. 
6. in magento backend 'System => Cache Management' enable all cache types
```

## Test api call
1. if configuration was set correctly - in magento backend 'System => Configuration => Api bridge pimcore => Settings'
we'll have Pimcore api command list (taken from pimcore)

2. now we may use it something this way any place
```
$apiHelper = Mage::helper('OleksandrMakhno_ApiBridgePimcore/Data');
$res = $apiHelper->pimcoreApiCall('commandGetProduct', ['paramSku' => 'e123']);
var_dump($res); die;
```

## Release History

* 20160217 0.0.1 magento extension initial version 
* 20160328 0.0.2 magento extension files added

## Maintainer 
* Oleksandr Makhno
* option25@gmail.com 
* <a href='https://ua.linkedin.com/in/oleksandr-makhno-98a30b45'>https://ua.linkedin.com/in/oleksandr-makhno-98a30b45</a>
