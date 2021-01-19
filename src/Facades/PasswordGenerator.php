<?php

namespace PantheraStudio\PasswordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PasswordGenerator extends Facade{
    protected static function getFacadeAccessor() {
        return 'password-generator';
    }
}
