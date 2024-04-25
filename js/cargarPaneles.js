const cargarPanel = async () => {
    var res = await fetch("php/consulPaneles.php");
    var reGisHTML = ``;
    var shoPro = await res.json();

    const imagenes = ["Neo.jpg", "DSC.jpg", "Rsi1.jpg", "camaras.png","CLIMAX.JPG"]; // Array de imágenes

    shoPro.data.forEach((item, index) => {
        const imagen = imagenes[index % imagenes.length]; // Obtener una imagen del array

        reGisHTML += `
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">${item[1]}</h5>
                    <img src="imagenes/${imagen}" class="card-img-top" alt="" width="auto" height="110PX">
                    
                    <div class="form-check">
                        <button type="button" id="${item[0]}" class="btn btn-primary" onclick="redireccionar('${item[0]}'); tomarPanel(${item[0]});">Seleccionar</button>
                        <input type="hidden" name="boton_valor" id="boton_valor" value="1">
                    </div>
                    <div class="form-check">

                </div>
                </div>
            </div>
        </div>
        `;
    });

    document.querySelector("#content-cards-paneles").innerHTML = reGisHTML;
}
