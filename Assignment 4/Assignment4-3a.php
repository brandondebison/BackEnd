<?php

// this is stating that it is xml 
$txt = "<?xml version=\"1.0\" ?>\n"; 

$txt .= "<catalog>\n";

//First Movie
$txt .="<movie id =\"mv1\"><br/>
    <Title>Iron Man</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/7/70/Ironmanposter.JPG </Picture> 
    <Director>Jon Favreau</Director>
    <MainActor>Robert Downey Jr. </MainActor> 
    <IMBD>https://www.imdb.com/title/tt0371746/</IMBD> 
    <Year>2008</Year> 
    <Date>2 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Second Movie
$txt .="<movie id =\"mv2\"><br/>
    <Title>Iron Man 2</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/e/ed/Iron_Man_2_poster.jpg </Picture> 
    <Director>Jon Favreau</Director>
    <MainActor>Robert Downey Jr. </MainActor> 
    <IMBD>https://www.imdb.com/title/tt1228705/</IMBD> 
    <Year>2010</Year> 
    <Date>7 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Third Movie
$txt .="<movie id =\"mv3\"><br/>
    <Title>Avengers</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/f/f9/TheAvengers2012Poster.jpg </Picture> 
    <Director>Joss Whedon</Director>
    <MainActor>Robert Downey Jr., Chris Evans Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård, Samuel L. Jackson</MainActor>
    <IMBD>https://www.imdb.com/title/tt0848228/</IMBD> 
    <Year>2012</Year> 
    <Date>4 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Fourth Movie
$txt .="<movie id =\"mv4\"><br/>
    <Title>Iron Man 3</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/d/d5/Iron_Man_3_theatrical_poster.jpg</Picture> 
    <Director>Shane Black</Director>
    <MainActor>Robert Downey Jr. </MainActor> 
    <IMBD>hhttps://www.imdb.com/title/tt1300854/</IMBD> 
    <Year>2013</Year> 
    <Date>3 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Fifth Movie
$txt .="<movie id =\"mv5\"><br/>
    <Title>Avengers: Age of Ultron</Title>
    <Picture>https://upload.wikimedia.org/wikipedia/en/f/ff/Avengers_Age_of_Ultron_poster.jpg</Picture> 
    <Director>Joss Whedon</Director>
    <MainActor>Robert Downey Jr., Chris Evans Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård, Samuel L. Jackson</MainActor>
    <IMBD> https://www.imdb.com/title/tt2395427/</IMBD> 
    <Year>2015</Year> 
    <Date>1 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n"; 

//Sixth Movie
$txt .="<movie id =\"mv6\"><br/>
    <Title>Avengers: Infinity War</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/4/4d/Avengers_Infinity_War_poster.jpg</Picture> 
    <Director>Anthony Russo, Joe Russo</Director>
    <MainActor>Robert Downey Jr., Chris Evans Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård, Samuel L. Jackson</MainActor>
    <IMBD>https://www.imdb.com/title/tt4154756/</IMBD> 
    <Year>2018</Year> 
    <Date>27 April</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n"; 

//Seventh Movie
$txt .="<movie id =\"mv7\"><br/>
    <Title>Avengers: Endgame</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/0/0d/Avengers_Endgame_poster.jpg </Picture> 
    <Director>Anthony Russo, Joe Russo</Director>
    <MainActor>Robert Downey Jr., Chris Evans Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård, Samuel L. Jackson</MainActor>
    <IMBD>https://www.imdb.com/title/tt4154796/</IMBD> 
    <Year>2019</Year> 
    <Date>22 April</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Eighth Movie
$txt .="<movie id =\"mv8\"><br/>
    <Title>Spider-Man: Homecoming</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/f/f9/Spider-Man_Homecoming_poster.jpg </Picture> 
    <Director>Jon Watts</Director>
    <MainActor>Tom Holland </MainActor> 
    <IMBD>https://www.imdb.com/title/tt2250912/</IMBD> 
    <Year>2017</Year> 
    <Date>7 July</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Ninth Movie
$txt .="<movie id =\"mv9\"><br/>
    <Title>Spider-Man: Far From Home</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/b/bd/Spider-Man_Far_From_Home_poster.jpg</Picture> 
    <Director>Jon Watts</Director>
    <MainActor>Tom Holland </MainActor> 
    <IMBD>https://www.imdb.com/title/tt6320628/</IMBD> 
    <Year>2019</Year> 
    <Date>2 July</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

//Tenth Movie
$txt .="<movie id =\"mv10\"><br/>
    <Title>Captian America Civil War</Title>
    <Picture> https://upload.wikimedia.org/wikipedia/en/5/53/Captain_America_Civil_War_poster.jpg</Picture> 
    <Director>Anthony Russo, Joe Russo</Director>
    <MainActor>Robert Downey Jr., Chris Evans Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Tom Hiddleston, Clark Gregg, Cobie Smulders, Stellan Skarsgård, Samuel L. Jackson</MainActor> 
    <IMBD>https://www.imdb.com/title/tt3498820/</IMBD> 
    <Year>2016</Year> 
    <Date>6 May</Date> 
    <Genre>Action, Adventure, Sci-Fi</Genre> 
</movie>\n";  

$txt .= "</catalog>\n"; 


$fav_movies =fopen("fav_movies.xml", "w");
fwrite($fav_movies, $txt);
fclose($fav_movies);  
echo "XML Compeleted";
      

    ?>  
   