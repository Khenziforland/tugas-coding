$(document).ready(function () {
  loadDatatable();
});

function loadDatatable() {
  const datatable = $("#datatable");

  datatable.DataTable({
    processing: true,
    serverSide: true,
    order: [],
    ajax: {
      url: "/dashboard/nomor-4/datatable",
      data: {},
    },
    columnDefs: [
      {
        targets: "_all",
        className: "text-center",
      },
    ],
    columns: [
      {
        data: "id",
        render: function (data, type, row, meta) {
          return meta.row + meta.settings._iDisplayStart + 1;
        },
      },

      {
        data: "customerNameCustom",
        name: "customerNameCustom",
      },

      {
        data: "totalSalesCustom",
        name: "totalSalesCustom",
      },
    ],
  });
}
