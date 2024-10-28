<?php

class UserRepository
{
    protected $db;
    public function __construct(DBConnectionInterface $dbConnection)
    {
       $this->db=$dbConnection; //
    }


}


