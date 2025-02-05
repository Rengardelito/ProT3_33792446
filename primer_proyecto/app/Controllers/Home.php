<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
   {
       $data['titulo']='principal';    
       echo view('front/head_view',$data);
       echo view('front/navbar_view');
       echo view('front/principal');
       echo view('front/footer_view');
   }

   public function QuienesSomos()
   {
       $data['titulo']='quienes somos';    
       echo view('front/head_view',$data);
       echo view('front/navbar_view');
       echo view('front/quienesSomos');
       echo view('front/footer_view');
   }

  /* public function acerca_de()
   {
       $data['titulo']='acerca de';    
       echo view('front/head_view',$data);
       echo view('front/navbar_view');
       echo view('front/acerca_de');
       echo view('front/footer_view');
   }*/
   public function registro()
   {
       $data['titulo']='Registro';    
       echo view('front/head_view',$data);
       echo view('front/navbar_view');
       echo view('back/usuario/registro');
       echo view('front/footer_view');
   }
   public function Login()
   {
       $data['titulo']='Login';    
       echo view('front/head_view',$data);
       echo view('front/navbar_view');
       echo view('back/usuario/Login');
       echo view('front/footer_view');
   }
   }