
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, shrink-to-fit=no, user-scalable=0" />
    <meta name="google-site-verification" content="0r6dgYr90oDyoITkLTyjSy7WnmEMPzDBePon2ZQ5UB4">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="GAS - Welcome to Gas.id">
    <meta property="og:url" content="https://gas.id/">
    <meta property="og:site_name" content="GAS">
    <title>GAS - Welcome to Gas.id</title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="canonical" href="https://gas.id/">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://gas.id/css/style.css" />
    <link rel="stylesheet" type="text/css" href="https://gas.id/js/slick/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://gas.id/js/slick/slick/slick-theme.css" />
    <script type="text/javascript">var global_url = "https://gas.id/";var global_var = "3d4e06f2ac22f3448b09b98f6716fded3e9135b737c8c6795d43469afb784e8f";var current_date = "20 February 2023";var dateNow = "20";var monthNow = "February";var yearNow = "2023";</script>
    <script type="text/javascript">
        function openmenu() {
            jQuery(".close_window").addClass('open');
            jQuery("#leftmenu").animate({
                width: '240px'
            });
            return;
        }

        function closemenu() {
            jQuery(".close_window").removeClass('open');
            jQuery("#leftmenu").animate({
                width: '0px'
            });
            return;
        }
    </script>
</head>

<body><div class="arrow arrow_to_top none" id="arrow" onclick="topFunction()">
    <i class="fas fa-chevron-circle-up"></i>
</div>

@include('layouts.header')

<section id="page_content" class="page_content">
    @yield('content')
</section>

@stack('script')

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="https://gas.id/js/slick/slick/slick.js"></script>
<script type="text/javascript" src="https://gas.id/js/main-feature.js"></script>
<script type="text/javascript" src="https://gas.id/js/modernizr.custom.js"></script>
<script type="text/javascript" src="https://gas.id/js/classie.js"></script>
<script type="text/javascript" src="https://gas.id/js/sidebarEffects.js"></script>
<script type="text/javascript" src="https://gas.id/js/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="https://gas.id/js/feedback.js"></script>
<script>
    function open_descjob(value) {
        $('#descmodal_' + value).fadeIn();
        $('#jobrequired_' + value).fadeIn();
    }

    function close_descjob(value) {
        $('#descmodal_' + value).fadeOut();
        $('#jobrequired_' + value).fadeOut();
    }

    function open_contactus() {
        $('#contactus, #wrap_form_feedback').fadeIn();
    }
    var span = document.getElementById("close_pop");
    span.onclick = function() {
        $('#contactus, #wrap_form_feedback').fadeOut();
    }
    // if ($('body').hasClass('page-template')) { $('#navbar_collapse,#navbar_burger').hide(); $('.titleback').show();}
</script>
<script>
    var OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

    function button_open() {
        if (/android/i.test(userAgent)) {
            OSName = 'https://play.google.com/store/apps/details?id=id.gas.app&amp;amp;hl=en';
        }

        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            OSName = '';
        }
        window.open(OSName);
    }
</script>
<script>
    AOS.init();
</script>
</body>

</html>