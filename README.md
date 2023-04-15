# Readme

## install breeze / auth and ui

```bash
# inside your laravel container 
composer require laravel/breeze --dev
php artisan breeze:install react

# this is db shell, this may give errors. 
php artisan db
#### to fix this we need to install mysql client
###### run this to find the client
apt show default-mysql-client
###### then install client 
apt install default-mysql-client
###### once you are connected then do : show tables 

php artisan db:show
php artisan db:table users

```


### DB:SHOW command doctrine installation

You may need to install doctorine 

```
# php artisan db:show

  Inspecting database information requires the Doctrine DBAL (doctrine/dbal) package. Would you like to install it? (yes/no) [no]
❯ yes

Info from https://repo.packagist.org: #StandWithUkraine
./composer.json has been updated
Running composer update doctrine/dbal
Loading composer repositories with package information
Updating dependencies
Lock file operations: 5 installs, 0 updates, 0 removals
  - Locking doctrine/cache (2.2.0)
  - Locking doctrine/dbal (3.6.2)
  - Locking doctrine/deprecations (v1.0.0)
  - Locking doctrine/event-manager (2.0.0)
  - Locking psr/cache (3.0.0)
...
84 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
> @php artisan vendor:publish --tag=laravel-assets --ansi --force

   INFO  No publishable resources for tag [laravel-assets].  

No security vulnerability advisories found
Using version ^3.6 for doctrine/dbal

```