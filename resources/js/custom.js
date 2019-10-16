$(document).ready(function () {
  
  // lokasi pelatihan menu
  $('#lokasi-pelatihan').hover(function () {
    $("#lokasi-pelatihan-content").show();
  });
  $('#lokasi-pelatihan-content').mouseover(function () {
    $("#lokasi-pelatihan-content").show();
  });
  $('#beranda, #informasi-pelatihan, .navbar-brand').hover(function () {
    $("#lokasi-pelatihan-content").hide();
  });
  $('#lokasi-pelatihan-content').mouseout(function () {
    $("#lokasi-pelatihan-content").hide();
  }); 
  
  // informasi pelatihan menu
  $('#informasi-pelatihan').hover(function () {
    $("#informasi-pelatihan-content").show();
  });
  $('#informasi-pelatihan-content').mouseover(function () {
    $("#informasi-pelatihan-content").show();
  });
  $('#lokasi-pelatihan, #aktivitas, .navbar-brand').hover(function () {
    $("#informasi-pelatihan-content").hide();
  });
  $('#informasi-pelatihan-content').mouseout(function () {
    $("#informasi-pelatihan-content").hide();
  }); 
  
  // aktivitas menu
  $('#aktivitas').hover(function () {
    $("#aktivitas-content").show();
  });
  $('#aktivitas-content').mouseover(function () {
    $("#aktivitas-content").show();
  });
  $('#informasi-pelatihan, #pengajuan-pelatihan, #tentang-kami, .navbar-brand').hover(function () {
    $("#aktivitas-content").hide();
  });
  $('#aktivitas-content').mouseout(function () {
    $("#aktivitas-content").hide();
  }); 
});