<?php


class Movie {
    protected $title;
    protected $picture;
    protected $director;
    protected $mainActor;
    protected $imbd;
    protected $year;
    protected $date;
    protected $genre;


    function getTitle(){return $this->title;} 
    function setTitle($temp){$this->title = $temp; }

    function getPicture(){return $this->picture;} 
    function setPicture($temp){$this->picture = $temp; }

    function getDirector(){return $this->director;} 
    function setDirector($temp){$this->director = $temp; }

    function getMainActor(){return $this->mainActor;} 
    function setMainActor($temp){$this->mainActor = $temp; }

    function getIMBD(){return $this->imbd;} 
    function setIMBD($temp){$this->imbd = $temp; }

    function getYear(){return $this->year;} 
    function setYear($temp){$this->year = $temp; }

    function getDate(){return $this->date;} 
    function setDate($temp){$this->date = $temp; }

    function getGenre(){return $this->genre;} 
    function setGenre($temp){$this->genre = $temp; }


    function display(){
        //echo "$this->title <br/> Title: $this->picture <br/> Picture: $this->director <br/> Director: $this->mainActor <br/> Main Actor: $this->imbd <br/> IMBD: $this->year <br/> Year: $this->date <br/> Date:  $this->genre <br/> Genre: ";
        echo "<th>";
            echo "<img src=".$this->picture."><br/>";
            echo "<h1>".$this->title." (".$this->year.")</h1><br/>";
            echo "Director: ".$this->director."<br/>";
            echo "Main Actor / Actress: ".$this->mainActor."<br/>";
            echo "Genre: ".$this->genre."<br/>";
        echo "</th>";
    }


    function __construct() {
        $parameters = func_get_args(); 
        if (count($parameters) == 8 ){

            $this->title = $parameters[0]; 
            $this->picture = $parameters[1];
            $this->director = $parameters[2];
            $this->mainActor = $parameters[3];
            $this->imbd = $parameters[4]; 
            $this->year = $parameters[5]; 
            $this->date = $parameters[6];  
            $this->genre = $parameters[7];

        } else {
            //default
            $this->title = ""; 
            $this->picture = "";
            $this->director = ""; 
            $this->mainActor = ""; 
            $this->imbd = ""; 
            $this->year = ""; 
            $this->date = "";  
            $this->genre = "";
        }
    }

    function __destruct() {

    }


}


?>