# A Vagrant Search Playbox for Lemp
A starting playbox for comparing ElasticSearch and Amazon Cloud Search.

## Requirements
* [VirtualBox](https://www.virtualbox.org)

* [Vagrant](http://vagrantup.com)

* [Cygwin](https://www.cygwin.com/) or any other ssh-capable terminal shell for the `vagrant ssh` command

* [Amazon Cloud Search Account & Credentials] You can get free trial (https://console.aws.amazon.com/cloudsearch/home)

## Package includes

* [Php 5.5.9] php5-fpm, phpmyadmin

* [Ubuntu 14.04]

* MySQL

* Nginx

* Elastic Search 1.7.2

* Amazon Cloud Search package included in composer.json

**A helpful tutorial about Vagrant Lemp:**

https://vesselinv.com/lemp-with-vagrant/ (https://github.com/vesselinv/vagrant-lemp)



## How To Build

  Get Code
```
$ git clone https://github.com/seyfiaslan/vagrant-lemp-search-stack/
$ cd vagrant-lemp-search-stack
$ vagrant up --provision
```

  Get In VM and update composer packages

```
$ vagrant ssh
Welcome to Ubuntu 14.04 LTS ...
...
vagrant@vagrant:~$
cd /home/vagrant/code/www
php composer.phar install
```

    Edit credentials in  _/aws/config.php

```
const KEY = "YOUR_KEY";
const SECRET = "YOUR_SECRET_KEY";
```


## Test The Code
http://10.4.4.58/info.php
http://10.4.4.58/index.php

(You will get an exception code if you don't change your credentials)