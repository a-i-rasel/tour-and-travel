<?php

    require "./vendor/autoload.php";
    $globals = $GLOBALS;
    // connect to the database
    $globals['m'] = new MongoDB\Client();

    // select a database
    $globals['db'] = $globals['m']->tourist;

    // create a collection
    $globals['collection'] = $globals['db']->package;


    class Package{
        public $id;
        public $im;
        public $place;
        public $pid;
        public $day;
        public $person;
        public $price;
        public $rating;
        public $des;
        public $show;

        public function setPackage($id, $im, $place, $pid, $day, $person, $price, $rating, $des, $show){
            $this->id = $id;
            $this->im = $im;
            $this->place = $place;
            $this->pid = $pid;
            $this->day = $day;
            $this->person = $person;
            $this->price = $price;
            $this->rating = $rating;
            $this->des = $des;
            $this->show = $show;
            
        }
        public function getPackage($globals)
        {
            $globals['collection']->updateOne(
                ['_id' => new MongoDB\BSON\ObjectId("$this->id")],
                [
                    '$set' => (array(
                        "img" => $this->im,
                        "place" => $this->place,
                        "id" => $this->pid,
                        "days" => $this->day,
                        "person" => $this->person,
                        "price" => $this->price,
                        "rating" => $this->rating,
                        "description" => $this->des,
                        "show" => $this->show
                    ))
                ]
            );            
            // header("Location: dashboard.php");
            header("Location: ./admin/deshpack.php");
            return 'success';
        }

        public function deletePackage($globals, $id)
        {
            $this->id = $id;
            $globals['collection']->deleteOne(['_id' => new MongoDB\BSON\ObjectId("$this->id")]);
            header("Location: ./admin/deshpack.php");
            exit();
        }
    }
?>
