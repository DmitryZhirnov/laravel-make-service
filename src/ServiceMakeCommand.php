<?php

namespace DmitryZhirnov\ServiceMake;

use Illuminate\Console\GeneratorCommand;

class ServiceMakeCommand extends GeneratorCommand 
{
    protected $name = "make:service";

    protected $description = "Create new service class";

    protected $type = "Service";
    
    protected function getStub(){
        return __DIR__."/../stubs/service.stub";
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace."\Services";
    }
}
