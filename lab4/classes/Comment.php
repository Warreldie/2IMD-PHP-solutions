<?php
    class Comment {
        public $comment;

        /**
         * Set the value of comment
         *
         * @return  self
         */ 
        public function setComment($comment)
        {
                $this->comment = $comment;

                return $this;
        }

        /**
         * Get the value of comment
         */ 
        public function getComment()
        {
                return $this->comment;
        }
        
    }