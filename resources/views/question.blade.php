<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2ff4523554.js" crossorigin="anonymous"></script>
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="banner">
        {{-- <a href="{{ url('home') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt="" srcset=""></a> --}}
        <div class="banner-inner-wrapper">
            <div class="left-col">
                <div class="header-inner-heading">
                    <div class="black your">{{ $headingOne }}</div>
                    <div class="safety lg-heading1">{{ $headingTwo }}</div>
                    <div class="score lg-heading2">
                        {{ $headingThree }}
                    </div>
                    <div class="lg-heading3">{{ $headingFour }} <span class="lg-heading2">{{ $headingFive }}</span></div>
                </div>
            </div>
            <div class="right-col">
                <img src="{{ asset('img/'.$bannerImage) }}" alt="" srcset="">
            </div>
        </div>
    </div>



@yield('content')
    
   

    <div class="footer-top">
        <img src="{{ asset('img/footer1.png') }}" alt="" srcset="">
    </div>

    <div class="footer-bottom">
        <img src="{{ asset('img/footer end.png') }}" alt="" srcset="">
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>