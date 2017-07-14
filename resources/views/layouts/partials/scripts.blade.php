<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

@if (Request::is('cursos'))
	<script src="{{ asset('/plugins/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/customize/data-tables.js') }}" type="text/javascript"></script>
@endif

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
