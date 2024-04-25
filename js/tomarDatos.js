const tomarContrato = async()=>{

    var contrato = document.querySelector("#contrato").value;
    var nombreUsuario = document.querySelector("#username").value;

    if(contrato.trim()==='' || 
    nombreUsuario.trim()===''){

        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Existen campos vacios!'
          })
        return;
    }

    localStorage.setItem('username',nombreUsuario);
    localStorage.setItem('contrato',contrato);
}


const tomarPanel=async(id_panel)=>{

    //Almacena el id del boton del panel en el localstorage
    localStorage.setItem('idPanel',id_panel);
}

const tomarobser=async()=>{

    var obser = document.querySelector("#comentarios").value;

    //Almacena el id del boton del panel en el localstorage
    localStorage.setItem('comentarios',obser);
    regisDatos();
}
