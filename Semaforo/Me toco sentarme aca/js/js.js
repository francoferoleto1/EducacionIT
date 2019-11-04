// ---------------------------------------
// ---------------------------------------


function cambiarLuzSemaforo(id, prender) {
    var color = 'gray'
    if(prender) color = id
    /* document.getElementById(id).style.backgroundColor = color */
    document.querySelector('#'+id).style.backgroundColor = color
}


// ---------------------------------------
// ---------------------------------------


function cambiarEstadoSemaforoBoton(){
    if(modoAuto) return
    cambiarEstadoSemaforo()
}


// ---------------------------------------
// ---------------------------------------


var estado = 0
function cambiarEstadoSemaforo() {
    console.log(estado)
   

    switch(estado) {
        //ROJO
        case 0:
            cambiarLuzSemaforo('red', !false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', false)
            break
        
        //ROJO-AMARILLO
        case 1:
            cambiarLuzSemaforo('red', !false)
            cambiarLuzSemaforo('yellow', !false)
            cambiarLuzSemaforo('green', false)
            break

        //VERDE
        case 2:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', !false)
            break

        //AMARILLO
        case 3:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', !false)
            cambiarLuzSemaforo('green', false)
            break

        default:
            cambiarLuzSemaforo('red', false)
            cambiarLuzSemaforo('yellow', false)
            cambiarLuzSemaforo('green', false)
            break
    }

    estado++;
    if(estado > 3) estado = 0
}


// ---------------------------------------
// ---------------------------------------


var modoAuto = false
var refInterval
function cambiarModoSemaforo(){
    modoAuto = !modoAuto
    cambiarMensajeModo(modoAuto)

    if(modoAuto){
        refInterval = setInterval(cambiarEstadoSemaforo, 200)
    }
    else {
        clearInterval(refInterval)
    }
}


// ---------------------------------------
// ---------------------------------------


function cambiarMensajeModo(modoAuto){
    // var mensaje = 'Modo manual'
    // if(modoauto) mensaje = 'Modo automatico'
    // document.querySelector('h4').innerText = mensaje
    document.querySelector('h4').innerText = modoAuto? 'Modo automatico' : 'Modo manual'
}

function start() {
    document.querySelector('#boton-cambiar').onclick = cambiarEstadoSemaforoBoton
    document.querySelector('#boton-modo').onclick = cambiarModoSemaforo

cambiarLuzSemaforo('red', false)
cambiarLuzSemaforo('yellow', false)
cambiarLuzSemaforo('green', false)
cambiarMensajeModo(modoAuto)
}


// ---------------------------------------
// ---------------------------------------


start()