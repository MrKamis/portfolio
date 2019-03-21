<?php
    class Router {
        public static function route($get) {
            $page = 'home';
            if (isset($get['page']) && $get['page'] != '') {
                $page = $get['page'];
            }
            require_once __DIR__ . '/' . $page . 'View.htm';
        }
    }
?>