<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

@if (Request::is('*'))
	<script src="{{ asset('/plugins/jquery.dataTables.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('/js/customize/data-tables.js') }}" type="text/javascript"></script>
@endif

@if (Request::is('escuela/*'))  
  <script src="{{ asset('/plugins/highcharts/code/highcharts.js') }}" type="text/javascript"></script>
  <script src="{{ asset('/js/customize/sistemas-charts.js') }}" type="text/javascript"></script>
@endif

