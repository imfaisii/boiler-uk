<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="#">
<meta name="author" content="Faisal Ashfaq">
<title>{{ config('app.name') | ucwords(last(request()->segments())) }}</title>

<!-- Favicons-->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" type="image/x-icon"
    href="{{ asset('wizard-assets/img/apple-touch-icon-57x57-precomposed.png') }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"
    href="{{ asset('wizard-assets/img/apple-touch-icon-72x72-precomposed.png') }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
    href="{{ asset('wizard-assets/img/apple-touch-icon-114x114-precomposed.png') }}">
<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
    href="{{ asset('wizard-assets/img/apple-touch-icon-144x144-precomposed.png') }}">

<!-- GOOGLE WEB FONT -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

<!-- BASE CSS -->
<link href="{{ asset('wizard-assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('wizard-assets/css/menu.css') }}" rel="stylesheet">
<link href="{{ asset('wizard-assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('wizard-assets/css/vendors.css') }}" rel="stylesheet">

<!-- YOUR CUSTOM CSS -->
<link href="{{ asset('wizard-assets/css/custom.css') }}" rel="stylesheet">

<!-- MODERNIZR MENU -->
<script src="{{ asset('wizard-assets/js/modernizr.js') }}"></script>
