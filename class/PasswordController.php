<?php


final class Password
{
    private $password;

    private function __construct($password)
    {
        $this->ensureIsValidEmail($password);

        $this->$password = $password;
    }

    public static function fromString($password)
    {
        return new self($password);
    }

    public function __toString()
    {
        return $this->password;
    }

    public function ensureIsValidPassword($password)
    {
        $mdpregex = "#(?=.*[a-z])(?=.*[A-Z]).{5,}#";
        if(preg_match($emailregex,$_POST['email'])&& preg_match($mdpregex, $_POST['password']))//&&preg_match(,$_POST['password']))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
}