<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Login');
});


Route::get('/perfil', function () {
    return view('VisualizarPerfil');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/direcciones', function () {
    return view('DireccionesGuardadas');
});

Route::get('/registrartarjeta', function () {
    return view('AgregarTarjeta');
});

Route::get('/cambiarcorreo', function () {
    return view('CambiarCorreo');
});

Route::get('/cambiarnombre', function () {
    return view('CambiarNombre');
});

Route::get('/cambiarnumero', function () {
    return view('CambiarNumero');
});

Route::get('/desvinculardispositivos', function () {
    return view('DesvincularDispositivos');
});

Route::get('/pantallaverificacion', function () {
    return view('PantallaVerificacion');
});

Route::get('/verificacioncorreo', function () {
    return view('VerificacionCorreo');
});

Route::get('/verificacionsms', function () {
    return view('VerificacionSMS');
});

Route::get('/verificacionwhats', function () {
    return view('VerificacionWhats');
});

Route::get('/vistacarrito', function () {
    return view('VistaCarrito');
});