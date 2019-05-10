<?php
/**
 * Created by Vinay Jaiswal
 * User: Research
 * Date: 09-01-2019
 * Time: 12:52
 */

class Dbconfig
{
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    /**
     * Dbconfig constructor.
     */
    function Dbconfig() {
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = '';
        $this -> dbName = 'test';
    }

}