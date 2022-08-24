# MageGuide TierPriceOverride

Tested on: 2.2+, 2.3+

## Description

TierPriceOverride is a useful module especially for B2B eshops with hidden prices. It provides the possibility to show targetted discounts per customer by Setting as Base Price the Customer Group Price.
So then customer is gonna know how much does he saves from the regular price and then how much more is he saving from his price thanks to special price or a catalog rule. Of course the way to display it is up to you in a custom phtml file for product page.


### Functionalities

  - Setting as Base Price Customer Group Price if exists

### Installation

  Add the app folder with all the subfolders into the root folder of your Magento Application.

  Perform the following commands:

  * __Developer Mode__

```sh

    $ php bin/magento set:upg && php bin/magento c:c

```

  * __Production Mode__

```sh

    $ php bin/magento maintenance:enable
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:di:compile
    $ php bin/magento setup:upgrade
    $ php bin/magento setup:static-content:deploy el_GR en_US #or any other space seperated language you need for your project
    $ php bin/magento maintenance:disable

```
