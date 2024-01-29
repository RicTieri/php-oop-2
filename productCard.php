<?php
include_once __DIR__ . '/models/Movie.php';
include_once __DIR__ . '/models/Genre.php';
include_once __DIR__ . '/db.php';

$movieList = [];

foreach($movies as $movie){
  $num = rand(0, 100);
  $item = new Movie($movie['title'], $movie['year'], new Genre($movie['genre'][0]), $movie['description'], $movie['duration'], "https://picsum.photos/600/400?random={$num}");
  $movieList[] = $item;
}
?>

<?php foreach($movieList as $movie){ ?>
  <div class="col-4 px-3 py-4 d-flex">
    <div class="card align-stretch justify-content-evenly shadow border-0">
    <img src="<?php echo $movie->imageUrl ?>" class="card-img-top shadow" alt="<?php echo $movie->title ?>">
      <div class="card-body text-center d-flex flex-column justify-content-between">
        <h5 class="card-title"><?php echo $movie->title?></h5>
        <p class="card-text"><?php echo $movie->year?></p>
        <p class="card-text"><?php echo $movie->genre->firstGenre?></p>
        <p class="card-text"><?php echo $movie->description?></p>
        <p class="card-text"><?php echo $movie->getDuration()?></p>
        <button class="btn btn-primary align-self-center shadow">&#x25B7; Play</button>
      </div>
    </div>
  </div>
<?php } ?>