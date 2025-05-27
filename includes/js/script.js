// includes/js/confirmaciones.js
document.addEventListener('DOMContentLoaded', function () {
    // Configurar confirmación para eliminar razas
    const formEliminarRaza = document.querySelector('form[action*="borrar_raza"]');
    if (formEliminarRaza) {
        formEliminarRaza.addEventListener('submit', function (e) {
            const nombreRaza = document.getElementById('nombre_eliminar').value;
            if (!confirm(`¿Seguro que quieres eliminar la raza "${nombreRaza}"?\nEsta acción no se puede deshacer.`)) {
                e.preventDefault();
            }
        });
    }

    // Configurar confirmación para eliminar gallinas
    const formEliminarGallina = document.querySelector('form[action*="borrar_gallina"]');
    if (formEliminarGallina) {
        formEliminarGallina.addEventListener('submit', function (e) {
            const gallinaSelect = document.getElementById('id_borrar');
            const gallinaNombre = gallinaSelect.options[gallinaSelect.selectedIndex].text;
            if (!confirm(`¿Seguro que quieres eliminar la gallina "${gallinaNombre}"?\nSe borrarán todos sus datos.`)) {
                e.preventDefault();
            }
        });
    }

    // Configurar confirmación para resucitar gallinas (borrar bajas)
    const formResucitarGallina = document.querySelector('form[action*="borrar_baja"]');
    if (formResucitarGallina) {
        formResucitarGallina.addEventListener('submit', function (e) {
            const gallinaSelect = document.getElementById('id_borrar');
            const gallinaNombre = gallinaSelect.options[gallinaSelect.selectedIndex].text;
            if (!confirm(`¿Seguro que quieres resucitar a "${gallinaNombre}"?\nSe eliminará su registro de baja.`)) {
                e.preventDefault();
            }
        });
    }

    // Configurar confirmación para eliminar producciones
    const formEliminarProduccion = document.querySelector('form[action*="borrar_produccion"]');
    if (formEliminarProduccion) {
        formEliminarProduccion.addEventListener('submit', function (e) {
            const fecha = document.getElementById('fecha_eliminar').value;
            if (!confirm(`¿Seguro que quieres eliminar TODAS las producciones del ${fecha}?\nEsta acción borrará todos los huevos registrados ese día.`)) {
                e.preventDefault();
            }
        });
    }
});