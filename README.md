# Laravel Service Command

## Installation

To get started with Laravel Service Command, simply require the package
via [Composer](https://packagist.org/packages/lozemc/laravel-services):

```bash
composer require lozemc/laravel-services
```
<br><br>
### Installation for Laravel 10.x

Next, add the following line to the $commands array in your `/app/Console/Kernel.php` file:

```php
protected $commands = [
    
    // ...

    \App\Console\Commands\ServiceMakeCommand::class,
];
```

If the protected $commands array does not exist, you will need to add it.
<br><br><br>
### Installation for Laravel 11.x

Then add the following line to the returned array in `/bootstrap/providers.php`:
```php
return [

    // ...

    Lozemc\Services\Providers\MakeServiceProvider::class,
];
```
<br>

## Usage

Once installed and configured, you can use the artisan command to create a new service:

```bash
php artisan make:service PostService
```

This will generate a new service class named `PostService` in the `App\Services` namespace. You can then implement
your business logic within this service class.

### Other
- [Laravel Action Command](https://github.com/lozemc/laravel-actions)
