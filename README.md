# prestashop_noski

Cms prestashop, custom classic theme, give some modules etc. (mvp)

## Getting Started

hello this is, light version of customization of the classic prestashop theme, what supported from the box.
the main idea is to create, many categories and give some support with import/export data of all products

this theme support basic futures, and i add gulp and some custom css style. gulp/webpack is the same idea, what you can find in newwest version of the prestashop presta ecommerce theme


so Starter Theme use webpack, https://github.com/PrestaShop/StarterTheme look webpack.config.js StarterTheme/_dev/

in my version classic\assets gulpfile  



### Prerequisites

to start npm install, be sure that you use 5.6.0   or install it  
```
node -v must be 6.
npm install -g npm@5.6 
```

Be sure that you use on your localhost server (openserver etc) 
php 5.6, node 6.0(6.14.4), npm 5.6.0 

```
try npm -v, node -v
```

### Installing

A step by step series of examples that tell you how to get a development env running

```
npm install -g 
```

And repeat

```
npm install
gulp
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests for frontpart

Start gulp, in folder assets 


## DataBase mysql connections here  'database_engine' => 'InnoDB',

you must create manualy file php here - app/config/parameters.php

```
<?php return array (
  'parameters' =>


  array (
    'database_host' => '127.0.0.1',
    'database_port' => '',
    'database_name' => 'namedb',
    'database_user' => 'logindb',
    'database_password' => 'passworddb',
    'database_prefix' => 'os_',
    'database_engine' => 'InnoDB',
    'mailer_transport' => 'smtp',
    'mailer_host' => '127.0.0.1',
    'mailer_user' => NULL,
    'mailer_password' => NULL,
    'secret' => 'zv1997GhjixOanMRw2UYYiEsAdI7nKa41GuvgkYkI9KBTQC5JUqf3Fi5',
    'ps_caching' => 'CacheMemcache',
    'ps_cache_enable' => false,
    'ps_creation_date' => '2018-08-26',
    'locale' => 'ru-RU',
    'cookie_key' => 'cs5KLUO6i1GJcgwDMtavRMcUXVyr2VgkvAXFECrz5x2V5kkMCJMDMJz4',
    'cookie_iv' => 'NbRpa8Ry',
    'new_cookie_key' => 'def000006adaca9e1e4c9c732856b9b55f569d1966029a45d291ddf5a4157192ebf20b86b3110c27bc580fd4e48c8a49bfc953ed5c867d30068064718fb7cd1eb94045ee',
  ),
);


```

## Authors

* **Sonich Oleksadr** - *Initial work* - [Platinum-Trade](https://github.com/tbunitrade)



## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* $ git rm --cached app/config/parameters.php  - this file ignore in index for Junior Builder.
* After install set up all files 777 and in root change in file .htaccess, url ^presta$ on your link ^prestashop.xn----7sbbighlkm9ahj2air.xn--j1amh$
* etc
hello world )

