<?php

namespace Cointavia\PDF\Facades;

use Illuminate\Support\Facades\Facade;

class CointaviaPdfFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cointaviapdf';
    }
}
