# Import Profiles

## Overview
...

## Install

Add the following section to your composer.json:

```
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:magento-hackathon/ImportProfiles.git"
    }
],
```

Now you need to require the module

```
composer require magento-hackathon/ImportProfiles dev-master
```

Installation in Magento is done by:

```
bin/magento setup:upgrade
```

## Usage
...