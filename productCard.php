<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Toy.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Kennel.php';
include_once __DIR__ . '/models/Category.php';
include_once __DIR__ . '/db.php';

$productList = [];
$sales = 100;

foreach($products as $product){
  $num = rand(0, 100);
  if($product['type']=='cibo'){
    $item = new Food($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $sales, $product['ingredients'], $product['fats'], $product['carbohydrates'], $product['proteins']);
  } elseif ($product['type'] == 'gioco') {
    $item = new Toy($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $sales, $product['material'], $product['size']);
  } elseif ($product['type'] == 'cuccia'){
    $item = new Kennel($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $sales, $product['dimensions']['length'], $product['dimensions']['width'], $product['dimensions']['height']);
  }

  $productList[] = $item;
}
?>

<?php foreach($productList as $product){ ?>
  <div class="col-4 px-3 py-4 d-flex">
    <div class="card align-stretch justify-content-between shadow border-0">
    <img src="<?php echo $product->imageUrl ?>" class="card-img-top shadow" alt="<?php echo $product->name ?>">
      <div class="card-body d-flex flex-column justify-content-start">
        <h5 class="card-title  text-center"><?php echo $product->name?></h5>
        <p class="card-text  text-center"><?php echo $product->category->name?></p>
        <h6 class="card-text  text-center"><?php 
          if($product instanceof Food){
            echo 'Alimenti';
          } elseif ($product instanceof Toy){
            echo 'Giocattoli';
          } else{
            echo 'Arredamento';
          }
        ?></h6>
        <p class="card-text"><?php echo $product->description?></p>
        <p class="card-text"><?php echo $product->getInfo()?></p>
      </div>
      <h6 class="card-text text-center justify-self-end pb-5">Prezzo: <?php echo $product->getPrice()?> &euro;</h6>
    </div>
  </div>
<?php } ?>