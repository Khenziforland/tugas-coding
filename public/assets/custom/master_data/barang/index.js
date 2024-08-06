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
      url: "/master-data/barang/datatable",
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
        data: "stock",
        name: "stock",
      },

      {
        data: "quantity_sold",
        name: "quantity_sold",
      },

      {
        data: "transactionDateCustom",
        name: "transactionDateCustom",
      },

      {
        data: "item_type",
        name: "item_type",
      },

      {
        data: "action",
        name: "action",
        orderable: false,
        searchable: false,
      },
    ],
  });
}

function confirmDelete(id) {
  Swal.fire({
    icon: "question",
    text: "Apakah anda yakin ingin menghapus data ini ?",
    showCancelButton: true,
    buttonsStyling: false,
    customClass: {
      confirmButton: "btn btn-danger",
      cancelButton: "btn btn-secondary",
    },
    confirmButtonText: "Hapus",
    cancelButtonText: "Batal",
  }).then(async (result) => {
    if (result.isConfirmed) {
      const formSubmit = $("#formSubmit");

      blockCard();
      formSubmit.attr("action", "/master-data/barang/hapus-data/" + id).submit();
    }
  });
}
