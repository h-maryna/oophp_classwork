<?php

/**
 * Demonstrates inheritance AND Magic Methods
 */

class Student extends User
{

    private $student_number;

    public function __construct($name, $email, $student_number)
    {
        // give the parent constructor what it needs
        parent::__construct($name, $email);

        // Set our own attribute value
        $this->student_number = $student_number;
    }

    // __sleep is invoked when we serialize an object
    // It simply identifies the properties that should
    // be included in the sleeping (serialized) object
    public function __sleep()
    {
        return array(
            'student_number',
            'name',
            'user_id'
        );
    }



    public function __wake()
    {
        var_dump("I HAVE BEEN WOKEN!");
    }

    /**
     * __toString is invoked when we treat an object like
     * a string (by trying to echo it, for example)
     * @return string [description]
     */
    public function __toString()
    {
        return "<p>I am a student, my name is " . $this->name . '</p>';
    }

    /**
     * The __invoke function is called when we treat an
     * instantiated object like a function 
     * @return [type] [description]
     */
    public function __invoke()
    {
        var_dump('I HAVE BEEN INVOKED');
    }

    // When the script is finished running, or the
    // Object is completely out of scope and will
    // not be referenced again, this function is
    // invoked.
    public function __destruct()
    {
        var_dump('I HAVE BEEN DESTROYED!');
    }


// end class    
}
