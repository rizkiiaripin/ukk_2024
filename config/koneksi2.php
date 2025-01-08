<?php

class db{
    private $host ='localhost',
            $user = 'root',
            $pass = '',
            $db = 'ukk2024_perpus_mrizkixiirpl1';
    protected $konek;
    public function __construct(){  
        $this->konek=mysqli_connect($this->host,$this->user,$this->pass,$this->db);

    }


}       


?>