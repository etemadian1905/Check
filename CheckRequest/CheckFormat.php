<?php

namespace CheckRequest;

class CheckFormat
{

    //check format of date
    public static function check_format($date)
    {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
            return true;
        } 
    }
}
