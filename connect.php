<?

class ConnectBD
{

    private $dsn;
    private $user;
    private $password;

    public function __construct()
    {

        $this->dsn      = 'mysql:dbname=app;host:localhost';
        $this->user     = 'mpescador';
        $this->password = '';

    }

    public function connect()
    {
        try {
            $pdo = new PDO($this->dsn, $this->user, $this->password);
            $this->loginBD($pdo);
        }
        catch (PDOException $e) {
            echo 'error al conectarnos: ' . $e->getMessage();
            exit();
        }
    }

    protected function loginBD($pdo)
    {
        session_start();
        $_SESSION['login'] = '0';
        $email             = $_POST["txtEmail"];
        $password          = $_POST["txtPassword"];

        $consulta = "SELECT * FROM usuarios
    	             WHERE email=:email
    	             AND password=:password";
        $result   = $pdo->prepare($consulta);
        $result->execute(array(
            ":email" => $email,
            ":password" => $password
        ));
        $n = $result->rowCount();
        if (!$result || !$n) {
            header("Location: index.html");
            exit;
        }

        else {
            $_SESSION['login'] = '1';
            header("Location: main.php");
        }
    }
}

$connect = new ConnectBD();
$connect->connect();

?>