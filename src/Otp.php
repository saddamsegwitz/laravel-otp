<?php

namespace Segwitz\Otp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Segwitz\Otp\Otp
 */
class Otp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'otp-generator';
    }
}
