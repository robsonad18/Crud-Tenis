<?php 

if (isset($_GET['url'])) {
    $dir = __DIR__;
    $urlValue = $_GET['url'];
    
    \App\Url::getRewrite($urlValue, $dir);
}
  