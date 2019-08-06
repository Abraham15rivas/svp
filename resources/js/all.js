
  $("#imagen").backstretch([
    "../image/fondo10.jpg",
    "../image/fondo11.jpg",
    "../image/fondo12.jpg",
    "../image/fondo13.jpg"
], {duration: 4000, fade: 1000});

//carrusel
$(document).ready(function(){
  $('.carousel').carousel();
});

//calendario de vacaciones 
$('.datepicker').on('mousedown',function(e){
  e.preventDefault();
});

    $('#fi').pickadate({
    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
    weekdaysShort: ['Dom','Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 1, // Creates a dropdown of 15 years to control year,
    min: 21,
    disable: [
      1,7
    ],
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Ok',
    closeOnSelect: true, // Close upon selecting a date
    onClose: function() { let inicio = $('#fival').val(this.get('select', 'yyyy-mm-dd'));
  }
  });
    var ini = $('#fival').val();
    var dia = parseInt(ini.substr(8,9));
    var mes = parseInt(ini.substr(5,6));
    var anio = parseInt(ini.substr(0,4));

    mes += 1;

  
  $('#ff').pickadate({
    monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    weekdaysFull: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
    weekdaysShort: ['Dom','Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 1, // Creates a dropdown of 15 years to control year,
    min: new Date(anio,mes,dia),
    disable: [
      1,7
    ],
    today: 'Hoy',
    clear: 'Limpiar',
    close: 'Ok',
    closeOnSelect: true // Close upon selecting a date
  });

