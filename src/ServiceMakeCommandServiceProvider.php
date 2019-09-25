<?php

namespace DmitryZhirnov\ServiceMake;

use Illuminate\Support\ServiceProvider;

class ServiceMakeCommandServiceProvider extends ServiceProvider
{
    public function boot(){

    }

        /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands();
    }

    protected function registerCommands(){
        $this->commands([ServiceMakeCommand::class]);
    }
}
