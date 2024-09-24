<?php

namespace Mfnannah\ArabicPdf\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mfnannah\ArabicPdf\ArabicPdf
 */
class ArabicPdf extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mfnannah\ArabicPdf\ArabicPdf::class;
    }
}
