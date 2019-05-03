<?php

/**
 * Visibility of attributes and methods
 */

class User
{

    /**
     * Static attributes and methods can have any of the
     * visibility declarations below, but are accessed
     * using the static scope resolution operator:  ::
     * @var string
     */
    public static $type = 'User';

    /**
     * Public name is accessible inside the class, and
     * outside the class, and in any child or parent
     * classes.
     */
    public $name;

    /**
     * Private email is accessible only from the inside
     * this class... not from a parent class, and not
     * from a child class, and not from outside the class
     * Private attributes are only accessible from within
     * the class in which they are declared
     */
    private $email; 

    /**
     * Protected attributes and methods are visible inside
     * the class in which they are declared, but also in
     * classes descended from that class.
     */
    protected $user_id;


    public function __construct($name, $email) {

        // set the user_id as a random number
        $this->user_id = rand();
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Public getter for private email attribute
     * allows us to access the attribute from 
     * outside the class
     * @return String email
     */
    public function getEmail()
    {
        return $this->email;
    }

}