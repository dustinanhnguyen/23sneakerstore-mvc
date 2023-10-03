<?php
class LoginController extends Controller
{
    public $loginModel;

    public function __construct()
    {
        $this->loginModel = $this->model("CustomerModel");
    }

    public function index()
    {
        $this->view("master-layout", [
            "page" => "login",
        ]);
    }

    public function process_login()
    {
        if (isset($_POST["formLogin"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $remember = false;

            if (isset($_POST['remember'])) {
                $remember = true;
            }

            $result = $this->loginModel->checkCustomerLogin($email, $password, $remember);
            
            $this->view("master-layout", [
                "page"=>"login",
                "result"=>$result,
            ]);
        }
    }
}
