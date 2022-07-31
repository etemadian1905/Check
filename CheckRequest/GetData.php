<?php

namespace CheckRequest;

class GetData
{

    //get json
    public static function get_data()
    {
        return file_get_contents('php://input');
    }
}
