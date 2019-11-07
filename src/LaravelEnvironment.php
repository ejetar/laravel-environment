<?php

namespace Ejetar\LaravelEnvironment;

class LaravelEnvironment {
    public static function fromCustomMethod(Callable $callable) {
        self::fromFile($callable());
    }

    public static function fromSystemEnvironmentVariable($system_environment_variable_name, $default_value = 'local') {
        if (($env = getenv($system_environment_variable_name)) !== false)
            self::fromFile(".env.$env");
        else
            self::fromFile(".env.$default_value");
    }

    public static function fromFile($filename) {
        app()->loadEnvironmentFrom($filename);
    }
}
