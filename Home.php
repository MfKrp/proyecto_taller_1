<?php
namespace App\Controllers;
class Home extends BaseController
{
    
    public function quienes_somos() 
    {
        $data['titulo'] = 'quienes_somos';
        echo view('principal_proyect/principal.php', $data);
        echo view('principal_proyect/nav.php');
        echo view('principal_proyect/quienes_somos.php');
        echo view('principal_proyect/footer.php');
    }

    public function principal()
    {
        $data['titulo'] = 'principal';
        echo view('principal_proyect/principal.php');
        echo view('principal_proyect/nav.php');
        echo view('principal_proyect/seccion_principal.php');
        echo view('principal_proyect/footer.php');
    }
    
    //FUNCION PRINCIPAL DE EMERGENCIA SI NO FUNCIONA EL ENRUTAMIENTO MODULAR
    /*public function index()
    {
        return view('principal_proyect/principal.php')
        .view('principal_proyect/nav.php')
        .view('principal_proyect/quienes_somos.php')
        .view('principal_proyect/seccion_principal.php')
        .view('principal_proyect/footer.php');
    }*/
}
