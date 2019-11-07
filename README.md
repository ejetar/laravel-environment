# Laravel Environment

## Table of Contents
  * [About](#about)
  * [How it works](#how-it-works)
  * [Get started](#get-started)
    + [Examples](#examples)
      - [From system environment variable method](#from-system-environment-variable-method)
        * [First example](#first-example)
        * [Second example](#second-example)
        * [Third example](#third-example)
      - [From file method](#from-file-method)
        * [First example](#first-example-1)
      - [From custom method](#from-custom-method)
        * [First example](#first-example-2)
  * [Installation](#installation)
  * [Changelog](#changelog)
  * [Contributing](#contributing)
  * [License](#license)

## About
Laravel Environment is a library designed to be used in conjunction with Laravel. It enables the user to **load a different .env file from the original**. The coolest thing about this library is that it **provides different methods** for you to do this.

There are currently 3 methods:
```php
\Ejetar\LaravelEnvironment::fromSystemEnvironmentVariable($system_environment_variable_name, $default_value = 'local')
//Loads an environment file according to the value of a system environment variable
```
```php
\Ejetar\LaravelEnvironment::fromFile($filename)
//Loads an environment file explicitly, stating the file path
```
```php
\Ejetar\LaravelEnvironment::fromCustomMethod(Callable $callable)
//Enables the user to enter a custom method for loading the environment file
```

## How it works
To use this library is very simple, just call Laravel Environment before `return $app;` in the `bootstrap/app.php` file:
```php
...

\Ejetar\LaravelEnvironment\LaravelEnvironment::fromSystemEnvironmentVariable('MYAPP_ENV');

return $app;
```

## Get started
### Examples
#### From system environment variable method
##### First example
We assume in this example that the system environment variable MYAPP_ENV exists and has the value 'production'.
```php
\Ejetar\LaravelEnvironment\LaravelEnvironment::fromSystemEnvironmentVariable('MYAPP_ENV');
//Will load the environment file .env.production
```
##### Second example
We assume in this example that the system environment variable MYAPP_ENV does not exist.
```php
\Ejetar\LaravelEnvironment\LaravelEnvironment::fromSystemEnvironmentVariable('MYAPP_ENV');
//Will load the .env.local environment file. When the system environment variable does not exist, then it takes $default_value.
//By default $default_value is set to 'local'.
```
##### Third example
We assume in this example that the system environment variable MYAPP_ENV does not exist, and $default_value will be 'acme'.
```php
\Ejetar\LaravelEnvironment\LaravelEnvironment::fromSystemEnvironmentVariable('MYAPP_ENV', 'acme');
//Will load the .env.acme environment file. When the system environment variable does not exist, then it takes $default_value.
```

#### From file method
##### First example
```php
\Ejetar\LaravelEnvironment::fromFile('.env.local');
//Load the .env.local file explicitly
```

#### From custom method
##### First example
Loading the server IP-based environment file:
```php
\Ejetar\LaravelEnvironment::fromCustomMethod(function(){
  switch($_SERVER['SERVER_ADDR']) {
    case '1.2.3.4':
      return '.env.local';
      break;
    case '5.6.7.8':
      return '.env.production';
      break;
    default: 
      return '.env.other';
  }
});
```

## Installation
`composer require ejetar/laravel-environment`

## Changelog
Nothing for now...

## Contributing
Contribute to this wonderful project, it will be a pleasure to have you with us. Let's help the free software community. You are invited to incorporate new features, make corrections, report bugs, and any other form of support.
Don't forget to star in this repository! 😀 

## License
This library is a open-source software licensed under the MIT license.
