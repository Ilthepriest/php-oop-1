<?php
class Movie {
    public $titolo;
    public $genere;
    public $visibility;
    public $lingua;
    public $image;

    function __construct($_nomeFilm, $_genere, $linguaFilm, $imageFilm){
        $this->titolo = $_nomeFilm;
        $this->genere = $_genere;
        $this->lingua = $linguaFilm;
        $this->image = $imageFilm;
    }
    public function setVisibility($eta){
        if($eta > 14){
            $this->visibility = "Per tutte le età";
        }
        else{
            $this->visibility = "Vietato ai minori di 14 anni";
        }
    }
    public function getVisibility(){
        return $this-> visibility;
    }
};


$movies = [
    new Movie("Harry Potter la Pietra Filosofale", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original///5VvepiOtW4aJYRnGfPP7IyA58lv.jpg'),
    new Movie("Harry Potter la Camera dei Segreti", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//o8nKMrvRr8MaK7Y7d68IprD9npf.jpg'),
    new Movie("Harry Potter il Prigioniero di Azkaban", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//xTm1NVePaSKAypcPTJEM0tnGh6A.jpg'),
    new Movie("Harry Potter il Calice di Fuoco", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//rZkMtwU1Gx2tyXcmsuFLVoDNwea.jpg'),
    new Movie("Harry Potter L'ordine della Fenice", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//iXg8dcylRbYNREcdU1Y2EGxpxxe.jpg'),
    new Movie("Harry Potter il Principe Mezzo Sangue", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//bJlJBz5CMfoIhj9UNULUzTAj61y.jpg'),
    new Movie("Harry Potter i Doni della Morte Parte 1", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//qvqfg5rnz1JWmT4CaJIeAA1EKI3.jpg'),
    new Movie("Harry Potter i Doni della Morte Parte 2", "Fantasy", "Inglese", 'https://image.tmdb.org/t/p/original//xNCCG9bHted49BYFUlTkJq1sxbB.jpg')
];

// $filmUno =new Movie("Wall street", "Drammatico", "Inglese");
// $filmUno->setVisibility(54);
// $filmDue = new Movie("Batman", "Fantasy", "Italiano");
// $filmDue->setVisibility(20);
// $filmTre = new Movie("Scream", "Horror", "Giapponese");
// $filmTre->setVisibility(10);
// $visibility_filmTre = $filmTre->getVisibility();
// var_dump ($filmUno, $filmDue, $filmTre);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row row-cols-4 gy-4">
            <?php foreach($movies as $movie) :?>
                <div class="col">
                    <div class="card h-100 text-center">
                        <img src="<?php echo $movie->image ?>" alt="">
                        <h1><?php echo $movie->titolo ?></h1>
                        <p><?php echo $movie->genere ?></p>
                        <small><?php echo $movie->lingua ?></small>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


</body>
</html>