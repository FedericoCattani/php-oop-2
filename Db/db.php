<?php

$categories = [
  'gatto' => new Category('Gatto', 'fa-solid fa-cat'),
  'cane' => new Category('Cane', 'fa-solid fa-dog'),
  'pesce' => new Category('Pesce', 'fa-solid fa-fish'),
  'uccello' => new Category('Uccello', 'fa-solid fa-dove'),
];


$products = [
  new Food('Royal Canin Mini Adult', 43.99, 'immagine', $categories['cane'], '545g', ['prosciutto', 'riso']),

  new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 44.99, 'immagine', $categories['cane'], '500g', ['manzo', 'cereali']),

  new Food('Almo Nature Cat Daily Lattina', 34.99, 'immagine', $categories['gatto'], '400g', ['prosciutto', 'tonno', 'pollo']),

  new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'immagine', $categories['pesce'], '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']),

  new Accessory('Voliera Wilma in legno', 184.99, 'immagine', $categories['uccello'], 'Legno', 'M: L 83 x P 67 x H 153 cm'),

  new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'immagine', $categories['pesce'], 'Materiale espanso', 'ND'),

  new Toy('Kong Classic', 13.49, 'immagine', $categories['cane'], 'Galleggia e rimbalza', '8,5cm x 10cm'),

  new Toy('Topini di peluche Trixie', 4.99, 'immagine', $categories['gatto'], 'Morbido con codina in corda', '8,5cm x 10cm'),
];
