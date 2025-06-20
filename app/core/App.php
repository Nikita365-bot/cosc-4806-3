<?php
class App {
    protected $controller = 'Login';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
       
        // Default to 'home' if authenticated
        if (isset($_SESSION['auth']) && $_SESSION['auth'] == 1) {
            $this->controller = 'Home';
        }

        $url = $this->parseUrl();

        if (isset($url[0])) {
            $controller = ucfirst($url[0]); // Capitalize first letter

            if (file_exists('app/controllers/' . $controller . '.php')) {
                require_once 'app/controllers/' . $controller . '.php';
                $this->controller = $controller;
                unset($url[0]);
            }
        } else {
            // Default controller fallback
            require_once 'app/controllers/' . ucfirst($this->controller) . '.php';
        }

        $this->controller = new $this->controller;

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
        }

        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }
}
