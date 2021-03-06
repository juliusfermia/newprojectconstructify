$(document).ready(function () {
	"use strict"; // Start of use strict

	$('#dataTableExample1, #dataTableExample2').DataTable({
		dom: "<'row dataTableInner'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
		"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		buttons: [
			{extend: 'copy', className: 'btn-sm'},
			{extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
			{extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
			{extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
			{extend: 'print', className: 'btn-sm'}
		]
	});

});