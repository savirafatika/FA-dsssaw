const flashData = $(".flash-data").data("flashdata");

if (flashData) {
  Swal({
    title: "Sip, Data ",
    text: "Berhasil " + flashData,
    type: "success"
  });
}

// tombol-hapus
$(".tombol-hapus").on("click", function(e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal({
    title: "Apakah Anda Yakin?",
    text: "Data akan Dihapus",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus"
  }).then(result => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//tombol logout
$(".tombol-logout").on("click", function(e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal({
    title: "Yakin ingin logout",
    type: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sure"
  }).then(result => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

//tombol btn save matkul
$("#btnsave").on("click", function(e) {
  e.preventDefault();

  Swal({
    icon: "error",
    title: "Oops...",
    text: "Anda Mencapai Batas Maksimal",
    footer: "<a href>sudah memilih 2 matakuliah</a>"
  });
});

// tombol-Diterima
$(".tombol-diterima").on("click", function(e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal({
    title: "Yakin ingin diterima ?",
    text: "Data akan dihapus dan dipublikasi ke dasboard calon asisten",
    type: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sure"
  }).then(result => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

// tombol-Ditolak
$(".tombol-ditolak").on("click", function(e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal({
    title: "Yakin calon asisten tidak diterima ?",
    text: "Data akan dihapus dan dipublikasi ke dasboard calon asisten",
    type: "question",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Sure"
  }).then(result => {
    if (result.value) {
      document.location.href = href;
    }
  });
});
