@extends('question')
@section('content')



<form action="{{ URL('step-6') }}" method="post">
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
                <span>Do you keep the cabinet drawers closed after use?</span>
            </div>
            <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="5" name="step6_q1" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4" name="step6_q1" checked>
            </div>
             <div class="col-1 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="3" name="step6_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="2" name="step6_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="1" name="step6_q1" checked>
            </div>
        </div>
    </div>



</div>

{{-- //////////////////////////////////////////////////////////// --}}

<div id="smallScreen" style="display: none;">

    <div class="container mt-2"  style="margin-left: 10px !important;">
        <div class="row">
            <div class="col-12 mb-2" style="margin-left:10px;border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span ><b>1:</b> Do you keep the cabinet drawers closed after use?</span>
            </div>
            <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="5" name="step6_q1" checked >
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4" name="step6_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="3" name="step6_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="2" name="step6_q1" checked>
            </div>
             <div class="col-2 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="1" name="step6_q1" checked>
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
                <span id="question">Do you have a well-maintained first aid kit?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4" name="step6_q2" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0" name="step6_q2" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-5 tableColumns1" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Does the bathtub or shower have a non-slip surface?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN" value="4" name="step6_q3" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0" name="step6_q3" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-5 tableColumns1" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Can all windows be securely locked?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn">
                <input type="radio" class="mt-4 radioBTN" value="4" name="step6_q4" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0" name="step6_q4" checked>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-5 tableColumns1" style="border-top-left-radius: 15px;border-bottom-left-radius: 15px;">
                <span id="question">Is there a list of emergency telephone? Fire, police, emergency, ambulance?</span>
            </div>
            <div class="col-3 text-center ml-2 radioColumn1">
                <input type="radio" class="mt-4 radioBTN"  nvalue="4" ame="step6_q5" checked>
            </div>
             <div class="col-3 text-center ml-2 radioColumn1" style="border-top-right-radius: 15px;border-bottom-right-radius: 15px;">
                <input type="radio" class="mt-4 radioBTN" value="0" name="step6_q5" checked>
            </div>
        </div>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ url('thankyou') }}"><button class="assessmentBtn"><span class="btnSpan">Next</span></button></a>
            </div>
        </div>
    </div>

</form>
@endsection