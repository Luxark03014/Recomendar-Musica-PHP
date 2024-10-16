document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('estado-form');
    const body = document.body;
    const h1 = document.getElementById('h11')
    
    function cambiarFondo(estado) {
        switch (estado) {
            case "Feliz":
                body.style.backgroundColor = "#FFF5CD";
                h1.style.color = "black";
                break;
            case "Triste":
                body.style.backgroundColor = "#1E3E62"; 
                break;
            case "Energético":
                body.style.backgroundColor = "#FF6500"; 
                break;
            case "Relajado":
                body.style.backgroundColor = "#005B41"; 
                break;
            case "Inspirado":
                body.style.backgroundColor = "#A367B1";
                break;
            case "Estresado":
                body.style.backgroundColor = "#750E21"; 
                break;
            default:
                body.style.backgroundColor = "#0F0F0F";
                break;
        }
    }

    
    const estadoGuardado = localStorage.getItem('estado');
    if (estadoGuardado) {
        cambiarFondo(estadoGuardado);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
        const estadoSeleccionado = form.estado.value;
        cambiarFondo(estadoSeleccionado);
        localStorage.setItem('estado', estadoSeleccionado); 
        form.submit(); 
    });
});
