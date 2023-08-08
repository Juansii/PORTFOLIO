let menuVisible = false;
//Función que oculta o muestra el menu
function mostrarOcultarMenu(){
    if(menuVisible){
        document.getElementById("nav").classList ="";
        menuVisible = false; 
    }else{
        document.getElementById("nav").classList ="responsive";
        menuVisible = true; 
    }
}

function seleccionar(){
    // para que el menú se oculte una vez que selecciono una de las opciones
    document.getElementById("nav").classList = "";
    menuVisible = false;
}


  
  
