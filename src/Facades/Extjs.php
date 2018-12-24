<?php
namespace Hien\Extjs\Facades;
use Illuminate\Support\Facades\Facade;
class Extjs extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'extjs';
    }
}