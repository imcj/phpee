<?php

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