<?php
include_once(__DIR__ . "/Db.php");
class Comment
{
        public $comment;
        public $email;


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

        /**
         * Set the value of email
         *
         * @return  self
         */
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }
        public function addComment()
        {
                $conn = Db::getInstance();
                $statement = $conn->prepare("insert into comments (email, comment) values (:email, :comment);");
                $statement->bindValue(':email', $this->getEmail());
                $statement->bindValue(':comment', $this->getComment());
                return $statement->execute();
        }
        public function getComments()
        {
                $conn = Db::getInstance();
                $result = $conn->query("select email, comment from comments;");
                return $result->fetchAll();
        }

}
