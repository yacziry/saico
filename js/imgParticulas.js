
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
    var percent2 = 0;
    timerId = setInterval(function() {
        //increment progress bar
        percent2 += 5;
        $('.progress-bar').css('width', percent2+'%');
        $('.progress-bar').attr('aria-valuenow', percent2);
        $('.progress-bar').text(percent2+'%');
 
        //complete
        if (percent2 == 100) {
            clearInterval(timerId);
            $('.information').show();
        }
 
     }, 1000);//setInterval
  };
}
