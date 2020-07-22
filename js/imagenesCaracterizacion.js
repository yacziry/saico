// JavaScript source code
document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('resultadosImage'),
        image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
	preview.append(image);
  };
}

// JavaScript source code
document.getElementById("afile").onchange = function (e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function () {
        let preview = document.getElementById('apreview'),
            image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
    };
}

// JavaScript source code
document.getElementById("bfile").onchange = function (e) {
    // Creamos el objeto de la clase FileReader
    let reader = new FileReader();

    // Leemos el archivo subido y se lo pasamos a nuestro fileReader
    reader.readAsDataURL(e.target.files[0]);

    // Le decimos que cuando este listo ejecute el código interno
    reader.onload = function () {
        let preview = document.getElementById('bpreview'),
            image = document.createElement('img');

        image.src = reader.result;

        preview.innerHTML = '';
        preview.append(image);
    };
}