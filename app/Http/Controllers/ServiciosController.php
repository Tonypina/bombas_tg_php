<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{

    public function index(){
        return view('servicios');
    }

    public function show($type, $service){
        $service = $this->render_view($service);

        switch($type){
            case 'VRM':
                return view('services.vrm', ['service' => $service]);
            
            case 'Otros':
                return view('services.otros', ['service' => $service]);
            
            default:
                abort(404);
                break;
        }
    }

    private function render_view($service){
        switch($service){
            case 'equipo-de-bombeo':
                return [1, 'Equipo de bomeo'];

            case 'sellos-mecanicos':
                return [2, 'Sellos Mecánicos'];

            case 'motores':
                return [3, 'Motores Eléctricos'];
            
            case 'asesoria-y-servicios':
                return [4, 'Asesoría y servicios en sistemas de bombeo'];

            case 'servicios-y-maquinados-industriales':
                return [5, 'Servicios y maquinados industriales'];

            default:
                return null;
        }
    }
}
