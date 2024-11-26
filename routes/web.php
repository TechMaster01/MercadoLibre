<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
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
})->name('agregardirecciones');

Route::get('/Direcciones', function () {
    return view('Direcciones');
})->name('direcciones');

Route::get('/ayuda', function () {
    return view('ayuda');
})->name('ayuda');

Route::get('/beneficiarios', function () {
    return view('beneficiarios');
})->name('beneficiarios');

Route::get('/configMiCuenta', function () {
    return view('configMiCuenta');
})->name('configmicuenta');

Route::get('/datosPersonales', function () {
    return view('datosPersonales');
})->name('datospersonales');

Route::get('/faqCompras', function () {
    return view('faqCompras');
})->name('faqcompras');

Route::get('/faqVentas', function () {
    return view('faqVentas');
})->name('faqventas');

Route::get('/historialNavegacion', function () {
    return view('historialNavegacion');
})->name('historial');

Route::get('/infoPersonal', function () {
    return view('infoPersonal');
})->name('infoPersonal');

Route::get('/mas-vendidos', function () {
    return view('mas-vendidos');
});

Route::get('/meliplus', function () {
    return view('meliPlus');
})->name('meliplus');

Route::get('/mercadoplay', function () {
    return view('mercadoPlay');
})->name('mercadoplay');

Route::get('/misCompras', function () {
    return view('misCompras');
})->name('miscompras');

/*Route::get('/perfil-de-usuario', function () {
    return view('perfil-de-usuario');
})->name('perfil.usuario');*/

Route::get('/publicar', function () {
    return view('publicar');
})->name('publicar');

Route::get('/SeccionSeguridad', function () {
    return view('SeccionSeguridad');
})->name('seccionseguridad');

Route::get('/seguridadAcceso', function () {
    return view('seguridadAcceso');
})->name('seguridadacceso');

Route::get('/tarjetasGuardadas', function () {
    return view('tarjetasGuardadas');
})->name('tarjetasguardadas');

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
})->name('favoritos');

Route::get('/VistaParaCompra', function () {
    return view('VistaParaCompra');
});

Route::get('/BuscarProductos', function () {
    return view('BuscarProductos');
});

Route::get('/perfilDeUsuario', function () {
    return view('perfil-de-usuario');
})->name('perfil.usuario');

Route::get('/publicarNuevo', function () {
    return view('PublicarNuevoProducto');
})->name('publicarnuevo');

Route::get('/Comunicaciones', function () {
    return view('Comunicaciones');
})->name('Comunicaciones');

Route::get('/metodosdepago', function () {
    return view('MetodosDePago');
});
