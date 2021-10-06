<?php

namespace Source\Utils;

class View 
{    
    private static $vars = [];

    /**
     * Método responsável por definir os padrões inicias da classe
     *
     * @param array $vars     
     */
    public static function init($vars = [])
    {
        self::$vars = $vars;
    }

    private static function getContent($view)
    {
        $file = __DIR__.'/../../View/'.$view.'.html';        
        return file_exists($file) ? file_get_contents($file) : 'Página não existe';
    }

    public static function render($view,$vars = [])
    {
        $vars = array_merge(self::$vars,$vars);        

        $keys = array_keys($vars);
        $keys = array_map(function($element_in_array)        
        {
          return '{{'.$element_in_array.'}}';  
        },$keys);  
        
        $content = self::getContent($view);
        return str_replace($keys,array_values($vars),$content);
    }
}
