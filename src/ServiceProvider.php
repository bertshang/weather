<?php
/**
 * Created by PhpStorm.
 * User: bertshang
 * Date: 2019/6/29
 * Time: 16:03
 */

namespace Bertshang\Weather;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {
    protected $defer = true;

    public function register() {
        $this->app->singleton(Weather::class, function(){
            return new Weather(config('services.weather.key'));
        });

        $this->app->alias(Weather::class, 'weather');
    }

    public function provides()
    {
        return [Weather::class, 'weather'];
    }
}