//assign_two
<?php

class User
{
    public $name;
    public $username;
    public $email;

    function friend($name)
    {
        echo "$name" , " is a friend";
    }
    function status($name)
    {
        echo "$name" , " has a new status";
    }
}

$example = new User();
echo $example -> friend("Mark Joshua") . "<br>";
echo $example -> status("Mark Joshua");

?>
