<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(){
        return view('catalogo');
    }

    public function show($type, $product){
        $product = $this->render_view($product);

        switch($type){
            case 'Bombas':
                return view('products.bombas', ['product' => $product]);
            
            case 'Accesorios':
                return view('products.accesorios', ['product' => $product]);
            
            default:
                abort(404);
                break;
        }
    }

    private function render_view($product){
        switch($product){
            case 'centrifugas':
                return [1, 'Bombas Centrífugas Horizontales'];

            case 'turbina-vertical':
                return [2, 'Bombas Turbina Vertical'];

            case 'sumergibles':
                return [3, 'Bombas Sumergibles'];
            
            case 'sumergibles-inatascables':
                return [4, 'Bombas Sumergibles Inatascables'];

            case 'fluidos-viscosos':
                return [5, 'Bombas para Fluidos Viscosos'];

            case 'electrobombas':
                return [6, 'Electrobombas'];

            case 'manometros':
                return [7, 'Manómetros'];

            case 'valvulas':
                return [8, 'Válvulas'];

            case 'sellos-mecanicos':
                return [9, 'Sellos Mecánicos'];

            default:
                return null;
        }
    }
}
