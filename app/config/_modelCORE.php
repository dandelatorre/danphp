<?php
    /*
    un comment this if you want to use session
    */

    session_start();

    //===================================================
        // SESSION_MAKER
    //===================================================
    class session
    {
        public function _set($pram,$pram2) // set session
        {
            return $_SESSION[$pram] = $pram2;
        }
        
        public function _get($pram) // get session data
        {
            return $_SESSION[$pram];
        }
        
        public function _detect($pram)
        {
            if(isset($_SESSION[$pram]))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function _end()
        {
            session_unset();  
            session_destroy();
        }
    }
    //===================================================
?>