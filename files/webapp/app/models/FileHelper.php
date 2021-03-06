<?php

class FileHelper
{
  
  public static function endsWith($str,$endsWith)
  {
    if ($str == null || $endsWith == null || strlen($str) < strlen($endsWith))
    {
      return false;
    }
    
    $myLength = strlen($str);
    $endsLength = strlen($endsWith);
    $lastX = substr($str,$myLength - $endsLength);
    return $lastX == $endsWith;
  }
  
  public static function startsWith($str,$startsWith)
  {
    if ($str == null || $startsWith == null || strlen($str) < strlen($startsWith))
    {
      return false;
    }
    
    $startsLength = strlen($startsWith);
    $startX = substr($str,0, $startsLength);
    return $startX == $startsWith;    
  }


  public static function rmdirr($dirname)
  {    
    if (!file_exists($dirname)) 
    {
      return false;
    }

    if (is_file($dirname) || is_link($dirname)) 
    {
      return unlink($dirname);
    }

    $dir = dir($dirname);
    while (false !== $entry = $dir->read()) 
    {
      if ($entry == '.' || $entry == '..') 
      {
        continue;
      }

      self::rmdirr($dirname . DIRECTORY_SEPARATOR . $entry);
    }

    $dir->close();
    return rmdir($dirname);
  }
}
