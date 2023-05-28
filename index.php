<?php

require_once __DIR__ . '/models/accessori.php';
require_once __DIR__ . '/models/food.php';
require_once __DIR__ . '/models/toy.php';
require_once __DIR__ . '/models/category.php';

require_once __DIR__ . '/Db/db.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <title>Pet Shop</title>
</head>

<body>
  <div class="container my-5">
    <h1 class="text-center my-3">Pet Shop</h1>

    <div class="row ">

      <?php foreach ($products as $product) : ?>
      <div class="col-4 p-2">
        <div class="card" style="width: 18rem;">
          <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"><i class="<?php echo $product->getCategory()->icon?>"></i>
              <?php echo $product->getCategory()->name ?> </p>
            <h5 class="card-title"><?php echo $product->getName() ?></h5>
            <p class="card-text"><?php echo $product->getPrice() ?></p>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>

</html>