<?php
require_once(dirname(__FILE__)."/DBConnection.php");
class Search
{
    protected $db;
    public function __construct() {
        $this->db = new DBConnection();
        $this->db = $this->db->returnConnection();
    }

    // get Blog Info function
    public function getBlogInfo() {
        $query = $this->db->prepare("SELECT name, last_name, email, contact_no, address, salary FROM personal");
        $query->execute();

        $result = $query->fetchAll();
        return $result;
    }
    
}


