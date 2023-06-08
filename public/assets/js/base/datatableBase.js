$(document).ready(function () {

  $.fn.dataTable.ext.type.search.string = function (data) {
    return !data ?
      '' :
      typeof data === 'string' ?
        data
          .replace(/á/gi, 'a')
          .replace(/é/gi, 'e')
          .replace(/í/gi, 'i')
          .replace(/ó/gi, 'o')
          .replace(/ú/gi, 'u')
          .replace(/ñ/gi, 'n') :
        data;
  };

  var table = $("#example").DataTable({
    orderCellsTop: true,
    fixedHeader: true,
    responsive: true,
    language: {
      url: SITE_URL + "assets/js/base/es-AR.json",
    },
    dom: "Bfrltip",
    buttons: [
      {
        extend: "excel",
        text: "Descargar búsqueda EXCEL",
        className: "btn__download btn me-2",
      },
      {
        extend: "pdfHtml5",
        text: "Descargar búsqueda PDF",
        className: "btn__download btn__download-pdf btn mt-2 mt-md-0",
        orientation: "landscape",
        pageSize: "A3",
      },
    ],
  });

  //Creamos una fila en el head de la tabla y lo clonamos para cada columna
  $("#example thead tr").clone(true).appendTo("#example thead");

  $("#example thead tr:eq(1) th").each(function (i) {
    var title = $(this).text(); //es el nombre de la columna
    $(this).html(
      '<input style="width:100%" type="text" placeholder="Buscar..." />'
    );

    $("input", this).on("keyup change", function () {
      if (table.column(i).search() !== this.value) {
        table.column(i).search(this.value).draw();
      }
    });
  });
});
