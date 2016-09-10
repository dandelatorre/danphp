<?php
    class _hash
    {
        private $p1;
        private $p2;
        private $p3;
        
        public function _encrypt($pram)
        {
            $this->p1 = md5($pram);
            $this->p2 = md5($this->p1);
            $this->p3 = hash('whirlpool',$this->p2);
            return $this->p3;
        }
    }
?>