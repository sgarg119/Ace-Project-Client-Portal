<?php

  define('DEBUG',false);
  
  if (!DEBUG) { #public sees
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
  } else { #developer 
    error_reporting(E_ALL);
  }
  
  define('ADMIN_ADDRESS','blog_admin@mailinator.com');

  define('DB_HOSTNAME', 'localhost');
  define('DB_USER',     'blogadmin');
  define('DB_PASSWORD', 'password');
  define('DB_DSN', 'mysql:host=localhost;dbname=blog;charset=utf8');
  define('DB_DATABASE', 'blog');
  
  define('BLOG_NAME','Stung Eye');
  define('BLOG_INDEX_NUM_POSTS',5);
  
  function format_mysql_datetime($datetime) {
    $time = strtotime($datetime);
    return date('F j, Y, g:i a', $time);
  }
  
  function redirect($script_name = '/blog/index.php/') {
    header("Location: $script_name");
    exit;
  
 }
  function pa($arr,$ext=0)
{
   echo "<pre>";
   print_r($arr);
   echo "</pre>";
   if($ext==0){return;}else{exit(0);}
   return;
}
 try{
        $db = new PDO(DB_DSN, DB_USER, DB_PASSWORD);
    } catch (PDOException $e){
        echo 'Error: '.$e->getMessage();
        die(); // force execution to stop errors
    }
 
?>
