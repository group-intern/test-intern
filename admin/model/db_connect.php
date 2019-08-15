<?php
    class Database
    {
        private $hostname = 'localhost';
        private $username = 'root';
        private $password = '';
        private $dbname = 'test_intern';

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
            $this -> conn = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
            if(!$this->conn)
            {
                echo "Ket noi that bai";
                exit();
            }
            else
            {
                mysqli_set_charset($this->conn,'utf8');
            }
            return $this->conn;
        }
        //THUC THI TRUY VAN
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        //PHUONG THUC LAY DU LIEU
        public function getData()
        {
            if($this->result)
            {
                $data = mysqli_fetch_array($this->result);
            }
            else
            {
                $data = 0;
            }
            return $data;
        }
        //DEM SO LUONG BAN GHI
        public function num_rows()
        {
            if($this->result)
            {
                $num = mysqli_num_rows($this->result);
            }
            else
            {
                $num = 0;
            }
            return $num;    
        }

        // public function getDataLogin()
        // {
        //     $sql = "SELECT * FROM user";
        //     $this->execute($sql);
        //     if($this->num_rows()==0)
        //     {
        //         $data = 0;
        //     }
        //     else
        //     {
        //         while($datas = $this->getData())
        //         {
        //             $data[] = $datas;
        //         }
        //     }
        //     return $data;
        // }
        //PHUONG THUC LAY TOAN BO DU LIEU
        public function getAllData($table)
        {
            $sql = "SELECT * FROM $table ORDER BY hoten ASC";
            $this->execute($sql);
            if($this->num_rows()==0)
            {
                $data = 0;
            }
            else
            {
                while($datas = $this->getData())
                {
                    $data[] = $datas;
                }
            }
            return $data;
        }
        //GET DATA INSERT
        public function getDataInsert($table,$id)
        {
            $sql = "SELECT * FROM $table WHERE id=$id";
            $this->execute($sql);
            if($this->num_rows()!=0)
            {
                $data = mysqli_fetch_array($this->result);
            }
            else
            {
                $data = 0;
            }
            return $data;
        }
        //PHUONG THUC INSERT
        public function Insert($taikhoan,$matkhau,$hoten,$role,$ngaytao,$status)
        {
            $sql = "INSERT INTO user(username, password,hoten,role,ngaytao,status) VALUE('$taikhoan','$matkhau','$hoten','$role','$ngaytao','$status')";
            return $this->execute($sql);
        }

        //PHUONG THUC Update
        public function Update($id,$taikhoan,$matkhau,$hoten,$role,$ngaytao,$status)
        {
            $sql = "UPDATE user SET username='$taikhoan', password='$matkhau',hoten='$hoten',role='$role',ngaytao='$ngaytao',status='$status'WHERE id='$id' ";
            return $this->execute($sql);
        }
        //PHUONG THUC DELETE
        public function Delete($id)
        {
            $sql = "DELETE FROM user WHERE id='$id' ";
            return $this->execute($sql);
        }
        //PHUONG THUC LOGIN
        public function login($taikhoan,$matkhau,$role){
                $sql = "SELECT * FROM user WHERE username = '{$taikhoan}' and password = '{$matkhau}' and status = 1";
            $this->execute($sql);
            return  $this->getData(array($taikhoan,$matkhau,$role));
            
        }

























        // public function dangnhap($taikhoan,$matkhau){
        //     $sql = "SELECT * FROM users WHERE email='$email'and password='$md5_password'";
        //     $this->setQuery($sql);
        //     return  $this->loadRow(array($email,$md5_password));
        // }

    }
?>
