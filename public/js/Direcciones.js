const API_URL = 'http://127.0.0.1:8000/api/direcciones'; 


const formulario = document.querySelector('form');


formulario.addEventListener('submit', async (event) => {
    event.preventDefault(); 
    const domicilio = {
        ID_USUARIO: document.getElementById('ID_USUARIO').value.trim(),
        NOMBRE_COMPLETO: document.getElementById('NOMBRE_COMPLETO').value.trim(),
        CODIGO_POSTAL: document.getElementById('CODIGO_POSTAL').value.trim(),
        ESTADO: document.getElementById('ESTADO').value.trim(),
        MUNICIPIO: document.getElementById('MUNICIPIO').value.trim(),
        COLONIA: document.getElementById('COLONIA').value.trim(),
        CALLE: document.getElementById('CALLE').value.trim(),
        NUMERO_EXTEIOR: document.getElementById('NUMERO_EXTERIOR').value.trim(),
        NUMERO_INTERIOR: document.getElementById('NUMERO_INTERIOR').value.trim(),
        CALLE_1: document.getElementById('CALLE_1').value.trim(),
        CALLE_2: document.getElementById('CALLE_2').value.trim(),
        CONTACTO: document.getElementById('CONTACTO').value.trim(),
        INDICACIONES: document.getElementById('INDICACIONES').value.trim()
    };

    
    if (Object.values(domicilio).some(valor => !valor)) {
        alert('Por favor, completa todos los campos.');
        return;
    }

    try {
        
        const respuesta = await fetch(API_URL, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(domicilio)
        });

        if (!respuesta.ok) {
            throw new Error('Error al guardar el domicilio');
        }

        alert('Domicilio guardado correctamente.');
        formulario.reset(); 
        cargarDirecciones(); 
    } catch (error) {
        console.error(error);
        alert('Hubo un problema al guardar el domicilio.');
    }
});


async function cargarDirecciones() {
    const contenedor = document.getElementById('lista-direcciones');
    contenedor.innerHTML = ''; 

    try {
        
        const respuesta = await fetch(API_URL);
        if (!respuesta.ok) {
            throw new Error('Error al cargar las direcciones');
        }

        const direcciones = await respuesta.json();

        if (direcciones.length === 0) {
            contenedor.innerHTML = 'No hay domicilios guardados.';
            return;
        }

        
        direcciones.forEach((domicilio) => {
            const div = document.createElement('div');
            div.classList.add('domicilio-item');

            div.innerHTML = `
                ID Usuario: ${domicilio.id_usuario}
                nombre_completo: ${domicilio.nombre_completo}
                Dirección: ${domicilio.calle}, ${domicilio.colonia}, ${domicilio.municipio}, ${domicilio.estado}, C.P. ${domicilio.codigo_postal}
                Número Exterior: ${domicilio.numero_exterior}
                Número Interior: ${domicilio.numero_interior}
                Calle 1: ${domicilio.calle_1}
                Calle 2:< ${domicilio.calle_2}
                Contacto: ${domicilio.contacto}
                Indicaciones: ${domicilio.indicaciones}
                <button class="btn btn-danger" onclick="eliminarDireccion(${domicilio.id})">Eliminar</button>
            `;
            contenedor.appendChild(div);
        });
    } catch (error) {
        console.error(error);
        contenedor.innerHTML = 'Error al cargar las direcciones.';
    }
}


async function eliminarDireccion(id) {
    try {
        const respuesta = await fetch(`${API_URL}/${id}`, { method: 'DELETE' });

        if (!respuesta.ok) {
            throw new Error('Error al eliminar el domicilio');
        }

        alert('Domicilio eliminado correctamente.');
        cargarDirecciones(); 
    } catch (error) {
        console.error(error);
        alert('Hubo un problema al eliminar el domicilio.');
    }
}


document.addEventListener('DOMContentLoaded', cargarDirecciones);
