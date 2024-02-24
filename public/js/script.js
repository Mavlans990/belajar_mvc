$(function () {
  $(".tombolTambah").on("click", function () {
    $("#exampleModalLabel").html("Tambah Data");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/phpmvc/public/buku/tambahData"
    );

    $(".judul").val("");
    $(".nama").val("");
    $(".tgl_terbit").val("");
  });

  $(".tombolEdit").on("click", function () {
    $("#exampleModalLabel").html("Ubah Data");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/phpmvc/public/buku/editData"
    );

    const id_buku = $(this).data("id_buku");

    $.ajax({
      url: "http://localhost/phpmvc/public/buku/ambilData",
      data: { id_buku: id_buku },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".judul").val(data[0].judul);
        $(".nama").val(data[0].nama);
        $(".tgl_terbit").val(data[0].tgl_terbit);
        $(".id_buku").val(data[0].id_buku);
        // console.log(data[0].judul);
      },
    });
  });
});
