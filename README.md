#Laravel - tund 6 tunnitöö

**Github demo link: github.com/stenmarkus/laravel**

alguses vaadata kas php on arvutis olemas

avada CMD

ja siis

**php --version**

kui php olemas siis liikuda edasi

siis on vaja installida composer aadressilt **https://getcomposer.org/download/**

installides muud midagi vaja pole teha kui ainult nextnextnext

edasi

installida XAMPP aadressilt **https://www.apachefriends.org/download.html**

edasi

installida XAMPP

siis edasi avada näiteks visual studio code

vs code’s avada terminal

navigeerida kausta kuhu tahad projekti luua, näiteks desktop

**composer create-project laravel/laravel social 5.8**

kui tehtud siis edasi

**cd .\social\**

**php artisan serve**

kui tehtud siis brauseris saab avada lehe aadressil **http://localhost:8000/**

**failis .env teha muudatused**

Database=laravel

username=root

password=

**php artisan migrate**

**php artisan make:auth**

**php artisan serve**

edasi saab avada aadressi http://localhost:8000/phpmyadmin

ja lehe üleval peaks olema näha login ja register nupud

**php artisan make:migration create_messages_table

**php artisan migrate

edasi muudeti faili **home.blade.php**

kui tehtud siis terminalis

**php artisan make:model Message**

phpmyadminis messages tabelisse

lisada ise manuaalselt testandmeid

edasi loodi **HomeController.php** fail



















