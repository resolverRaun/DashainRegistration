# DashainRegistration 
- change .env.example file to .env and change database settings.
- you can find sql file in resources/database_file/dashain_app.sql . Import it into mysql using phpmyadmin.
- Make sure composer is installed. Also add alias for composer
  - install composer
  
    curl -sS https://getcomposer.org/installer | php

  - add alias
  
    sudo mv composer.phar /usr/bin/

    vim ~/.bash_profile
    
  - add following lines to the  .bash_profile
  
    alias composer="php /usr/bin/composer.phar"

  - restart console for this change to take effect

- Install composer to manage package in laravel.Run composer update to install packages.
    
    composer install

    composer update
    
- Edit and validating form is remaining.
- To start the server, run
     php artisan serve

##GOTCHAS
- getting following error

        laravel No supported encrypter found. The cipher and / or key length are invalid
        
    - run 

        php artisan key:generate
    

Login information

email : bittu1028@gmail.com		
password : hello


