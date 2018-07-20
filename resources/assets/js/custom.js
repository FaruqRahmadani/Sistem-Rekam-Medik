import swal from 'sweetalert';

$('#logout').on('click', function(e) {
  swal({
    title   : "Logout",
    text    : "Lanjutkan Logout?",
    icon    : "warning",
    buttons : [
      "Batal",
      "Logout",
    ],
  })
  .then((logout) => {
    if (logout) {
      swal({
        title  : "Logout",
        text   : "Anda Telah Logout",
        icon   : "success",
        timer  : 2500,
      });
      window.location = "/logout";
    } else {
      swal({
        title  : "Batal Logout",
        text   : "Anda Batal Logout",
        icon   : "info",
        timer  : 2500,
      })
    }
  });
});

window.hapus = function(link, bisa=0){
  if (!bisa) {
  swal({
    title   : "Hapus",
    text    : "Yakin Ingin Hapus Data?",
    icon    : "warning",
    buttons : [
      "Batal",
      "Hapus",
    ],
  })
  .then((hapus) => {
    if (hapus) {
      swal({
        title  : "Berhasil",
        text   : "Data Akan dihapus",
        icon   : "success",
        timer  : 2500,
      });
      window.location = link;
    } else {
      swal({
        title  : "Batal",
        text   : "Data Batal dihapus",
        icon   : "info",
        timer  : 2500,
      })
    }
  });
  }else{
    swal({
      title   : "Hapus",
      text    : bisa,
      icon    : "warning",
      buttons : "OK",
    })
  }
}
