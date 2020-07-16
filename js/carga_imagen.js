
document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
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
    let apreview = document.getElementById('apreview'),
        image = document.createElement('img');

    image.src = areader.result;

    apreview.innerHTML = '';
    apreview.append(image);
  };
}

document.getElementById("bfile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let breader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  breader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  breader.onload = function(){
    let bpreview = document.getElementById('bpreview'),
        image = document.createElement('img');

    image.src = breader.result;

    bpreview.innerHTML = '';
    bpreview.append(image);
  };
}


document.getElementById("cfile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let creader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  creader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  creader.onload = function(){
    let cpreview = document.getElementById('cpreview'),
        image = document.createElement('img');

    image.src = creader.result;

    cpreview.innerHTML = '';
    cpreview.append(image);
  };
}

document.getElementById("dfile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let dreader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  dreader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  dreader.onload = function(){
    let dpreview = document.getElementById('dpreview'),
        image = document.createElement('img');

    image.src = dreader.result;

    dpreview.innerHTML = '';
    dpreview.append(image);
  };
}




