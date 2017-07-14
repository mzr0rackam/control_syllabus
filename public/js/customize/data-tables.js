

//Data-table for Curso
$(document).ready(function(){
	$('#data-table-curso').DataTable({
		ordering: true,
		order: [[1, 'asc']],
		paging: true
	});
});