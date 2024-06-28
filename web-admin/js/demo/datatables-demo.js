// Call the dataTables jQuery plugin
$(document).ready(function () {
  $("#dataTable").DataTable();
  new DataTable("#dataTable", {
    columnDefs: [{ width: "80%", targets: 0 }],
  });
});
