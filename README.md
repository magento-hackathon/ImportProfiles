# Import Profiles

## Overview

A layer to translate data from (any) source to Magento.
We created the idee to first translate data to a general format(array), then do the translations, the output it to for example Magento or CSV. This way it's possible to re-use it for multiple sources.

We had a cool discusion about where to do the mapping and howto make it flexible, we came up with a pretty solution which is more flexible to import/export data from several sources.

## Concept

| Step | Implements |
| ---- | ---------- |
| InputData | From source CSV/SOAP/curl|Own Implementation |
|  | Read data to array/xml2array/csv2array |
| StructuredData | Array rows |
|  | Process data, do mappings |
| OutputData | To destination: Magento/CSV/SOAP/REST/Own Implementation/Magento |

### Input

You read feeds from whatever your source is with the possibility to add your own.
For example process the Magento std csv.

The input should process the data to a array containing rows with field -> value

- row -> field -> data

### Structured

With the structured data you can hook the translators to do mappings, change fields, update values.
There can be multiple hooks, in the Magento admin there can be a interface for doing the mappings in multiple steps.

### Output

The structured data is then translated so you'll have data which you can import into Magento directly. Or even export it to another destination.

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

## Contributers

- [Andra Lungu](https://github.com/springerin)
- [Marcel Hauri](https://github.com/mhauri)
- [Nils Preuß](https://github.com/nhp)
- [Steven Vandeputte](https://github.com/stevenvdp)
- [Tobi Beernaert](https://github.com/fowbi)
- [Wesley Vestjens](https://github.com/Wesdesignz)
- [Jeroen Boersma](https://github.com/JeroenBoersma)

