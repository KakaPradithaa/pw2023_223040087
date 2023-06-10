$(document).ready(function(){
    
    //hilangkan tommbol cari
    $('#tombol-cari').hide();

    //event ketika keyword ditulis
    $('#keyword').on('keyup', function(){
        $('#container').load('ajax/artikel.php?keyword=' + $('#keyword').val());

    });
});

 // Menjalankan carousel setiap 5 detik
 setInterval(function() {
    $('.carousel').carousel('next');
  }, 5000);

  