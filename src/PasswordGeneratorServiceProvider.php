<?php

namespace PantheraStudio\PasswordGenerator;

use Illuminate\Support\ServiceProvider;

class PasswordGeneratorServiceProvider extends ServiceProvider {
    protected $defer = false;

    public function register() {
        $this->app->bind('password-generator', function () {
            return new PasswordGenerator;
        });
    }

    public function provides() {
        return ['password-generator'];
    }
}