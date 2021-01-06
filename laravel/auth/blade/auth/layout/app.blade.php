<!doctype html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description','Riyaziyyat,ibtidai sinif,hesablama,Vurma cədvəli,toplama,çıxma,vurma,bölmə,misallar,məsələlər,çalışmalar')">

    <meta property="og:riyaziyyat.tk" content="Riyaziyyat">
    <meta property="og:image"
          content="{{asset('frontend/favicon/icon.jpg')}}">
    <meta property="og:title" content="Riyaziyyat,ibtidai sinif,hesablama,Vurma cədvəli,toplama,çıxma,vurma,bölmə,misallar,məsələlər,çalışmalar">
    <meta property="og:description" content="Riyaziyyat,ibtidai sinif,hesablama,Vurma cədvəli,toplama,çıxma,vurma,bölmə,misallar,məsələlər,çalışmalar">
    <meta property="og:url" content="http://riyaziyyat.tk/">
    <meta property="og:type" content="website" />
    <title>{{ config('app.name') }} - @yield('title')</title>
    <link rel="icon" href="{{asset('frontend/favicon/icon.jpg')}}" type="image/jpg" sizes="16x16">
    <link href="{{asset('bootstrap/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('bootstrap/css/bootstrapv4.min.css')}}" rel="stylesheet"/>
</head>
<body>

@yield('content')

<script src="{{asset('bootstrap/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
