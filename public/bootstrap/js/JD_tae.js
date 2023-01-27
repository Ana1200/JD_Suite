function girarCarta () {
    var evento = window.event;
  
    jugada2 = evento.target.dataset.valor;
    identificadorJ2 = evento.target.id;
  
  
    if ( jugada1 !== "" ) {
  
      if ( jugada1 === jugada2 && identificadorJ1 !== identificadorJ2 && cartas[parseInt(identificadorJ2)].seleccion != true &&               cartas[parseInt(identificadorJ1)].seleccion != true) {
        
        cartas[parseInt(identificadorJ1)].seleccion = true;
        cartas[parseInt(identificadorJ2)].seleccion = true;
  
        colorCambio(identificadorJ2, "blue", jugada2);
        vaciar();
        comprobar();
      }else if(identificadorJ1 !== identificadorJ2){
        var self = this;
        setTimeout(function(){
          colorCambio(self.identificadorJ1, "black", "?")
          colorCambio(self.identificadorJ2, "black", "?")
          vaciar()
        },200); 
  
        colorCambio(identificadorJ2, "blue", jugada2);
      }
    } else if(jugada2 !== "valor") {
  
      colorCambio(identificadorJ2, "blue", jugada2);
  
      jugada1 = jugada2;
      identificadorJ1 = identificadorJ2;
    }
  };