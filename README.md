# DashainRegistration 

### Prequisites : 
  - Composer
  - php
  - postgres database
  - git

#### Install Composer   
###### Linux

- install composer
  
    curl -sS https://getcomposer.org/installer | php

- add alias

  sudo mv composer.phar /usr/bin/

  vim ~/.bash_profile
  
- add following lines to the  .bash_profile

  alias composer="php /usr/bin/composer.phar"

- restart console for this change to take effect

###### Windows
 - download the installer from [here](https://getcomposer.org/Composer-Setup.exe) and run the installer.
 - restart terminal 
 
#### Install php
 - download and install latest stable version of XAMPP from [here](https://www.apachefriends.org/download.html). This will install php, php-admin and Xampp server on your system
 
#### Install Postgres database server
 - download and install latest stable version of PostgreSQL from [here](http://www.enterprisedb.com/products-services-training/pgdownload).
 
#### Install git
 - download and install git from [here](https://git-scm.com/downloads)

### Configure and Run the App

- clone the repo

git clone https://github.com/resolverRaun/DashainRegistration.git

this should clone this repo in a folder named DashainRegistration. 

- PostGreSQL installation comes with a GUI "pgadmin". launch this app. and create a database with following details
  - dbName : Dashain
  - user : postgres
  - pwd : postgres

- cd into the cloned folder and change .env.example file to .env and change database settings with the above details. 
- you can find sql file in resources/database_file/dashain_app.sql . Import it into mysql using phpmyadmin. 
- Install composer to manage package in laravel.Run composer update to install packages.
    
    composer install

    composer update
- Run the following commands in sequnece
  
    php artisan migrate
    
    php artisan db:seed

    php artisan db:seed --class=MoneyFeeder
    
- To start the server, run
     php artisan serve

## Populate Members
- Under the "people" tab in the app, select "choose file" and select the CSV file with the member information. click on upload. You should see your data in the table under the people tab. After this import, you will also get suggestions for auto-complete for registration form.

##GOTCHAS
- getting following error

        laravel No supported encrypter found. The cipher and / or key length are invalid
        
    - run 

        php artisan key:generate
    

Login information

email : admin@kcnepali.com		
password : Dashain2015


