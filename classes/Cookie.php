<?php

class Cookie
{
    public static function exists($name)//this function checks if a cookie exists or not
    {
      return (isset($_COOKIE[$name])) ? true : false;
    }
    public static function get($name)//this gets the value of a cookie
    {
      return $_COOKIE[$name];
    }
    public static function put($name,$value,$expiry)
    {
      if(setcookie($name,$value,time() + $expiry,'/'))
      {
        return true;
      }
      return false;
    }
    
    public static function delete($name)
    {
      self::put($name,'',time() -1);
    }
  }
