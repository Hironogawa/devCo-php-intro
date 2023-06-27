# PHP Basics

## Check PHP Version

Check which PHP version or if PHP is installed on you Linux computer:

1. Open your command line interface / Terminal
2. Type: PHP --version
3. Hit enter and Check the output.

# Install PHP on Linux (Ubuntu)

https://www.digitalocean.com/community/tutorials/how-to-install-php-8-1-and-set-up-a-local-development-environment-on-ubuntu-22-04

https://computingforgeeks.com/how-to-install-php-8-2-on-ubuntu/

## T0 Install Different Versions Of PHP

sudo apt update && sudo apt upgrade

sudo apt install --no-install-recommends php8.1

### To Install Required Modules

sudo apt install php8.2-{bcmath,fpm,xml,mysql,zip,intl,ldap,gd,cli,bz2,curl,mbstring,pgsql,opcache,soap,cgi}

### Set Default PHP Version in Ubuntu (i.e. from 7.2 to 8.2)

sudo update-alternatives --set php /usr/bin/php8.2
sudo a2dismod php7.2
sudo a2enmod php8.2
sudo systemctl restart apache2
