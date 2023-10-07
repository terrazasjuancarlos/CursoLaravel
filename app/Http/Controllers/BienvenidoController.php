<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "pablo";
        $alumnos =['juan','pablo', 'luis', 'pedro', 'casas'];
        $datos =array(['nombre'=>'ximena','edad'=> 17 ,'turno'=>'vespertino' ],
                      ['nombre'=>'pedro','edad'=> 37 ,'turno'=>'vespertino' ],
                      ['nombre'=>'max','edad'=> 32 ,'turno'=>'vespertino' ],
                      ['nombre'=>'luis','edad'=> 23 ,'turno'=>'vespertino' ],
                      ['nombre'=>'david','edad'=> -1 ,'turno'=>'vespertino' ], );
        return view('bienvenido' , compact('nombre','alumnos', 'datos'));

    }

}



























