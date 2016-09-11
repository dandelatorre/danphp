<?php
    class db
    {
        private $_db_host = 'localhost';
        private $_db_user = '';
        private $_db_pass = '';
        private $_db_db_name = '';
        private $dbms;
        private $dbquery;
        private $_prtString;
        
        public function _db_protect($pram) // ANTI SQL INJECTION YYOU SON OF A WHORE!
        {
            $this->_prtString = $pram;
            $this->_prtString = stripslashes($this->_prtString);
            $this->_prtString = mysql_real_escape_string($this->_prtString);
            return $this->_prtString;
        }
        
        public function _db_query($pram)
        {
            return $this->dbms->query($pram);
        }
        
        public function _db_connect()
        {
            return $this->dbms = new mysqli($this->_db_host,$this->_db_user,$this->_db_pass,$this->_db_db_name);
        }
        
        public function _db_close()
        {
            return $this->dbms->close(); 
        }  
    }
?>
