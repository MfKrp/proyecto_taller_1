<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('principal_proyect/principal.html')
        .view('principal_proyect/nav.html')
        .view('principal_proyect/quienes_somos.html')
        .view('principal_proyect/seccion_principal.html')
        .view('principal_proyect/footer.html');
    }
}
