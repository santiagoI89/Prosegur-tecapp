//REGISTRO DE USUASRIO
const regisDatos = async () => {
    var contrato = localStorage.getItem('contrato');
    var idPanel = localStorage.getItem('idPanel');
    var nombreUsuario = localStorage.getItem('username');
    var comentarios = localStorage.getItem('comentarios');
    var descripcionFalla = localStorage.getItem('descripcionFallaHidden'); // Utiliza el valor almacenado en localStorage

    var today = new Date();
    var now = today.toLocaleDateString('en-US');
    var f = new Date();
    f.getYear() + "-" + f.getMonth() + "-" + f.getDate();

    //INSERTAR A BASE DE DATOS
    const data = new FormData();
    data.append("id_Panel", idPanel);
    data.append("Contrato", contrato);
    data.append("Usuario", nombreUsuario);
    data.append("Comentarios", comentarios);
    data.append("Fallo", descripcionFalla); // Utiliza el valor de localStorage

    data.append("fecha", f);

    // Resto del código permanece igual.




    var res = await fetch("php/regisDatos.php", {
        method:'POST',
        body: data
    });
    var result = await res.json();

    if(result.success ==true){
        Swal.fire({
            icon: 'success',
            title: 'EXITO!',
            text: result.mess
          })
          setTimeout(()=>{
            reload();
          },3000)
    }else{
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: result.mess
          })
    }
}
//recargar pagina
function reload(){
  window.location.href = "index.php";
}
