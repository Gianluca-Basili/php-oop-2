<?php 
require_once __DIR__.'/models/Product.php';
require_once __DIR__.'/models/food.php';
require_once __DIR__.'/models/accessory.php';
require_once __DIR__.'/models/toy.php';

$food = new Food ('test cibo', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 23.99, 'Gatto' , 10 , 'Pollo, Tacchino ');

$products = [
    new Food('Royal Canin Mini Adult', 'https://www.agricolaviola.com/76-large_default/royal-canin-mini-adult-8-kg.jpg', 43.99, 'Cane', 545, 'Prosciutto, Riso'),
    new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso','https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 44.99, 'Cane', 600, 'Manzo Cereali'),
    new Food('Almo Nature Cat Daily Lattina','https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 34.99, 'Gatto', 400, 'Tonno,Pollo,Prosciutto'),
    new Food('Mangime per Pesci Guppy in Fiocchi','https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 2.95, 'Pesce', 30, 'Pesci e sottoprodotti dei pesci, Cereali,Alghe, Lieviti'),
    new Accessory('Voliera Wilma in Legno','https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 184.99, 'Uccello', 'Legno', 'L 83 x P67 x H 153 cm'),
    new Accessory('Cartucce Filtranti per Filtro EasyCrystal','https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 2.29, 'Pesce', 'ND','Materiale Espanse'),
    new toy('Kong Classic','https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg',13.49, 'Cane', '8.5 cm x 10 cm', 'Galleggia e rimbalza', ''),
    new toy('Topini di peluche Trixie','https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg',4.99, 'Gatto', '8.5 cm x 10 cm', 'morbido con coda in corda'),

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <header class="bg-dark mb-5 p-5 text-white text-center">
        <h1>Boolshop</h1>
    </header>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product ): ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $product ->image; ?>">
                    <div class="card-body">
                        <div class="card-title"><h4><?php echo $product->name; ?></h4></div>
                        <p class="card-text">
                           <?php echo $product -> category; ?>
                        </p>
                        <p class="card-text">
                           prezzo: €<?php echo $product -> price; ?>
                        </p>
                        <?php if(get_class($product) === 'Food'){ ?>
                        <p class="card-text">
                           peso:<?php echo $product -> weight.'g'; ?>
                        </p>
                        <p class="card-text">
                          ingredienti: <?php echo $product -> ingredients; ?>
                        </p>
                        <?php } ?>
                        <?php if(get_class($product) === 'Toy'){ ?>
                        <p class="card-text">
                            caratteristiche:<?php echo $product ->features; ?>
                        </p>
                        <p class="card-text">
                            Dimensioni: <?php echo $product ->size; ?>
                        </p>
                        <?php } ?>
                        <?php if(get_class($product) === 'Accessory'){ ?>
                        <p class="card-text">
                            materiali:<?php echo $product -> materials; ?>
                        </p>
                        <p class="card-text">
                         Dimensioni: <?php echo $product ->size; ?>
                        </p>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
