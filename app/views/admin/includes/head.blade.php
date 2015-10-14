<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AdBlockLookup | Ypanel</title>
    <base href="{{ public_path() }}/ypanel">
    <script type="text/javascript" src="{{ URL::asset('resource/ypanel/js/jquery.min.js' )}}"></script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('resource/ypanel/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('resource/ypanel/bower_components/metisMenu/dist/metisMenu.min.css' )}}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ URL::asset('resource/ypanel/dist/css/timeline.css' )}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('resource/ypanel/dist/css/sb-admin-2.css' )}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('resource/ypanel/bower_components/morrisjs/morris.css' )}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('resource/ypanel/bower_components/font-awesome/css/font-awesome.min.css' )}}" rel="stylesheet" type="text/css">
    
    @if(strpos($_SERVER["REQUEST_URI"], "/posts/"))
    <link href="{{ URL::asset('resource/ypanel/dist/css/redactor.css' )}}" rel="stylesheet">
    <script type="text/javascript" src="{{ URL::asset('resource/ypanel/js/prefixfree.min.js' )}}"></script>
    <script type="text/javascript" src="{{ URL::asset('resource/ypanel/js/bootstrap.min.js' )}}"></script>
    <script type="text/javascript" src="{{ URL::asset('resource/ypanel/js/custom.js' )}}"></script>
    <script type="text/javascript" src="{{ URL::asset('resource/ypanel/js/redactor.min.js' )}}"></script>
    @endif

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
    