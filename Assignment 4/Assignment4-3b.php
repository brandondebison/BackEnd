<?php 

    

    if (file_exists("fav_movies.xml") ) {
        $myFile = fopen("fav_movies.xml", "r");
        $data = fread($myFile, filesize("fav_movies.xml"));
        fclose($myFile); 

        echo "<style>table, th, td { margin:24; border: 1px solid black;} </style>";

        $xml = simplexml_load_file("fav_movies.xml");
        echo "<div>";
        
            echo "<table class='table'>";
            $counter = 1;

                echo "<tr>";
                    foreach($xml->movie as $moive) {
                        
                        //echo $counter % 3;
                            
                        echo "<th>";
                            echo "<img src='$moive->Picture'><br/>";
                            echo "<h1>".$moive->Title." (".$moive->Year.")</h1><br/>";
                            //echo "<h1>Year: ".$moive->Year."</h1><br/>";
                            echo "Director: ".$moive->Director."<br/>";
                            echo "Main Actor / Actress: ".$moive->MainActor."<br/>";
                            echo "Genre: ".$moive->Genre."<br/>";
                        echo "</th>";
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
