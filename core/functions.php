<?php 

/**
 * 
 *  ./core/functions.php
 * 
 */

 /**
  * formated_date
  *
  * @param string $date
  * @param string $format
  * @return string
  */

  namespace Core\Functions;

 function formated_date(string $date, string $format = DATE_FORMAT) :string {
     $date = new \DateTime($date);
     return $date->format($format);
 }