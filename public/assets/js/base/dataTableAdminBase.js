$(document).ready(function () {
  $.fn.dataTable.ext.type.search.string = function(data) {
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

  $("#example").DataTable({
    language: {
      url: SITE_URL + "assets/js/base/es-AR.json",
    },
    stateSave: true,
    dom: "Bfrltip",
    buttons: [
      {
        extend: "pdfHtml5",
        text: "Exportar a PDF",
        className: "btn btn-primary",
        orientation: "landscape",
        pageSize: "A3",
      },
      {
        extend: "excel",
        text: "Exportar a Excel",
        className: "btn btn-success",
      },
    ],

  });
});
