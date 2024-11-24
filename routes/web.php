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

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/agregarDirecciones', function () {
    return view('agregarDirecciones');
});

Route::get('/Direcciones', function () {
    return view('Direcciones');
});

Route::get('/ayuda', function () {
    return view('ayuda');
});

Route::get('/beneficiarios', function () {
    return view('beneficiarios');
});

Route::get('/configMiCuenta', function () {
    return view('configMiCuenta');
});

Route::get('/datosPersonales', function () {
    return view('datosPersonales');
});

Route::get('/faqCompras', function () {
    return view('faqCompras');
});

Route::get('/faqVentas', function () {
    return view('faqVentas');
});

Route::get('/historialNavegacion', function () {
    return view('historialNavegacion');
});

Route::get('/infoPersonal', function () {
    return view('infoPersonal');
});

Route::get('/mas-vendidos', function () {
    return view('mas-vendidos');
});

Route::get('/meliplus', function () {
    return view('meliPlus');
});

Route::get('/mercadoplay', function () {
    return view('mercadoPlay');
});

Route::get('/misCompras', function () {
    return view('misCompras');
});

Route::get('/perfil-de-usuario', function () {
    return view('perfil-de-usuario');
});

Route::get('/publicar', function () {
    return view('publicar');
});

Route::get('/SeccionSeguridad', function () {
    return view('SeccionSeguridad');
});

Route::get('/seguridadAcceso', function () {
    return view('seguridadAcceso');
});

Route::get('/tarjetasGuardadas', function () {
    return view('tarjetasGuardadas');
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

Route::get('/favoritos', function () {
    return view('favoritos');
});