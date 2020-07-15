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
        var percent2 = 0;
    timerId = setInterval(function() {
        //increment progress bar
        percent2 += 4;
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