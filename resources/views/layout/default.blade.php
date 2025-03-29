<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TT Hairstyle | Kadeřnictví Praha 7 Holešovice</title>

        <meta name="description" content="Hledáte kvalitní kadeřnictví s příjemnou, ale zároveň velice zkušenou obsluhou? Kadeřnictví TT Hairstyle v Praze 7 je tím perfektním místem pro Vás. Dopřejte sobě a svým vlasům to nejlepší.">
        <meta name="og:description" content="Hledáte kvalitní kadeřnictví s příjemnou, ale zároveň velice zkušenou obsluhou? Kadeřnictví TT Hairstyle v Praze 7 je tím perfektním místem pro Vás. Dopřejte sobě a svým vlasům to nejlepší.">
        <meta name="keywords" content="kadeřnictví, kadeřnictví Praha 7, TT Hairstyle, kadeřnictví Holešovice, kadeřnictví Praha, kadeřnictví Holešovice, kadeřnictví Praha 7 Holešovice, kadeřnictví Holešovice Praha 7, kadeřnictví Holešovice Praha
        7, kadeřnictví Holešovice Praha, tereza, tyrpeklová, terka, kadeřnice, kadeřnice Praha 7, kadeřnice Holešovice, kadeřnice Praha, kadeřnice Holešovice, kadeřnice Praha 7 Holešovice, kadeřnice Holešovice Praha 7, kadeřnice Holešovice Praha">
        <meta property="og:title" content="TT Hairstyle">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="tthairstyle.cz">
        <meta property="og:url" content="https://www.tthairstyle.cz/">
        <meta property="og:image" content="{{URL::asset('img/logo.svg') }}">

        <meta name="twitter:card" content="summary_large_image">

        <meta name="robots" content="index,follow">
        <link rel="canonical" href="https://www.tthairstyle.cz">

        <link rel="apple-touch-icon" sizes="180x180" href="{{URL::asset('img/logo.svg') }}">
        <link rel="mask-icon" href="{{URL::asset('img/logo.svg') }}" color="#000000">
        <link rel="icon" type="image/svg+xml"  href="{{URL::asset('img/logo.svg') }}">
        <link rel="shortcut icon" href="{{URL::asset('img/logo.svg') }}" type="image/x-icon">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin> 
        <link rel="preconnect" href="https://maps.googleapis.com" crossorigin> 
        <link rel="preconnect" href="https://maps.gstatic.com" crossorigin> 
        <link rel="preconnect" href="https://netdna.bootstrapcdn.com" crossorigin> 
        <link rel="preload" as="image" href="{{ URL::asset("/img/final.webp") }}">
        <link rel="preload" as="image" href="{{ URL::asset("/img/terka.webp")}}">

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset("css/style.css") }}?{{md5(microtime())}}" rel="preload" as="style" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" media='none'" onload="if(media!=='all')media='all'"/>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- <script>
            var width = window.innerWidth
            || document.documentElement.clientWidth
            || document.body.clientWidth;

            if ( width > 1028) {
                document.write('<script defer src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"><\/script>');
            }
        </script> -->
        <script defer src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script defer src={{ URL::asset("js/photoswipe.esm.min.js") }}></script>
        <script defer src={{ URL::asset("js/photoswipe-lightbox.esm.min.js") }}></script>
        <script async src="{{ URL::asset("js/main.js") }}?{{md5(microtime())}}"></script>
        
    </head>
    <body id="top">

        @yield('content')

        @include('layout.footer')

    </body>
</html>
