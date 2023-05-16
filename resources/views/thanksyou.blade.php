<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/2ff4523554.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="banner">
       <a href="{{ url('home') }}"><img class="logo" src="{{ asset('img/logo.png') }}" alt="" srcset=""></a>
        <div class="banner-inner-wrapper">
            <div class="left-col">
                <div class="header-inner-heading">
                    <div class="black your">Your</div>
                    <div class="home lg-heading">
                        <img src="./img/1st.png" alt="">
                        Home
                    </div>
                    <div class="safety lg-heading">Safety</div>
                    <div class="score lg-heading">
                        Score
                        <img src="./img/2nd.png" alt="">
                    </div>
                    <div class="number">is {{ $total ?? 0 }}</div>
                </div>
            </div>
            <div class="right-col">
                <img src="./img/home.png" alt="" srcset="">
            </div>
        </div>
    </div>



    <div class="wdssm">
        <div class="box-shadow">
            <div class="inner-wrapper">
                <div class="heading">What Dies Your<span>Safety Score Mean</span></div>
                <div class="list">
                    <ul>
                        <li>Greater than 90% - <span>A Secured Home</span></li>
                        <li>Greater than 90% - <span>A Secured Home</span></li>
                        <li>Greater than 90% - <span>A Secured Home</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>


    <div class="section3">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard
        dummy text ever since the 1500s, when
    </div>


    <div class="items-list">
        <ul>
            <li>Category # 1 = {{ $step1 ?? 0 }}</li>
            <li>Category # 2 = {{ $step2 ?? 0 }}</li>
            <li>Category # 3 = {{ $step3 ?? 0 }}</li>
            <li>Category # 4 = {{ $step4 ?? 0 }}</li>
            <li>Category # 5 = {{ $step5 ?? 0 }}</li>
            <li>Category # 6 = {{ $step6 ?? 0}}</li>
        </ul>
    </div>

    <div class="tos">
        <h3>Terms & Conditions</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's
            standard
            dummy text ever since the 1500s, when</p>
    </div>


    <div class="footer-top">
        <img src="./img/footer1.png" alt="" srcset="">
    </div>

    <div class="footer-bottom">
        <img src="./img/footer end.png" alt="" srcset="">
    </div>

</body>

</html>