<?php


namespace App\classes;


class Brand
{
  public function getAllBrand()
  {
      return [
          0 => [
              'id'           => 1,
              'name'         => 'Waltone',

          ],
          1 => [
              'id'           => 2,
              'name'         => 'Zara',
          ],
          2 => [
              'id'           => 3,
              'name'         => 'twik',
          ],
          3 => [
              'id'           => 4,
              'name'         => 'Navana',
          ],
      ];
  }
}