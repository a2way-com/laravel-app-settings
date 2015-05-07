#A2Way Laravel App Settings
##Installing
1. Require the package.
```
composer require a2way/laravel-app-settings
```
2. Add the service provider the `providers` array in your `config/app.php` file.
```
'A2Way\LaravelAppSettings\LaravelAppSettingsServiceProvider',
```
3. Publish the migration file.
```
php artisan vendor:publish --provider="A2Way\LaravelAppSettings\LaravelAppSettingsServiceProvider"
```
4. Run the migration.
```
php artisan migrate
```
5. Use.
```
php artisan tinker
>>>A2Way\LaravelAppSettings\AppSettings::set('hello', 'world');
=>true
>>> A2Way\LaravelAppSettings\AppSettings::get('hello');
=> "world"
```
