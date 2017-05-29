<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISTE | Bologna Bilgi Sistemi</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

    <!-- Program Bilgileri İçerik CSS -->
    <link href="{{ asset('css/program-bilgileri-icerik.css') }}" rel="stylesheet">

    <link href="{{ asset('css/icerigi_ikiye_bol.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <?php
        // dd( Request::segment(1) ); link içindeki get metodlarından birincisini getir. 'en' ifadesini get ile alındı.

        if( Request::segment(1) == 'en')
        {
            App::setlocale('en');       
        }

        else
        {
            App::setlocale('tr');
        }
                    
     ?>


    <div id="header">
    <a href="{{ trans('link.bologna_bilgi') }}">
        <img src="{{ asset(trans('logo.iste_banner')) }}" width="320px" height="70px">
    </a>
    </div>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="{{ trans('link.bologna_bilgi') }}">
                        {{ trans('menu.bologna_bilgi') }}
                    </a>
                </li>
                <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> {{ trans('menu.kurumsal') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">{{ trans('menu.isim_adres') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.akademik_takvim') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.yonetim_kadrosu') }}</a>
                            </li>
                             <li>
                                <a href="#">{{ trans('menu.kurum_hakkinda') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.akademik_prog') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.genel_kabul_sartlari') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.onceki_ogr_taninmasi') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.kayit_islemleri') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.akts_kredi_sistemi') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.akademik_danismanlik') }}</a>
                            </li>
                        </ul>
                    </li>
                 <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-arrows-v"></i> {{ trans('menu.akademik_birimler') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="{{ trans('link.doktora') }}"> {{ trans('menu.doktora') }} </a>
                            </li>
                            <li>
                                <a href="{{ trans('link.yukseklisans') }}"> {{ trans('menu.yukseklisans') }}</a>
                            </li>
                            <li>
                                <a href="{{ trans('link.lisans') }}"> {{ trans('menu.lisans') }} </a>
                            </li>
                            <li>
                                <a href="{{ trans('link.onlisans') }}"> {{ trans('menu.onlisans') }} </a>
                            </li>
                        </ul>
                    </li>
                     <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-arrows-v"></i>{{ trans('menu.ogrenci_bilgi') }} <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="#">{{ trans('menu.sehir') }}</a>
                            </li>
                            <li>
                                <a href="#"> {{ trans('menu.konaklama') }} </a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.beslenme') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.tibbi') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.engelli_olanaklari') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.sigorta') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.maddi') }} </a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.oidb') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.ogrenim_olanaklari') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.uluslararasi_prog') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.degisim_ogr') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.dil_kurs') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.staj') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.sosyal_yasam') }}</a>
                            </li>
                            <li>
                                <a href="#">{{ trans('menu.ogr_kulupleri') }}</a>
                            </li>
                        </ul>
                    </li>
                <li>
                    <a href="#">{{ trans('menu.diploma_eki') }}</a>
                </li>
                <li>
                    <a href="#">{{ trans('menu.erasmus_kalite') }}</a>
                </li>
            </ul>
        </div>

        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
        
            @yield('content')
            
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>

            <a href="{{ URL::previous() }}" class="btn btn-default"> {{ trans('menu.onceki_sayfa') }} </a>

        </div>


    <!-- jQuery -->

<div stlye="width=300px background-color:red;">
    <script src="{{ URL::asset('js/jquery.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</div>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

<div class="footer">  {{ trans('menu.footer') }}  </div>
