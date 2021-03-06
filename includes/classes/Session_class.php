<?php
 /*  Class: Session
  *  Desc:  Opens and maintains a PHP session.
  */

  class Session
  {
     private $message;

     function __construct()
     {
        session_start();
     }      

     function getVariable($varname)
     {
        if(isset($_SESSION['$varname']))                 #17
            return $_SESSION['$varname'];
        else                                             #19
        {
            $this->message = "No such variable in 
                                 this session";
            return FALSE;
        }
     }

     function storeVariable($varname,$value)
     {
        if(!is_string($varname))                         #29
        {
            throw new Exception("Parameter 1 is not a
                                 valid variable name.");
            return FALSE;
        }
        else                                             #35
            $_SESSION['$varname'] = $value;
			echo '<br> setting:'.$varname.' to :'.$value.' actual:'.$_SESSION['$varname'];
     }

     function getMessage()
     {
        return $this->message;
     }

     function login(Account $acct,$password)             #44
     {
        if(!$acct->comparePassword($password))           #46
        {
           return FALSE;
        }
        $this->storeVariable("auth","yes");              #47
        return TRUE;
     }
  }
?>
