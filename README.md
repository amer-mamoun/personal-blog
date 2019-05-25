# personal-blog
Building Personal Blog using Laravel framework.

Steps to do after downloading the source code.

## Step 1
Install composer dependencies by the composer.json file with running the following command

```
composer install
```
## Step 2
Create an empty /personal-blog/ database for your application in phpmyadmin

## Step 3


- Duplicate the .env.example file and rename it to .env

- to config the reset password functionality: Creatr an account in mailtrap.io and copy the SMTP username and SMTP password
and place them in mailtrap in .env file

- Fill out the informations to config the database connection

- Generate a new application key with the following command
```
php artisan key:generate
```

## Step 4
Run the migration and seed scripts with
```
php artisan migrate --seed
```

## Step 5
Create a virtualhost for your application in your apache httpd-vhosts.conf file

Example vhost config
```
<VirtualHost *:80>
  ServerName personal-blog.test
  DocumentRoot "%APP_DIR%\public"
  ServerAdmin webmaster@personal-blog.test
  <Directory "%APP_DIR%\public">
        Options Indexes FollowSymLinks Includes ExecCGI
        AllowOverride All
        Allow from all
        Require all granted
    </Directory>
</VirtualHost>
```
## Step 7
Open the hosts file with the adminstration permission form:
C:\Windows\System32\drivers\etc\hosts
and add the following line:  In order to access the app by only typing "###personal-blog.test" in the browser
```
127.0.0.1 personal-blog.test
```

## Step 8
After installation proccess finish and register the first user
you need to access you phpmyadmin->personal-blog->user's table and change the ###admin and ###author field to 1 instead of 0
to give the first user the access for all the functionality in the application.
