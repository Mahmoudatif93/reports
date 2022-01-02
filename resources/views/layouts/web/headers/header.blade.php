<!DOCTYPE html>
<html lang="en" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>مركز التحاليل</title>
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="preconnec    t" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="{{ asset('web_files/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('web_files/css/arabic rtl.css') }}">
    <link rel="stylesheet" href="{{ asset('web_files/scss/custom.css') }}">

    <link rel="stylesheet" href="{{ asset('web_files/css/slick.css') }} ">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-1PEBCRJLJW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-1PEBCRJLJW');
</script>
    <style>
        .navbar-nav {
            margin-left: auto;
        }

        .nav-link {
            color: #80ADD5;
            font-size: 20px;
            transition: .3s;
            margin-left: 31px;
        }

        .nav-link:hover {
            color: #015CAB;
        }

        ul.navbar-nav {
            align-items: baseline;
        }

        a#menu {
            display: flex;
            align-items: flex-start;
        }

        .cart {
            position: relative;
            margin-left: 30px;
        }

        .cart a {
            display: flex;
            color: #015CAB;
            font-size: 20px;
        }

        .cart a figure {
            margin-right: 17px;
            margin-bottom: 0;
        }

        .cart a figure svg {
            width: 22px;
            fill: #015CAB;
        }


        span.count {
            position: absolute;
            top: -7px;
            right: 50px;
            font-size: 14px;
            background: #015CAB;
            border-radius: 50%;
            width: 19px;
            height: 19px;
            color: white;
            align-items: center;
            display: flex;
            justify-content: center;
        }


        li.menu-area {
            position: relative;
        }

        .menu {
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        /* .dropdown-menu {
            opacity: 0;
            position: absolute;
            margin-top: 20px;
            right: -7px;
            background: #f5f5f5;
            width: 350px;
            border-radius: 8px;
            transition: 0.5s all ease;
            padding: 18px 10px;
            padding-right: 18px;
        }

        .dropdown-menu .details a {
            display: block;
        }
*/
        .item {
            align-items: center;
        }

        .item-details {
            display: flex;
        }

        .info {
            text-align: left;
            margin-top: 10px;
        }

        .info h4 {
            font-weight: 600;
            font-size: 20px;
        }

        .info p {
            padding-top: 5px;
            font-size: 20px;
        }


        .total {
            display: flex;
            align-items: center;
            border-top: 1px solid #80add5;
            padding-top: 15px;
            margin-top: 15px;
        }

        .price {
            display: flex;
            align-items: center;
            font-size: 20px;
        }

        .price span {
            color: #80add5;
        }

        .price p {
            color: #015CAB;
            padding-left: 10px;
            font-weight: 600;
        }


        .view-btn {
            background: #015CAB;
            padding: 15px;
            width: 100px;
            margin-left: auto;
            border-radius: 5px;
        }

        .view-btn a {
            color: white;
        }


        .show-dropdown-menu {
            opacity: 1;
            transition: 0.5s all ease;
        }


        .navbar-dark .navbar-toggler {
            background-color: #015CAB;
            margin-left: auto;
            margin-right: 15px;
        }


        .navbar-collapse .navbar-nav .nav-item {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="social">
                <a href="https://www.facebook.com//">
                    <figure>
                        <svg viewBox="0 0 23.469 23.469">
                            <use xlink:href="{{ asset('web_files/images/sprite.svg#fb') }}"></use>
                        </svg>
                    </figure>
                </a>
                <a href="https://www.linkedin.com/company//">
                    <figure>
                        <svg viewBox="0 0 23.075 23.075">
                            <use xlink:href="{{ asset('web_files/images/sprite.svg#linkedin') }}"></use>
                        </svg>
                    </figure>
                </a>
                <a href="https://www.instagram.com//">
                    <figure>
                        <svg viewBox="0 0 23.1 23.1">
                            <use xlink:href="{{ asset('web_files/images/sprite.svg#insta') }}"></use>
                        </svg>
                    </figure>
                </a>
                <a href="https://www.youtube.com/">
                    <figure>
                        <svg viewBox="0 0 32.999 23">
                            <use xlink:href="{{ asset('web_files/images/sprite.svg#youtube') }} "></use>
                        </svg>
                    </figure>
                </a>
            </div>
       
            </div>
        </div>
    </div>
    <header>
        <div class="container" style="display: inline-block">
              <div class="row">
                   
                     <div class="col-6 ">
                        <nav class="navbar navbar-expand-md navbar-dark" >
                    

                        
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <ul class="navbar-nav">
                                   

                           
                                    <li class="nav-item">
                                        <a href="{{ route('fakka.products.index') }}">
                                            @lang('site.OurProducts')
                                        </a>
                                    </li>


                                    
                            
                                    <li class="nav-item">
                                        <a href="{{ route('fakka.contactus.index') }}">
                                        تواصل معنا
                                        </a>
                                    </li>


                                </ul>
                            </div>


                        </nav>
                     </div>

                     <div class="col-6 ">
                    </div>
                </div>
        </div>
    </header>
