# Readme

## scripts help

Add the export command to the mac's .bash_profile file 
```bash 
vim ~/.zshrc # or ~/.bash_profile 
```

Add your app directory to the PATH variable
```bash
export PATH=$PATH:/Users/asif/git-gh/misc/home_media_server_laravel
``` 


Now all script will execute 
Any script file that starts with - character is media script. Every application can decide their startup characters. 
-ax-dir file has a filter that checks that any file that starts with character - will become executable in media server repository. 

Copy the same file to new repositories and change condition to choose the character 

### inside container add directory to ~/.bash_profile
```bash
echo "export PATH=/Users/asif/git-gh/misc/home_media_server_laravel:$PATH" >> ~/.bash_profile
```

## install breeze / auth and ui

```bash
# inside your laravel container 
apt install vim 

composer require laravel/breeze --dev
php artisan breeze:install react

# this is db shell, this may give errors. 
php artisan db
#### to fix this we need to install mysql client
###### run this to find the client
apt show default-mysql-client
###### then install client 
apt-get update
apt install default-mysql-client
###### once you are connected then do : show tables 

php artisan db:show
php artisan db:table users
composer require fakerphp/faker

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


## Styles that work 

### Buttons

```jsx
<Button type="primary" ghost>
    Primary
</Button>
<Button ghost>Default</Button>

<Button type="primary" danger ghost>
    Danger
</Button>
```


## For role based security install

https://spatie.be/docs/laravel-permission/v5/basic-usage/basic-usage

