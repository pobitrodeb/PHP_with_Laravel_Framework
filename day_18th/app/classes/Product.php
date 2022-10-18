<?php


namespace App\classes;


class Product
{
    public function getAllProduct()
    {
        return[
          0 => [
              'id' => 1,
              'name' => 'New T shirt ',
              'price' => 245,
              'image' => 'services1.jpg'
          ],
          1 => [
              'id' => 2,
              'name' => 'New T shirt Value ',
              'price' => 2545,
              'image' => 'mordern  t shirt.jpg'
          ],
          2 => [
              'id' => 3,
              'name' => 'New T shirt 3',
              'price' => 2453,
              'image' => 'services1.jpg'
          ],
            3 => [
              'id' => 3,
              'name' => 'New T shirt 3',
              'price' => 2453,
              'image' => 'services1.jpg'
          ],
        ];
    }
}