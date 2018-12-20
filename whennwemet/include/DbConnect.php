<?php

//Class DbConnect
class DbConnect
{
    //Variable to store database link
    private $con;
    private $con2;
    private $con3;

    //Class constructor
    function __construct()
    {

    }

    //This method will connect to the database
    function connect()
    {
        //Including the constants.php file to get the database constants
        include_once dirname(__FILE__) . '/Constants.php';

        //connecting to mysql database
        $this->con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME1);

        //Checking if any error occured while connecting
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        //finally returning the connection link
        return $this->con;
    }
    function connect2()
    {
        //Including the constants.php file to get the database constants
        include_once dirname(__FILE__) . '/Constants.php';

        //connecting to mysql database
        $this->con2 = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME2);

        //Checking if any error occured while connecting
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        //finally returning the connection link
        return $this->con2;
    }
    function connect3()
    {
        //Including the constants.php file to get the database constants
        include_once dirname(__FILE__) . '/Constants.php';

        //connecting to mysql database
        $this->con3 = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME3);

        //Checking if any error occured while connecting
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        //finally returning the connection link
        return $this->con3;
    }


}