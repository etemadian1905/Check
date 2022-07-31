<?php

namespace CheckRequest;

class CheckMethod
{

    //check method of request
    public static function check_method()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            return  'true';
        }
        else{
            return false;
        }
    }
}
