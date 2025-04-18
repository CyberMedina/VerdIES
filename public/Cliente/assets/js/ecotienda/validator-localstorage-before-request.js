document.addEventListener("DOMContentLoaded", () => {

    const exitModal = new bootstrap.Modal(document.getElementById('exitModal'));
    let redirectUrl = null;

    // Obtiene el ID del negocio actual desde la variable global window.usuario
    const currentBusinessId = window.usuario.id; // Esto se obtiene previamente del backend del blade en el HTML
    console.log("ID del negocio actual:", currentBusinessId);
    const storedBusinessId = Number(localStorage.getItem("businessId"));

    // Función para almacenar el ID actual en localStorage
    function storeBusinessId(id) {
        localStorage.setItem("businessId", id);
    }

    // Comprueba si hay un ID en el localStorage y si coincide con el actual
    if (!isNaN(currentBusinessId)) { // Asegúrate de que el ID es un número
        if (storedBusinessId) {
            if (storedBusinessId !== currentBusinessId) {
                // Si el ID en la URL no coincide con el almacenado, se elimina del localStorage
                console.log("Negocio diferente, eliminando datos previos de localStorage");
                localStorage.removeItem("businessId");
                localStorage.removeItem('cantidadDisponible');
                localStorage.removeItem('carrito');
                localStorage.removeItem('puntosDisponibles');

                // Luego guardamos el nuevo ID del negocio
                storeBusinessId(currentBusinessId);
            }
        } else {
            // Si no hay ningún ID almacenado, guarda el actual
            storeBusinessId(currentBusinessId);
        }
    }

    function hasCartData() {
        const carrito = JSON.parse(localStorage.getItem('carrito')) || [];
        return carrito.length > 0;
    }

    document.addEventListener("click", (event) => {
        const target = event.target.closest("a");

        // Asegúrate de que el target existe, tiene un href y no es `javascript:void(0);`
        if (target && target.href && target.href !== "javascript:void(0);" && hasCartData()) {
            // Verifica si el enlace tiene el atributo `data-bs-toggle="modal"`
            if (target.getAttribute('data-bs-toggle') === 'modal') {
                return; // No hacer nada si el enlace abre un modal
            }

            try {
                // Obtén el ID del negocio del enlace de alguna manera
                const targetBusinessId = new URL(target.href).pathname.split("/").pop();
                console.log(targetBusinessId); // Esto debería mostrar el ID del negocio si es válido

                // Verifica si el ID del negocio en el enlace es diferente al actual
                if (targetBusinessId !== currentBusinessId) {
                    console.log('Diferente negocio');
                    event.preventDefault();
                    redirectUrl = target.href;
                    exitModal.show();
                }
            } catch (e) {
                // Si `target.href` no es una URL válida, el enlace no hace nada
                console.log("Enlace no válido para redirección:", target.href);
            }
        }
    });

    document.getElementById("confirmExit").addEventListener("click", () => {
        localStorage.removeItem('cantidadDisponible');
        localStorage.removeItem('carrito');
        localStorage.removeItem('puntosDisponibles');
        exitModal.hide();
        if (redirectUrl) {
            window.location.href = redirectUrl;
            redirectUrl = null;
        }
    });

    document.getElementById("stayOnPage").addEventListener("click", () => {
        exitModal.hide();
        redirectUrl = null;
    });
});
