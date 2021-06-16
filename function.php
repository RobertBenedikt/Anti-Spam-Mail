<?php

function AntiSpamEmail($w)
{
   $string = chunk_split($w,1,",");
   $pole = explode(",",$string);
   $kod = '';
   foreach ($pole as $key => $value)
   {
      if(!empty($value))
      $kod .= "&#".ord($value).";";
      if(($key+1)%2==0)
      $kod .= "<!-- >@. -->";
   }
return $kod;
}

function AntiSpamMailto($w)
{
   $string = chunk_split($w,1,",");
   $pole = explode(",",$string);
   $kod = '';
   foreach ($pole as $key => $value)
   {
      if(!empty($value))
      $kod .= "&#".ord($value).";";
   }
return $kod;
}
