
<?php
    include_once(__DIR__ . "/Db.php");
    class Video {

        public static function getAll() {
            // this function should get all the video from the database
            // and return them as an array
            // tip: use fetchAll() and return that result
            $conn = \Db::getInstance();
            $result = $conn->query("select * from videos;");
            return $result->fetchAll();
        }

        public static function getAllByUserId(int $id) {
            // only grab the videos for a certain user
            $conn = \Db::getInstance();
            $result = $conn->query("select * from videos where user_id = $id;");
            return $result->fetchAll();
        }
        public static function getAllById(int $id) {
            // only grab the videos for a certain user
            $conn = \Db::getInstance();
            $result = $conn->query("select * from videos where id = $id;");
            return $result->fetchAll();
        }

    }