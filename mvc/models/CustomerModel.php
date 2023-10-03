<?php
    class CustomerModel extends Database {
        
        public function insertNewCustomer($name, $email, $phone_number, $address, $password) {
            
            $sql = "insert into customers(name, email, password, address, phone_number) values('$name', '$email', '$password', '$address', '$phone_number')";
            
            $result = false;
            if( mysqli_query($this->connect, $sql) ) {
                $result = true;
            }

            return json_encode( $result );
        }

        public function checkCustomerLogin($email, $password, $remember) {

            $sqlPassword = "select password from customers where email = '$email'";
            $qrPassword = mysqli_query($this->connect, $sqlPassword);
            $getPassword = mysqli_fetch_array($qrPassword)['password'];

            $passwordVerify = password_verify($password, $getPassword);

            $result = false;
            if($passwordVerify) {

                $checkCustomer = "select * from customers where email = '$email' limit 1";
                $qr = mysqli_query($this->connect, $checkCustomer);
    
                if(mysqli_num_rows($qr) == 1) {
                    $customer = mysqli_fetch_array($qr);
                    $customerID = $customer['id'];
                    $_SESSION['customerID'] = $customerID;
                    $_SESSION['customerName'] = $customer['name'];
    
                    if($remember) {
                        $token = uniqid('customer_', true) . time();
                        setcookie('remember', $token, time() + (86400 * 30));
                        $updateToken = "update customers set token = '$token' where id = '$customerID'";
                        mysqli_query($this->connect, $updateToken);
                    }

                }
                $result = true;
            }
            
            return json_encode($result);

        }

    }