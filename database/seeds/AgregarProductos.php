<?php

use Illuminate\Database\Seeder;

class AgregarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB :: table ( 'productos' ) -> delete ();
        DB :: table ( 'productos' ) -> insert ([
            
            //-------------------Abarrotes----------------------//
            
    [
        'p_Nombre'=> 'Aceite (L)',
        'p_Descripcion'=> 'Aceite Primor x 1L',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/aceite/p1.jpg',
        'p_Precio'=>9.50,
        'p_Stock'=>50,
        'p_unidades'=>'L',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Aceituna (500 Gr)',
        'p_Descripcion'=> 'ACEITUNAS NEGRAS A GRANEL CON PEPA',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/aceituna/p1.jpg',
        'p_Precio'=>3.84,
        'p_Stock'=>50,
        'p_unidades'=>'Gr',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      
      [
        'p_Nombre'=> 'ARROZ (Kg)',
        'p_Descripcion'=> ' ARROZ PACASMAYO SACO x 49 Kg',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/arroz/p1.jpg',
        'p_Precio'=>149.50,
        'p_Stock'=>50,
        'p_unidades'=>'Kg',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Avena (Gr)',
        'p_Descripcion'=> 'AVENA 3 OSITOS x 150 Gr ',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/avena/p1.jpg',
        'p_Precio'=>2.56,
        'p_Stock'=>50,
        'p_unidades'=>'Gr',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Azucar (Kg)',
        'p_Descripcion'=> 'AZUCAR RUBIA CASA GRANDE GRANEL x 10 Kg ',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/azucar/p1.jpg',
        'p_Precio'=>29.38,
        'p_Stock'=>50,
        'p_unidades'=>'Kg',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Palillo(Sobre)',
        'p_Descripcion'=> 'PALILLO SIBARITA SOBRE 10Gr x 84 Unidades',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/condimentos/p1.jpg',
        'p_Precio'=>23.53,
        'p_Stock'=>50,
        'p_unidades'=>'Unidades',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Fideos(Unidad)',
        'p_Descripcion'=> 'FIDEOS MARCO POLO CANUTO 20 Unidades x 250 Gr',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/fideos/p1.jpg',
        'p_Precio'=>15.87,
        'p_Stock'=>50,
        'p_unidades'=>'Unidades',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Harina(Kg)',
        'p_Descripcion'=> 'HARINA BLANCA FLOR PREPARADA x 1 Kg',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/harina/p1.jpg',
        'p_Precio'=>11.80,
        'p_Stock'=>50,
        'p_unidades'=>'Kg',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Mantequilla(Pote)',
        'p_Descripcion'=> 'MANTEQUILLA GLORIA POTE x 400 Gr',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/mantequilla/p1.jpg',
        'p_Precio'=>16.24,
        'p_Stock'=>50,
        'p_unidades'=>'Unidad',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
      [
        'p_Nombre'=> 'Garbanzos(Kg)',
        'p_Descripcion'=> 'GARBANZOS A GRANEL x 500 Gr',
        'p_UrlImagen'=>'./assets/img/categorias/abarrotes/menestras/p1.jpg',
        'p_Precio'=>5.40,
        'p_Stock'=>50,
        'p_unidades'=>'Gr',
      'p_status'=>'1', 
  'id_categoria'=>1
  ],
  //-------------------Frutas----------------------//
  [
    'p_Nombre'=> 'Manzana(Kg)',
    'p_Descripcion'=> 'MANZANA CHILENA ROJA x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/manzana/p1.jpg',
    'p_Precio'=>7.15,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Ciruela(Kg)',
    'p_Descripcion'=> 'CIRUELA CHILENA x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/ciruela/p1.jpg',
    'p_Precio'=>7.80,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Fresa(Kg)',
    'p_Descripcion'=> 'FRESA FRESCA A GRANEL x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/fresa/p1.jpg',
    'p_Precio'=>15.60,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Mandarina(Kg)',
    'p_Descripcion'=> 'MANDARINA x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/mandarina/p1.jpg',
    'p_Precio'=>3.90,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Platano(Unidades)',
    'p_Descripcion'=> 'PLATANO MANZANO x 3 Unidades',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/platano/p1.jpg',
    'p_Precio'=>1.50,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Uva(Kg)',
    'p_Descripcion'=> 'UVA NEGRA x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/uva/p1.jpg',
    'p_Precio'=>3.25,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Mango(Kg)',
    'p_Descripcion'=> 'MANGO x 1 Kg',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/mango/p1.jpg',
    'p_Precio'=>5.85,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Papaya(Kg)',
    'p_Descripcion'=> 'PAPAYA x 1 Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/papaya/p1.jpg',
    'p_Precio'=>7.80,
    'p_Stock'=>50,
    'p_unidades'=>'und',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Piña(Unidad)',
    'p_Descripcion'=> 'PIÑA GOLDEN x 1 Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/piña/p1.jpg',
    'p_Precio'=>6.50,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  [
    'p_Nombre'=> 'Guanabana(500 Gr)',
    'p_Descripcion'=> 'PULPA DE GUANABANA NATURAL x 500 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/frutas/guanabana/p1.jpg',
    'p_Precio'=>9.56,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>4
  ],
  //-------------------Vegetales----------------------//
  [
    'p_Nombre'=> 'Aji(Gr)',
    'p_Descripcion'=> 'Ají Amarillo x 250 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/aji/p1.jpg',
    'p_Precio'=>1.20,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Vainita(Gr)',
    'p_Descripcion'=> 'Vainita Microondas Paquete de 300 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/vainita/p1.jpg',
    'p_Precio'=>4.89,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Albahaca(Und)',
    'p_Descripcion'=> 'atado de Albahaca ',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/albaca/p1.jpg',
    'p_Precio'=>2.99,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Col China(Und)',
    'p_Descripcion'=> 'Col China Mitad x Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/col/p1.jpg',
    'p_Precio'=>11.99,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Tomate(Gr)',
    'p_Descripcion'=> 'Tomate Italiano Selecto x 500 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/tomate/p1.jpg',
    'p_Precio'=>1.74,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Apio(und)',
    'p_Descripcion'=> 'Apio x Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/apio/p1.jpg',
    'p_Precio'=>2.79,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Brocolo(Gr)',
    'p_Descripcion'=> 'Brócoli x 600 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/brocoli/p1.jpg',
    'p_Precio'=>3.90,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Beterraga(Und)',
    'p_Descripcion'=> 'Beterraga Atado x 4 Unidades',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/beterraga/p1.jpg',
    'p_Precio'=>4.69,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Cebolla(Und)',
    'p_Descripcion'=> 'Cebolla China x Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/cebolla/p1.jpg',
    'p_Precio'=>2.49,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  [
    'p_Nombre'=> 'Lechuga(Und)',
    'p_Descripcion'=> 'Lechuga Americana x Unidad',
    'p_UrlImagen'=>'./assets/img/categorias/vegetales/lechuga/p1.jpg',
    'p_Precio'=>2.99,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>11
  ],
  //-------------------Aguas y Bebidas----------------------//
  [
    'p_Nombre'=> 'Cerveza Corona(Pack)',
    'p_Descripcion'=> 'CERVEZA CORONA x 355 ml. x 6 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/corona/p1.jpg',
    'p_Precio'=>29.12,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Cerveza Cusqueña(Pack)',
    'p_Descripcion'=> 'CERVEZA CUSQUEÑA BOT RED LAGER x 330 ml. Six pack',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/cuzqueña/p1.jpg',
    'p_Precio'=>25.18,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Espumante(Ml)',
    'p_Descripcion'=> 'ESPUMANTE MUMM SEMI SECO x 750 Ml',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/espumante/p1.jpg',
    'p_Precio'=>31.28,
    'p_Stock'=>50,
    'p_unidades'=>'Ml',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Pisco(L)',
    'p_Descripcion'=> 'PISCO SANTIAGO QUEIROLO GALON x 4 L',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/pisco/p1.jpg',
    'p_Precio'=>103.50,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Gaseosa Coca Cola(Pack)',
    'p_Descripcion'=> 'GASEOSA COCA COLA x 1500 ml. x 6 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/cocacola/p1.jpg',
    'p_Precio'=>28.56,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Gaseosa Inka Kola(Pack)',
    'p_Descripcion'=> 'GASEOSA INCA KOLA x 3 Lt. x 4 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/inkacola/p1.jpg',
    'p_Precio'=>40.32,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Gaseosa Fanta(Und)',
    'p_Descripcion'=> 'GASEOSA FANTA UVA EN LATA x 3 unid. x 355 ml.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/gaseosalata/p1.jpg',
    'p_Precio'=>11.33,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> ' Pulpin Durazno(Und)',
    'p_Descripcion'=> 'PULPIN JUGO DURAZNO x 145 ml. x 24 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/pulpin/p1.jpg',
    'p_Precio'=>12.98,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Jugo Gloria(Pack)',
    'p_Descripcion'=> 'JUGOS GLORIA PACK x 12 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/jugo/p1.jpg',
    'p_Precio'=>49.56,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  [
    'p_Nombre'=> 'Tampico(Und)',
    'p_Descripcion'=> 'TAMPICO JUGOS CITRUS PUNCH x 3 Lt. x 4 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/bebidas/tampico/p1.jpg',
    'p_Precio'=>24.50,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>2
  ],
  
  //-------------------Galletas y Golosinas----------------------//
  [
    'p_Nombre'=> 'Cereal(Und)',
    'p_Descripcion'=> 'CEREAL ANGEL COPIX CHOCOLATE x 6 unid. x 55 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/cereal/p1.jpg',
    'p_Precio'=>6.25,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Galletas Picaras(Pack)',
    'p_Descripcion'=> 'GALLETAS PICARAS CHOCOLATE x 240 gr. Six pack',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/picara/p1.jpg',
    'p_Precio'=>5.40,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Wafer Nik(Pack)',
    'p_Descripcion'=> 'WAFERS NIK DE COSTA CHOCOLATE  x 29 gr. Six pack x 12 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/wafer/p1.jpg',
    'p_Precio'=>33.60,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Gomitas Ambroito(Caja)',
    'p_Descripcion'=> 'GOMITAS AMBROSITO  Caja x 12 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/gomitas/p1.jpg',
    'p_Precio'=>6.60,
    'p_Stock'=>50,
    'p_unidades'=>'Caja',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Frunas(Und)',
    'p_Descripcion'=> 'BARRILETE FRUNAS x 18 gr. x 50 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/frunas/p1.jpg',
    'p_Precio'=>5.40,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Caramelo Biagi(Und)',
    'p_Descripcion'=> 'CARAMELO BIAGI CAFE x 100 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/caramelos/p1.jpg',
    'p_Precio'=>6.60,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Galletas Caritas(Pack)',
    'p_Descripcion'=> 'GALLETAS CARITAS Pack x 6 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/galletacaritas/p1.jpg',
    'p_Precio'=>3.12,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Galletas Casino(Und)',
    'p_Descripcion'=> 'GALLETA CASINO SIX PACK COCO x 6 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/casino/p1.jpg',
    'p_Precio'=>4.80,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Chocolate Sublime(Caja)',
    'p_Descripcion'=> 'CHOCOLATE SUBLIME SONRISA NESTLÉ Caja x 20 unid. 40 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/sublime/p1.jpg',
    'p_Precio'=>29.68,
    'p_Stock'=>50,
    'p_unidades'=>'Caja',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  [
    'p_Nombre'=> 'Chiclet Trident(Caja)',
    'p_Descripcion'=> 'CHICLET TRIDENT CITRUSMIX Caja x 18 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/golosinas/Trident/p1.jpg',
    'p_Precio'=>15.60,
    'p_Stock'=>50,
    'p_unidades'=>'Caja',
  'p_status'=>'1', 
  'id_categoria'=>5
  ],
  //-------------------Panaderia----------------------//
  [
    'p_Nombre'=> 'Pan Granos Integral(Gr)',
    'p_Descripcion'=> 'PAN GRANOS INTEGRALES UNION x 540 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/pangranos/p1.jpg',
    'p_Precio'=>10.68,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan de Hamburguesa(Und)',
    'p_Descripcion'=> 'PAN DE HAMBURGUESA BIMBO BIMBOLLO x 8 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panhamburguesa/p1.jpg',
    'p_Precio'=>9.00,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Blanco Mediano(Gr)',
    'p_Descripcion'=> 'PAN BLANCO MEDIANO BIMBO x 480 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panblanco/p1.jpg',
    'p_Precio'=>10.80,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Integral Bimbo(Gr)',
    'p_Descripcion'=> 'PAN INTEGRAL BIMBO x 360 gr. Mediano',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panintegral/p1.jpg',
    'p_Precio'=>7.80,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Pita Integral(Gr)',
    'p_Descripcion'=> 'PAN PITA INTEGRAL BON GIORNO x 600 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panpita/p1.jpg',
    'p_Precio'=>12.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Molido(Kg)',
    'p_Descripcion'=> 'PAN MOLIDO A GRANEL  x 1 Kg.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panmolido/p1.jpg',
    'p_Precio'=>8.40,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Integral Clasico(Gr)',
    'p_Descripcion'=> 'PAN INTEGRAL CLASICO UNION x 495 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panintegralclasico/p1.jpg',
    'p_Precio'=>9.12,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Paneton Donofrio(Gr)',
    'p_Descripcion'=> 'PANETON DONOFRIO BOLSA  x 800 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/paneton/p1.jpg',
    'p_Precio'=>27.73,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan Molde Blanco(Gr)',
    'p_Descripcion'=> 'Pan de Molde Blanco BIMBO, Bolsa 750 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panmolde/p1.jpg',
    'p_Precio'=>9.49,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  [
    'p_Nombre'=> 'Pan de Molde Integral(Gr)',
    'p_Descripcion'=> 'Pan de Molde Integral Multicereal BIMBO, Bolsa 600 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/panaderia/panmoldeintegral/p1.jpg',
    'p_Precio'=>10.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>9
  ],
  //-------------------Lacteos----------------------//
  [
    'p_Nombre'=> 'Yogurt Pasas(L)',
    'p_Descripcion'=> 'YOGURT PASAS Y GUINDONES ALL NATURAL x 1 Lt.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/yogurtpasas/p1.jpg',
    'p_Precio'=>10.62,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Gloria Niños(L)',
    'p_Descripcion'=> 'LECHE GLORIA UHT CAJA NIÑOS 1-5 AÑOS x 1 Lt.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/glorianiños/p1.jpg',
    'p_Precio'=>4.71,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Laive Evaporada(Pack)',
    'p_Descripcion'=> 'LECHE LAIVE EVAPORADA FAMILIA 0 LACTOSA CAJA x 500 gr. Six pack',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/laive/p1.jpg',
    'p_Precio'=>16.80,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Soy Vida(Ml)',
    'p_Descripcion'=> 'LECHE SOY VIDA DE SOYA LATA x 400 ml.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/soyvida/p1.jpg',
    'p_Precio'=>2.76,
    'p_Stock'=>50,
    'p_unidades'=>'Ml',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Gloria Roja(Und)',
    'p_Descripcion'=> 'LECHE GLORIA ROJA LIGHT TARRO CHICO x 170 gr. x 24 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/gloriaroja/p1.jpg',
    'p_Precio'=>41.80,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Anchor Polvo(Gr)',
    'p_Descripcion'=> 'LECHE ANCHOR EN POLVO NESTLÉ x 800 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/anchor/p1.jpg',
    'p_Precio'=>29.90,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Leche Gloria Azul(Gr)',
    'p_Descripcion'=> 'LECHE GLORIA TARRO AZUL GRANDE  x 400 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/gloriazul/p1.jpg',
    'p_Precio'=>3.79,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Yogurt Gloria Durazno(Kg)',
    'p_Descripcion'=> 'YOGURT GLORIA DURAZNO  x 1 Kg.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/yogurt/p1.jpg',
    'p_Precio'=>6.16,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Yogurt Gloria Bebible(Pack)',
    'p_Descripcion'=> 'YOGURT GLORIA BEBIBLE x 185 gr. x 24 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/yogurtbebible/p1.jpg',
    'p_Precio'=>30.10,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  [
    'p_Nombre'=> 'Yogurt Gloria Fresa(Pack)',
    'p_Descripcion'=> 'YOGURT GLORIA PACK FRESA/DURAZNO x 6 unid. x 1 Kg. ',
    'p_UrlImagen'=>'./assets/img/categorias/lacteos/yogurtpack/p1.jpg',
    'p_Precio'=>35.84,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>7
  ],
  //-------------------Carnes y Embutidos----------------------//
  [
    'p_Nombre'=> 'Pathe Razzeto(Und)',
    'p_Descripcion'=> 'PATHE RAZZETO x 1 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/pathe/p1.jpg',
    'p_Precio'=>2.95,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Pollo Entero(Kg)',
    'p_Descripcion'=> 'POLLO ENTERO MERCADO CON MENUDENCIA CHIMÚ x 2.15 Kg. a 2.35 Kg.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/polloentero/p1.jpg',
    'p_Precio'=>22.99,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> '(Kg)',
    'p_Descripcion'=> 'PACK DE PECHUGA ESPECIAL CHIMÚ x 0.56 Kg. a 0.64 Kg.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/packpechuga/p1.jpg',
    'p_Precio'=>17.82,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Pollo Entero Hornear(kg)',
    'p_Descripcion'=> 'POLLO ENTERO PARA HORNEAR CHIMÚ x 1.75 Kg. a 1.95 Kg.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/pollohornear/p1.jpg',
    'p_Precio'=>22.43,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Hot Dog Razzeto(Gr)',
    'p_Descripcion'=> 'HOT DOG RAZZETO x 300 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/hotdog/p1.jpg',
    'p_Precio'=>10.38,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Chorizo Precocido(Gr)',
    'p_Descripcion'=> 'CHORIZO PRECOCIDO COCKTAIL SIN PICANTE RAZZETO x x 200 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/chorizo/p1.jpg',
    'p_Precio'=>7.67,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1',
   'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Hamburguesa de Res(Kg)',
    'p_Descripcion'=> 'Hamburguesa De Res De La Casa',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/hamburguesares/p1.jpg',
    'p_Precio'=>9.00,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Higado de Res(Kg)',
    'p_Descripcion'=> 'Hígado de Res x Kg',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/higadores/p1.jpg',
    'p_Precio'=>10.99,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Espinazo de Pollo(Gr)',
    'p_Descripcion'=> 'Espinazo de Pollo x 500 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/espinazopollo/p1.jpg',
    'p_Precio'=>2.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  [
    'p_Nombre'=> 'Lomito de Pollo(Gr)',
    'p_Descripcion'=> 'Lomito Sasami de Pollo x 50 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/carnes/lomitopollo/p1.jpg',
    'p_Precio'=>12.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>3
  ],
  //-------------------Pescados y Mariscos----------------------//
  [
    'p_Nombre'=> 'Pulpa de Cangrejo(Gr)',
    'p_Descripcion'=> 'Pulpa de Cangrejo BELLS Bolsa 200g',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/cangrejo/p1.jpg',
    'p_Precio'=>25.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Salmon Ahumado(Gr)',
    'p_Descripcion'=> 'Salmón Ahumado SOUTH WIND Bolsa x 100g',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/salmonahumado/p1.jpg',
    'p_Precio'=>20.90,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Pejerrey(Gr)',
    'p_Descripcion'=> 'Pejerrey BELLS Bolsa x 500g',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/pejerrey/p1.jpg',
    'p_Precio'=>15.20,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Filete de Trucha(Gr)',
    'p_Descripcion'=> 'Filete de Trucha Congelado  x 800 gr',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/filetetrucha/p1.jpg',
    'p_Precio'=>29.52,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Perico Pescanova Congelado(Gr)',
    'p_Descripcion'=> 'Perico en Porciones PESCANOVA Congelado Bolsa x 300g',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/perico/p1.jpg',
    'p_Precio'=>9.90,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Filete de Salmon(Gr)',
    'p_Descripcion'=> 'Filete de Salmón Congelado 1 Und. = 1500 gr',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/filetesalmon/p1.jpg',
    'p_Precio'=>97.35,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Trucha Deshuesada en Bolsa(Gr)',
    'p_Descripcion'=> 'Trucha Deshuesada BELLS Bolsa x 600 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/truchabolsa/p1.jpg',
    'p_Precio'=>35.20,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Trucha Deshuesada(Kg)',
    'p_Descripcion'=> 'Trucha Deshuesada x Kg',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/trucha/p1.jpg',
    'p_Precio'=>24.99,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Langostino Crudo Pelado(Gr)',
    'p_Descripcion'=> 'Langostino Crudo Pelado PESCANOVA Bolsa x 300 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/pescados//p1.jpg',
    'p_Precio'=>22.90,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Filete de Tilapia(Kg)',
    'p_Descripcion'=> 'Filete de Tilapia x Kg',
    'p_UrlImagen'=>'./assets/img/categorias/pescados/filetetilapia/p1.jpg',
    'p_Precio'=>13.17,
    'p_Stock'=>50,
    'p_unidades'=>'Kg',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  //-------------------Lavandería----------------------//
  [
    'p_Nombre'=> 'Detergente Ace(Gr)',
    'p_Descripcion'=> 'DETERGENTE ACE x 800 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/ace/p1.jpg',
    'p_Precio'=>7.47,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Jabon Glicerina(Gr)',
    'p_Descripcion'=> 'JABON GLICERINA DERMEX MARACUYA x 100 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/glicerina/p1.jpg',
    'p_Precio'=>3.00,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Lejia Clorox Galon(L)',
    'p_Descripcion'=> 'LEJIA CLOROX TRADICIONAL GALON x 4 Lt.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/lejiagalon/p1.jpg',
    'p_Precio'=>17.25,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Lavavajilla Ayudin (Pote)',
    'p_Descripcion'=> 'LAVAVAJILLA AYUDIN POTE LIMON  x 550 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/ayudin/p1.jpg',
    'p_Precio'=>5.40,
    'p_Stock'=>50,
    'p_unidades'=>'Pote',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Papel Toalla(Und)',
    'p_Descripcion'=> 'PAPEL TOALLA 2 ELITE HOJA ULTRA x 3 rollos x 8 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/papel/p1.jpg',
    'p_Precio'=>46.80,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Suavisante Amor(L)',
    'p_Descripcion'=> 'SUAVIZANTE AMOR GALON LAVANDA x 4 Lt.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/suavisantegalon/p1.jpg',
    'p_Precio'=>29.50,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Detergente Bolivar(Gr)',
    'p_Descripcion'=> 'DETERGENTE BOLIVAR CON SUAVIZANTE x 800 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/bolivar/p1.jpg',
    'p_Precio'=>8.10,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> '(L)',
    'p_Descripcion'=> 'Suavizante Complete Lavanda SUAVITEL Doypack x 1.5 Lt',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/suavitel/p1.jpg',
    'p_Precio'=>15.90,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Ambientador Lavanda(Ml)',
    'p_Descripcion'=> 'Ambientador Pulso Aroma Lavanda Eq + Rpto SAPOLIO Pack 12 Ml',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/ambientador/p1.jpg',
    'p_Precio'=>9.90,
    'p_Stock'=>50,
    'p_unidades'=>'Ml',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  [
    'p_Nombre'=> 'Quitamanchas Sapolio(L)',
    'p_Descripcion'=> 'Quitamanchas Líquido Ropa Color SAPOLIO Envase 1 Lt',
    'p_UrlImagen'=>'./assets/img/categorias/lavanderia/lejia/p1.jpg',
    'p_Precio'=>5.20,
    'p_Stock'=>50,
    'p_unidades'=>'L',
  'p_status'=>'1', 
  'id_categoria'=>10
  ],
  //-------------------Higiene Personal----------------------//
  [
    'p_Nombre'=> 'Talco Johnons(Gr)',
    'p_Descripcion'=> 'TALCO JOHNSONS ORIGINAL x 200 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/talco/p1.jpg',
    'p_Precio'=>16.20,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Cepillo Dental Colgate(Und)',
    'p_Descripcion'=> 'CEPILLO DENTAL COLGATE PREMIER CLEAN x 14 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/cepillo/p1.jpg',
    'p_Precio'=>26.55,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Pasta Dental(Ml)',
    'p_Descripcion'=> 'PASTA DENTAL COLGATE LUMINOUS WHITE x 75 ml.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/pasta/p1.jpg',
    'p_Precio'=>9.52,
    'p_Stock'=>50,
    'p_unidades'=>'Ml',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Jabon Johnsons Crema(Gr)',
    'p_Descripcion'=> 'JABON JOHNSONS CREMA HUMEC ROSADO x 125 gr.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/jaboncillo/p1.jpg',
    'p_Precio'=>3.84,
    'p_Stock'=>50,
    'p_unidades'=>'Gr',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Jabon Aval Liquido (Ml)',
    'p_Descripcion'=> 'JABON AVAL LIQUIDO LAVANDA x 400 ml.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/jabonliquido/p1.jpg',
    'p_Precio'=>6.60,
    'p_Stock'=>50,
    'p_unidades'=>'Ml',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Papel Higienico Elite(Und)',
    'p_Descripcion'=> 'PAPEL HIGIENICO ELITE CELESTE DOBLE HOJA x 24 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/papelhigienico/p1.jpg',
    'p_Precio'=>21.00,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Pañitos Humedos(Und)',
    'p_Descripcion'=> 'WIPES HUGGIES ONE & DONE REFRESH PAÑOTOS HUMEDOS x 184 unid.',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/paños/p1.jpg',
    'p_Precio'=>23.00,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Maquina de Afeitar(Und)',
    'p_Descripcion'=> 'Máquinas Para Afeitar Desechables Pack 7 Und',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/gillette/p1.jpg',
    'p_Precio'=>20.50,
    'p_Stock'=>50,
    'p_unidades'=>'Und',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Jabon Protex Avena(Pack)',
    'p_Descripcion'=> 'Combo Jabon Protex Antibacterial De Avena - PROTEX Pack 6 Und x 110 Gr',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/jaboncilloprotex/p1.jpg',
    'p_Precio'=>12.90,
    'p_Stock'=>50,
    'p_unidades'=>'Pack',
  'p_status'=>'1', 
  'id_categoria'=>6
  ],
  [
    'p_Nombre'=> 'Hisopos Caja(Caja)',
    'p_Descripcion'=> 'Hisopos Caja 300 Und',
    'p_UrlImagen'=>'./assets/img/categorias/higiene/hisopos/p1.jpg',
    'p_Precio'=>8.90,
    'p_Stock'=>50,
    'p_unidades'=>'Caja',
  'p_status'=>'1', 
  'id_categoria'=>6
  ]
  
          ]);


    }
}
