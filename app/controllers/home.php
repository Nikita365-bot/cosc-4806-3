class home extends Controller {
    public function index() {
        session_start();
        if (!isset($_SESSION['auth']) || $_SESSION['auth'] !== 1) {
            header('Location: /login');
            exit;
        }

        $this->view('home/index', ['username' => $_SESSION['username']]);
    }
}
