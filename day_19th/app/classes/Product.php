<?php


namespace App\classes;


class Product
{
    public $porducts;
    public $result =[];
    public function getAllProduct()
    {
        return[
            0=>[
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'Bed Sheet',
                'price'         => 18200,
                'img'           =>'5.jpg',
            ],
            1=>[
                'id'            => 2,
                'category_id'   => 1,
                'name'          => 'Fancy Bed sheet',
                'price'         => 28200,
                'img'           =>'cupple_dress2.jpg',
            ],
            2=>[
                'id'            => 3,
                'category_id'   => 1,
                'name'          => 'Bed sheet',
                'price'         => 1800,
                'img'           =>'3.jpg',
            ],
            3=>[
                'id'            => 4,
                'category_id'   => 1,
                'name'          => 'Bed Sheed',
                'price'         => 13000,
                'img'           =>'cuppleDress.jpg',

            ],
            4=>[
                'id'           => 5,
                'category_id'  => 5,
                'name'         => 'Digital Watch',
                'price'        => 850,
                'img'          =>'watch.jpg',
            ],
            5=>[
                'id'           => 5,
                'category_id'  => 5,
                'name'         => 'Digital Xspo ',
                'price'        => 780,
                'img'          =>'watch2.jpg',
            ],
            6=>[
                'id'           => 5,
                'category_id'  => 5,
                'name'         => 'Digital Tskio',
                'price'        => 890,
                'img'          =>'watch3.jpg',
            ],
            7=>[
                'id'           => 5,
                'category_id'  => 5,
                'name'         => 'Addidas',
                'price'        => 1400,
                'img'          =>'watch4.jpg',
            ],
            8=>[
                'id'            => 4,
                'category_id'   => 4,
                'name'          => 'Txiox Shoes',
                'price'         => 1300,
                'img'           =>'shoes2.jpg',
            ],
            9=>[
                'id'            => 4,
                'category_id'   => 4,
                'name'          => 'kisxo Shoes',
                'price'         => 1840,
                'img'           =>'shoes3.jpg',
            ],
            10=>[
                'id'            => 4,
                'category_id'   => 4,
                'name'          => 'Piko Shoes',
                'price'         => 1250,
                'img'           =>'shoes4.jpg',
            ],
            11=>[
                'id'            => 3,
                'category_id'   => 3,
                'name'          => 'Jamdani Shari',
                'price'         =>3550,
                'img'           =>'jamdaniShari2.jpg',
            ],
            12=>[
                'id'            => 3,
                'category_id'   => 3,
                'name'          => 'Jamdani Shari Slik',
                'price'         =>4544,
                'img'           =>'jamdaniShari.jpg',
            ],
            13=>[
                'id'            => 3,
                'category_id'   => 3,
                'name'          => 'Cuttton Suti',
                'price'         =>1800,
                'img'           =>'jamdaniShari3.jpg',
            ],
            14=>[
                'id'            => 2,
                'category_id'   => 2,
                'name'          => 'Fancy Salwar Suit',
                'price'         => 490,
                'img'           =>'selour_kamiz.jpg',
            ],
            15=>[
                'id'            => 2,
                'category_id'   => 2,
                'name'          => 'Full Salwar Suit',
                'price'         => 650,
                'img'           =>'selowarkamiz.jpg',
            ],
            16=>[
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'Full cupple Dress Red',
                'price'         => 6700,
                'img'           =>'cupple_dress2.jpg',
            ],
            17=>[
                'id'            => 1,
                'category_id'   => 1,
                'name'          => 'Full cupple Dress',
                'price'         => 7200,
                'img'           =>'cuppleDress.jpg',
            ],
            17=>[
                'id'            => 6,
                'category_id'   => 6,
                'name'          => 'Bed Sheet',
                'price'         => 650,
                'img'           =>'bed.jpg',
            ],
            18=>[
                'id'            => 6,
                'category_id'   => 6,
                'name'          => 'Bed Sheet',
                'price'         => 980,
                'img'           =>'bedsheet1.jpg',
            ],
            19=>[
                'id'            => 6,
                'category_id'   => 6,
                'name'          => 'Bed Sheet',
                'price'         => 1350,
                'img'           =>'bedsheet.jpg',
            ],
            20=>[
                'id'            => 6,
                'category_id'   => 6,
                'name'          => 'Bed Sheet',
                'price'         => 550,
                'img'           =>'bedsheet2.jpg',
            ],
        ];
    }



    public function getProductByCategoryID($categoryId)
    {
        $this->porducts = $this->getAllProduct();
        foreach ($this->porducts as $product)
        {
            if($product['category_id'] == $categoryId)
            {
                array_push($this->result, $product);
            }
        }
        return $this->result;
    }
}