# datafiller.php

Fill database with sample data using PHP.

Rebuilds entire sample data used on a project.


## Usage:



### On screen only

    php -f data.php


### On live database

    php -f data.php > data.dmp
	mysql -uroot awesome_accounts < data.dmp
