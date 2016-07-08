# this is to help with the installation and correct setup of the project
# by default, .env file and many other vendor packages are not pushed into
# git repos, so you have to install them later.


# installation:

git clone https://github.com/magnito2/onlineshop
composer install
create a .env file, setting up the database (copy a .env file from smwea else a put in you project root)
php artisan migrate
php artisan aimeos:setup --option=setup/default/demo:1
php artisan aimeos:account <email> --admin
