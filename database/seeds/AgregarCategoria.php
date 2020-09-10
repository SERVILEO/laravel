<?php

use Illuminate\Database\Seeder;

class AgregarCategoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB :: table ( 'categoria' ) -> delete ();
        DB :: table ( 'categoria' ) -> insert ([
            
            [
                'c_Nombre' => 'Abarrotes',
                'c_Descripcion' => 'Todo tipo de abarrotes para su hogar',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Bebidas',
                'c_Descripcion' => 'Bebidas de todas las marcas y sabores',
                'c_status' => '1'
            ],
       
            [
                'c_Nombre' => 'Carnes',
                'c_Descripcion' => 'Carnes frescas y al mejor precio',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Frutas',
                'c_Descripcion' => 'Frutas frescas directamente desde el campo',
                'c_status' => '1'
            ],

            [
                'c_Nombre' => 'Golosinas',
                'c_Descripcion' => 'Caramelos para los pequeños',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Higiene',
                'c_Descripcion' => 'Todo tipo de productos para la higiene de su hogar',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Lacteos',
                'c_Descripcion' => 'Encontraras lacteos de todas las marcas y precios en promocion',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Lavanderia',
                'c_Descripcion' => 'Todo lo que necesita para la limpieza de su ropa',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Panaderia',
                'c_Descripcion' => 'Panaderia y pasteleria en general',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Pescados',
                'c_Descripcion' => 'Pescados y mariscos frescos',
                'c_status' => '1'
            ],
            [
                'c_Nombre' => 'Vegetales',
                'c_Descripcion' => 'Vegetales y verduras frescas',
                'c_status' => '1'
            ]

           ]);


    }
}
