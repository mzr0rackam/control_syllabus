<head>
  <meta charset="UTF-8">
  <title> Control de Syllabus - @yield('htmlheader_title', 'Your title here') </title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/customize/main-header.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/customize/footer.css') }}" rel="stylesheet" type="text/css" />
  @if (Request::is('login'))
    <link href="{{ asset('/css/customize/login.css') }}" rel="stylesheet" type="text/css" />
  @endif

  <script>
    //See https://laracasts.com/discuss/channels/vue/use-trans-in-vuejs
    window.trans = @php
        // copy all translations from /resources/lang/CURRENT_LOCALE/* to global JS variable
        $lang_files = File::files(resource_path() . '/lang/' . App::getLocale());
        $trans = [];
        foreach ($lang_files as $f) {
            $filename = pathinfo($f)['filename'];
            $trans[$filename] = trans($filename);
        }
        $trans['adminlte_lang_message'] = trans('adminlte_lang::message');
        echo json_encode($trans);
    @endphp
  </script>
</head>
