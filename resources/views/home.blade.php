<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://kit.fontawesome.com/2ff4523554.js" crossorigin="anonymous"></script>
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="banner">
        {{-- <img class="logo" src="{{ asset('img/logo.png')}}" alt="" srcset=""> --}}
        <div class="banner-inner-wrapper">
            <div class="left-col">
                <div class="header-inner-heading">
                    <div class="black your">Check For</div>
                    <!-- <div class="home lg-heading">
                        <img src="./img/1st.png" alt="">
                        Home
                    </div> -->
                    <div class="safety lg-heading1">Safety</div>
                    <div class="score lg-heading2">
                        A personalised
                        <!-- <img src="./img/2nd.png" alt=""> -->
                    </div>
                    <div class="lg-heading3">home safety <span class="lg-heading2">assessment</span></div>
                </div>
            </div>
            <div class="right-col">
                <img src="{{ asset('img/7.jpg')}}" style="height: 600px !important"  alt="" srcset="">
            </div>
        </div>
    </div>



    <!-- <div class="wdssm">
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

    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                <h6 class="text-center introductionHeading">Introduction:</h6>
                <span class="text-center accessHome">Access Your Home for the safety of your family. Use this checklist to </span>
            </div>
        </div>
    </div>


    <div class="section3" style="margin-bottom: 30px;">
        calculate the <span class="introHeading">"Home Saftey Score"</span> of your home
    </div>


    <!-- <div class="items-list">
        <ul>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
            <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
        </ul>
    </div> -->

    <div class="tos">
        <h3>Introduction:</h3>
        <p>Walk through your home and consider each of the feature true for the option most relatable to your situation for each questions.</p>
        <p class="text-center"><b>You will be scored as per the lavel of safety associated with answers.</b></p>
    </div>

    
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ url('question?category=1') }}"><button class="assessmentBtn"><span class="btnSpan">Take the assessment now!</span></button></a>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 mt-5 text-center">
                <h6 class="text-center introductionHeading">"*Terms & Conditions:</h6>
                <span class="text-center termandcondition">This checklist is not a comprehensive assessment, but a recommendation guide. there may be other things to consider to ensure your safety. Scoring well in this assessment does not gurantee your safety."</span>
            </div>
        </div>
    </div>



    <div class="footer-top">
        <div class="row">
            <div class="col-md-6">
                <h1>sdhfjksda</h1>
            </div>

            <div class="col-md-6">
                <h1>sdhfjksda</h1>
            </div>
        </div>
        <img src="{{ asset('img/footer1.png')}}" alt="" srcset="">
    </div>

    <div class="footer-bottom">
        <img src="{{ asset('img/footer end.png')}}" alt="" srcset="">
    </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>