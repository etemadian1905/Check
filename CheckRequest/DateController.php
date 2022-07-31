<?php

namespace CheckRequest;




require_once('CheckMethod.php');
require_once('CheckFormat.php');
require_once('GetData.php');



class DateController
{
   static private $json;

   //check date in request
   public function check_date()
   {
      if (!empty(self::$json = GetData::get_data())) 
      {
         if (CheckMethod::check_method()) {
            //decode json for check format date
            $data = json_decode(self::$json, true);
            if (CheckFormat::check_format($data["date"])) {
               return self::$json;
            } else {
               return 'format not acceptable';
            }
         }
      }
       else {
         return 'Bad Request';
      }
   }
}
