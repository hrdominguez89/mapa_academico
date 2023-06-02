$(document).ready(function () {
  $("#example tfoot th").each(function () {
    var title = $(this).text();
    $(this).html('<input type="text" placeholder="Search ' + title + '" />');
  });

  $("#example").DataTable({
    language: {
      url: SITE_URL + "assets/js/base/es-AR.json",
    },
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

    initComplete: function () {
      // Apply the search
      this.api()
        .columns()
        .every(function () {
          var that = this;

          $("input", this.footer()).on("keyup change clear", function () {
            if (that.search() !== this.value) {
              that.search(this.value).draw();
            }
          });
        });
    },
    /*  initComplete: function () {
      // Apply the search
      this.api()
        .columns()
        .every(function () {
          var that = this;
          $(".buscador").on("keyup change clear", function () {
            console.log(this.value);
            console.log(that.search);
            if (that.search() !== this.value) {
              that.search(this.value).draw();
            }
          });
        });
    }, */
    /* initComplete: function () {
      this.api()
        .columns()
        .every(function () {
          var column = this;
          var select = $('<select><option value=""></option></select>')
            .appendTo($(column.footer()).empty())
            .on("change", function () {
              var val = $.fn.dataTable.util.escapeRegex($(this).val());

              column.search(val ? "^" + val + "$" : "", true, false).draw();
            });

          column
            .data()
            .unique()
            .sort()
            .each(function (d, j) {
              select.append('<option value="' + d + '">' + d + "</option>");
            });
        });
    }, */
  });
});
