// mostrar imagenes
document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('imgAnalisis'),
        image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
	preview.append(image);
  };
}

document.getElementById("afile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let areader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  areader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  areader.onload = function(){
    let apreview = document.getElementById('imgAnalisis2'),
        image = document.createElement('img');

    image.src = areader.result;

    apreview.innerHTML = '';
    apreview.append(image);
  };
}
