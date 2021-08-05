<?php

namespace App;

use Exception;
use PDOException;

abstract class Url
{
  static function getRewrite (string $value, string $dir)
  {
     try 
     {
       switch ($value) 
       {
         case 'tenis/cadastro':
            include $dir.'/Resource/structure/form/tenis-cadastro.php';
            break;
         default:
            header('location: index.php');
            break;
       }
     } catch (\PDOException $e)
     {
       throw new \Exception($e.__CLASS__);
     }
  }
}
