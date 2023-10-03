<?php
class RegisterController extends Controller
{

    public $customerModel;

    public function __construct()
    {

        // Viet ham kiem tra (middleware ) xem nguoi dung da dang nhap hay chua
        $this->customerModel = $this->model("CustomerModel");
    }

    public function index()
    {
        $this->view("master-layout", [
            "page" => "register",
        ]);
    }

    public function process_register()
    {
        //            Get data from form register
        if (isset($_POST['formRegister'])) {
            $name = $_POST['name'];
            $phone_number = $_POST['phone_number'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $address = $_POST['address'];
            $password = password_hash($password, PASSWORD_BCRYPT);

            //            Insert data to table customers
            $result = $this->customerModel->insertNewCustomer($name, $email, $phone_number, $address, $password);

            //            Notification success or error
            $this->view("master-layout", [
                "page" => "register",
                "result" => $result,
            ]);
        }
    }
}
