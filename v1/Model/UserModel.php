<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class UserModel extends Database
{
    public function getUsers($limit)
    {
        
        return $this->select("SELECT * FROM tbl_user_data ORDER BY id ASC LIMIT ?", ["i", array($limit)]);
    }

    public function getUserById($username,$password)
    {

     return $this->select("SELECT * FROM tbl_user_data where username=? and password=?",
        ["ss",array($username,$password)]);
    }
    public function createUser($username,$password,$mobile,$bgroup)
    {
       
        return $this->insert("INSERT INTO tbl_user_data(username,password,mobile,bgroup) VALUES(?,?,?,?)",
        ["ssss",array($username,$password,$mobile,$bgroup)]);
    }
}

?>
