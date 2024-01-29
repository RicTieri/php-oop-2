<?php
include_once __DIR__ . '/models/Product.php';
include_once __DIR__ . '/models/Toy.php';
include_once __DIR__ . '/models/Food.php';
include_once __DIR__ . '/models/Kennel.php';
include_once __DIR__ . '/models/Category.php';
include_once __DIR__ . '/db.php';

$productList = [];

foreach($products as $product){
  $num = rand(0, 100);
  if($product['type']=='cibo'){
    $item = new Product($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $product['ingredients'], $product['fats'], $product['carbohydrates'], $product['proteins']);
  } elseif ($product['type'] == 'gioco') {
    $item = new Product($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $product['material'], $product['size']);
  } elseif ($product['type'] == 'cuccia'){
    $item = new Product($product['name'], $product['price'], $product['availability'], new Category ($product['category']), $product['description'], $product['quantity_available'], "https://picsum.photos/600/400?random={$num}", $product['dimensions']['length'], $product['dimensions']['width'], $product['dimensions']['height']);
  }

  $productList[] = $item;
}
?>

<?php foreach($productList as $product){ ?>
  <div class="col-4 px-3 py-4 d-flex">
    <div class="card align-stretch justify-content-evenly shadow border-0">
    <img src="<?php echo $product->imageUrl ?>" class="card-img-top shadow" alt="<?php echo $product->name ?>">
      <div class="card-body text-center d-flex flex-column justify-content-between">
        <h5 class="card-title"><?php echo $product->name?></h5>
        <p class="card-text">Prezzo: <?php echo $product->price?> &euro;</p>
        <p class="card-text">Categoria: <?php echo $product->category->name?></p>
        <p class="card-text"><?php echo $product->description?></p>
      </div>
    </div>
  </div>
<?php } ?>