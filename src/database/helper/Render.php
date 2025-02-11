<?php

namespace PP\shop\Helper;
use PP\shop\Config\Config; 

class Render {
    public static function render(string $path, array $args = [], $template_path = Config::TEMPLATE_PATH) {
        ob_start();
        extract($args);
        require $path;
        $content = ob_get_contents();
        ob_clean();
        include dirname(__DIR__) . $template_path;
    }
}