@extends('question')
@section('content')

<form action="{{ URL('step-1') }}" method="post">
    @csrf

<div id="largeScreen">
    <div class="container mt-2">
        <div class="row text-center">
            <div class="col-4" style="border-top-left-radius: 100px;border-bottom-left-radius: 100px;">
            </div>
            <div class="col-1 text-center ml-2">
                <span>Always</span>
            </div>
             <div class="col-1 text-center ml-2">
                <span>Most of the Time</span>
            </div>
             <div class="col-1 text-center ml-2">
                <span>Sometimes</span>
            </div>
             <div class="col-2 text-center ml-2">
                <span>Only When somebody reminds</span>
            </div>
             <div class="col-1 text-center ml-2" style="border-top-right-radius: 100px;border-bottom-right-radius: 100px;">
                <span>Never</span>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row text-center">
            <div class="col-4 tableColumns" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span>Are all sharp objects kept away from children and elders?</span>
            </div>
            <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="5"  name="step1_q1" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="4"  name="step1_q1" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="3"   name="step1_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="2"  name="step1_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"  value="1"  name="step1_q1" checked>
            </div>
        </div>
    </div>


    <div class="container mt-2">
        <div class="row text-center">
            <div class="col-4 tableColumns1" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px; ">
                <span>Do you keep the floor free from any loose items toys on the floor that can cause a trip?</span>
            </div>
            <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="5"   name="step1_q2" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="4"   name="step1_q2" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="3"   name="step1_q2" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="2"   name="step1_q2" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="1"   name="step1_q2" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row text-center">
            <div class="col-4 tableColumns" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span>Are chemicals and solutions kept out of kids and elders reach?</span>
            </div>
            <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="5"  name="step1_q3" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4"  name="step1_q3" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="3"  name="step1_q3" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="2"  name="step1_q3" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="1"  name="step1_q3" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row text-center">
            <div class="col-4 tableColumns1" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px; ">
                <span>Are rugs secured around all edges?</span>
            </div>
            <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="5"   name="step1_q4" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="4"   name="step1_q4" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="3"   name="step1_q4" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="2"   name="step1_q4" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"  value="1"  name="step1_q4" checked>
            </div>
        </div>
    </div>


</div>

{{-- //////////////////////////////////////////////////////////// --}}

<div id="smallScreen" style="display: none;">

    <div class="container mt-2"  style="margin-left: 10px !important;">
        <div class="row">
            <div class="col-12 mb-2" style="margin-left:10px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span ><b>1:</b> Are all sharp objects kept away from children and elders?</span>
            </div>
            <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="5" name="step1_q1" checked >
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4"  name="step1_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="3"  name="step1_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="2"  name="step1_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"  value="1"  name="step1_q1" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2"  style="margin-left: 10px !important;">
        <div class="row">
            <div class="col-12 mb-2" style="margin-left:10px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span ><b>2:</b> Do you keep the floor free from any loose items toys on the floor that can cause a trip?</span>
            </div>
            <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  value="5" name="step1_q2" checked >
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  value="4" name="step1_q2" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  value="3" name="step1_q2" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  value="2" name="step1_q2" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"  value="1" name="step1_q2" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2"  style="margin-left: 10px !important;">
        <div class="row">
            <div class="col-12 mb-2" style="margin-left:10px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span ><b>3:</b> Are chemicals and solutions kept out of kids and elders reach?</span>
            </div>
            <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="5" name="step1_q3" checked >
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="4" name="step1_q3" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"   value="3" name="step1_q3" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN"  value="2" name="step1_q3" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"  value="1" name="step1_q3" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2"  style="margin-left: 10px !important;">
        <div class="row">
            <div class="col-12 mb-2" style="margin-left:10px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span ><b>4:</b> Are rugs secured around all edges?</span>
            </div>
            <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  value="5" name="step1_q4" checked >
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"   value="4" name="step1_q4" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"   value="3" name="step1_q4" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"   value="2" name="step1_q4" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN"   value="1" name="step1_q4" checked>
            </div>
        </div>
    </div>


</div>





    <div class="container mt-2">
        <hr>
        <div class="row text-center">
            <div class="col-5" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
             </div>
            <div class="col-3 text-center ml-2">
                Yes
            </div>
             <div class="col-3 text-center ml-2">
                No
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-5 tableColumns" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Are all electrical outlets secured with outlet plug covers to protect kids from placing their fingers or objects in it?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4"  name="step1_q5" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0"  name="step1_q5" checked>
            </div>
        </div>
    </div>


    <div class="container mt-2">
       
        <div class="row">
            <div class="col-5 tableColumns1" style= "border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Are all the sharp edges of furniture secured by edge protectors?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="4"  name="step1_q6" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0"  name="step1_q6" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-5 tableColumns" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Are the kids and elders educated regarding not opening door for gifts / prasad from strangers?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4"  name="step1_q7" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0"  name="step1_q7" checked>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <button type="submit" class="assessmentBtn"><span class="btnSpan">Next</span></button>
            </div>
        </div>
    </div>

</form>
@endsection