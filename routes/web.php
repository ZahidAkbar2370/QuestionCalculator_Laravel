<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
     Session::forget("step1");
    Session::forget("step2");
    Session::forget("step3");
    Session::forget("step4");
    Session::forget("step5");
    Session::forget("step6");
    return view('home');
});


Route::get('question', function () {

    $category = $_GET["category"];

    $bannerImage = "home.png";
    $headingOne = "Check For";
    $headingTwo = "Check For";
    $headingThree = "Check For";
    $headingFour = "Check For";
    $headingFive = "Check For";

    if(isset($category)){
        if($category == 1){
            $bannerImage = "1.png";

            $headingOne = "Check For";
            $headingTwo = "Check For";
            $headingThree = "Check For";
            $headingFour = "Check For";
            $headingFive = "Check For";

            return view("step_1", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }elseif($category == 2){
            $bannerImage = "2.png";

            $headingOne = "Check For1";
            $headingTwo = "Check For1";
            $headingThree = "Check For1";
            $headingFour = "Check For1";
            $headingFive = "Check For";

            return view("step_2", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }elseif($category == 3){
            $bannerImage = "3.png";
           
            $headingOne = "Check For";
            $headingTwo = "Check For";
            $headingThree = "Check For";
            $headingFour = "Check For";
            $headingFive = "Check For";

            return view("step_3", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }elseif($category == 4){
            $bannerImage = "4.png";
            
            $headingOne = "Check For";
            $headingTwo = "Check For";
            $headingThree = "Check For";
            $headingFour = "Check For";
            $headingFive = "Check For";

            return view("step_4", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }elseif($category == 5){
            $bannerImage = "5.jpg";
            
            $headingOne = "Check For";
            $headingTwo = "Check For";
            $headingThree = "Check For";
            $headingFour = "Check For";
            $headingFive = "Check For";

            return view("step_5", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }elseif($category == 6){
            $bannerImage = "home.png";
            
            $headingOne = "Check For";
            $headingTwo = "Check For";
            $headingThree = "Check For";
            $headingFour = "Check For";
            $headingFive = "Check For";

            return view("step_6", [
                "bannerImage" => $bannerImage,
                "headingOne" => $headingOne,
                "headingTwo" => $headingTwo,
                "headingThree" => $headingThree,
                "headingFour" => $headingFour,
                "headingFive" => $headingFive,
                ]
            );
        }
    }

    return view('step_1');
});
Route::post("step-1", "App\Http\Controllers\QuestionController@step1");
Route::post("step-2", "App\Http\Controllers\QuestionController@step2");
Route::post("step-3", "App\Http\Controllers\QuestionController@step3");
Route::post("step-4", "App\Http\Controllers\QuestionController@step4");
Route::post("step-5", "App\Http\Controllers\QuestionController@step5");
Route::post("step-6", "App\Http\Controllers\QuestionController@step6");

Route::get('thankyou', function () {
    $step1 = Session::get("step1");
    $step2 = Session::get("step2");
    $step3 = Session::get("step3");
    $step4 = Session::get("step4");
    $step5 = Session::get("step5");
    $step6 = Session::get("step6");

    $total = $step1 + $step2 + $step3 + $step4 + $step5 + $step6;


    return view('thanksyou', [
        "step1" => $step1,
        "step2" => $step2,
        "step3" => $step3,
        "step4" => $step4,
        "step5" => $step5,
        "step6" => $step6,
        "total" => $total,
    ]);
});

