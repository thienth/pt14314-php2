<?php
class BaseModel{
    function __construct()
    {
        $host = "127.0.0.1";
        $dbname = 'pt14314-web';
        $dbusername = 'root';
        $dbpass = "123456";
        $this->connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",
                                        $dbusername, $dbpass);
    }
}
?>