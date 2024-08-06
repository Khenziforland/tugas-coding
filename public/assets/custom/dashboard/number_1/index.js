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
      url: "/dashboard/nomor-1/datatable",
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
        data: "name",
        name: "name",
      },

      {
        data: "price",
        name: "price",
      },
    ],
  });
}
