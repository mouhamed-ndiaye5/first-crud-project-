<?php
spl_autoload_register(function ($class_used){
$class = str_replace('\\', '/', $class_used);
$file = __DIR__.'/src/'.$class.'.php';
if (file_exists($file)){
    require_once $file;
}
});
?>