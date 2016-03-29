# Magento extension api-bridge-pimcore

## Package content

Bridge includes 2 extensions: 

1. magento extension https://github.com/oleksandrmakhno/api-bridge-pimcore 
2. pimcore plugin https://github.com/oleksandrmakhno/api-bridge-magento

## How it works

1. very simple
2. in magento we have product 'shirt' with sku = e123
3. in pimcore we have object MagentoBaseProduct 'shirt' with sku = e123
4. when in magento we open PDP (product details page) for 'shirt' - api call to pimcore fetch product media data

## Magento extension installation

Manually: 

```
1. in this archive there is folder 'extension' which contains extension files
2. magento backend => system => cache management => disable cache
3. copy all folders / files from this 'extension' folder to magento web root directory, update files permissions to new files if needed
4. pimcore backend => settings => users / roles => users => select user 'api-bridge-magento' => copy 'api key' value
5. magento backend => system => configuration => api bridge pimcore => settings => in 'pimcore api user key' field paste copied key from pimcore => save config
6. magento backend => system => cache management => enable cache
```

## Test api call
1. if configuration was set correctly - in magento backend 'System => Configuration => Api bridge pimcore => Settings'
we'll have Pimcore api command list (taken from pimcore)

2. now we may use it something this way
```
$apiHelper = Mage::helper('OleksandrMakhno_ApiBridgePimcore/Data');
$res = $apiHelper->pimcoreApiCall('commandGetProduct', ['paramSku' => 'e123']);
var_dump($res); die;
```

## Release History
* 20160217 0.0.1 magento extension initial version
* 20160328 0.0.2 magento extension files added
* 20160329 0.1.0 folder structure changed, description added

## Maintainer 
* Oleksandr Makhno
* option25@gmail.com 
* <a href='https://ua.linkedin.com/in/oleksandr-makhno-98a30b45'>https://ua.linkedin.com/in/oleksandr-makhno-98a30b45</a>
