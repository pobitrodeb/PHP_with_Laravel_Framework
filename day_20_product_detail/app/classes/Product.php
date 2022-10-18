<?php


namespace App\classes;


class Product
{
    public $products;
    public $result = [];
public function getAllProduct()
{
    return [
        0 =>[
            'id' => 1,
            'category_id' => 1,
            'brand_id' => 1,
            'name' => 'Fridge',
            'price' => 55400,
            'image' => 'waltone_frize.jpg',
            'description' => 'Waltons best services',
        ],
        1 =>[
            'id' => 2,
            'category_id' => 1,
            'brand_id' => 1,
            'name' => 'Washing Mechine ',
            'price' => 5200,
            'image' => 'waltone_washing_mechine.jpg',
            'description' => 'Waltons best services',
        ],
        2 =>[
            'id' => 3,
            'category_id' => 2,
            'brand_id' => 2,
            'name' => 'T-shirt',
            'price' => 650,
            'image' => '1.jpg',
            'description' => 'The best t-shirt',
        ],
        3 =>[
            'id' => 4,
            'category_id' => 2,
            'brand_id' => 2,
            'name' => 'Formal Shirt',
            'price' => 780,
            'image' => 'formal_tshirt.jpg',
            'description' => 'Formarl Shirt',
        ],
        4 =>[
            'id' => 5,
            'category_id' => 3,
            'brand_id' => 3,
            'name' => 'Cat for kids',
            'price' => 450,
            'image' => 'baby1.jpg',
            'description' => 'kids t-shirt',
        ],
        5 =>[
            'id' => 6,
            'category_id' => 3,
            'brand_id' => 3,
            'name' => 'kids Jings Pent',
            'price' => 765,
            'image' => '41eBG.jpg',
            'description' => 'Kids jings pnet ',
        ],
        6 =>[
            'id' => 7,
            'category_id' => 4,
            'brand_id' => 4,
            'name' => 'kids Jings Pent',
            'price' => 405,
            'image' => '1.jpg',
            'description' => 'Kids jings pnet ',
        ],
    ];
}

public function getAllProductID($id)
{
    $this->products = $this->getAllProduct();
    foreach ($this->products as $product)
    {
        if ($product['id'] == $id)
        {
            return $product;
        }
    }
}

public function getCategoryProduct($id)
{
    $this->products = $this->getAllProduct();
    foreach ($this->products as $product)
    {
        if($product['category_id']==$id)
        {
            array_push($this->result, $product);
        }
    }
    return $this->result;
}
}

