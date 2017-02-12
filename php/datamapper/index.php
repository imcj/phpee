<?php

$db = new PDO('sqlite:./database.sqlite3');

$create_people_statement = <<<EOF
CREATE TABLE people IF NOT EXISTS(
    id INT AUTOINCREMENT PRIMARY KEY NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    number_of_dependents INT NOT NULL
);
EOF;
$db->exec($create_people_statement);

class Person
{
    private $lastName;
    private $firstName;
    private $numberOfDependents;
}

abstract class AbstractMapper
{
    protected function abstractFind($id)
    {

    }
}

class PersonMapper
{
    protected function findStatement()
    {

    }

    public function find($id)
    {
        return $this->abstractFind($id);
    }
}