<?php 
    include("Movie.php"); 
    

    if (file_exists("fav_movies.xml") ) {
        $myFile = fopen("fav_movies.xml", "r");
        $data = fread($myFile, filesize("fav_movies.xml"));
        fclose($myFile); 

        echo "<style>table, th, td { margin:24; border: 1px solid black;} </style>";

        $xml = simplexml_load_file("fav_movies.xml");

        $tempT = "";
        $tempP = "";
        $tempD = "";
        $tempMA = "";
        $tempI = "";
        $tempY = "";
        $tempDate = "";
        $tempG = "";

        $movie_data = array();

        foreach($xml->movie as $movie) {
            $tempT = $movie->Title;
                        
            $tempP = $movie->Picture;
            $tempD = $movie->Director;
            $tempMA = $movie->MainActor;
            $tempI = $movie->IMBD;
            $tempY = $moive->Year;
           
            $tempDate = $moive->Date;
            $tempG = $movie->Genre;

            $tempMovie = new Movie ($tempT, $tempP, $tempD, $tempMA, $tempI, $tempY, $tempDate, $tempG);

            array_push($movie_data, $tempMovie);
            
        }

        echo "<div>";
        
            echo "<table class='table'>";
            $counter = 1;

                echo "<tr>";

                    foreach($movie_data as $movie) {

                        $movie->display();

                        if($counter % 3 == 0) { echo "</tr>"; echo "<tr>"; $counter = 0   ;}
                        $counter++;
                    }
                echo "</tr>";
            echo "</table>";
        echo "</div>";


    } else {
        echo "File not Found"; 
    }

?>
