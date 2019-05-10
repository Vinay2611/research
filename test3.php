<?php

class Person
{
    /**
     * @return string
     */
    public function sayGoodbye()
    {
        return 'Hello';
    }
}

$person = new Person();
echo $person->sayGoodbye();