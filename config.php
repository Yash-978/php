<?php
    class Config{
        
        private $host="localhost";
        private $username="root";
        private $password="";
        private $database="demo";
        private $connection;
        
        public function connect() 
        {
            $this->connection = mysqli_connect($this->host,$this->username,$this->password,$this->database);
            // if($res)
            // {
            //     echo "Database connected successfully";

            // }
            // else{
            //     echo "Database connection failed";
            // }
            
        }
        public function __construct() 
        {
            $this->connect();

            
        }
        public function insert($name,$age,$course,$phone) 
        {
            $query="INSERT INTO students (name,age,course,phone) VALUES ('$name',$age,'$course',$phone)";
           $res= mysqli_query($this->connection,$query);
            if($res)
            {
                echo "Data Inserted Succesfully";
            }else{
                echo "Data Insertion Failed";

            }
        }
}
?>