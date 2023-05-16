<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    public function step1(Request $request)
    {
        $q1 = $request->step1_q1;
        $q2 = $request->step1_q2;
        $q3 = $request->step1_q3;
        $q4 = $request->step1_q4;
        $q5 = $request->step1_q5;
        $q6 = $request->step1_q6;
        $q7 = $request->step1_q7;

        Session::put("step1", ($q1+$q2+$q3+$q4+$q5+$q6+$q7));
        
        return redirect("question?category=2");
    }

    public function step2(Request $request)
    {
        $q1 = $request->step2_q1;
        $q2 = $request->step2_q2;
        $q3 = $request->step2_q3;
        $q4 = $request->step2_q4;
        $q5 = $request->step2_q5;

        Session::put("step2", ($q1+$q2+$q3+$q4+$q5));
        
        return redirect("question?category=3");
    }

    public function step3(Request $request)
    {
        $q1 = $request->step3_q1;
        $q2 = $request->step3_q2;
        $q3 = $request->step3_q3;
        $q4 = $request->step3_q4;
        $q5 = $request->step3_q5;
        $q6 = $request->step3_q6;

        Session::put("step3", ($q1+$q2+$q3+$q4+$q5+$q6));
        
        return redirect("question?category=4");
    }

    public function step4(Request $request)
    {
        $q1 = $request->step4_q1;
        $q2 = $request->step4_q2;
        $q3 = $request->step4_q3;
        $q4 = $request->step4_q4;
        $q5 = $request->step4_q5;

        Session::put("step4", ($q1+$q2+$q3+$q4+$q5));
        
        return redirect("question?category=5");
    }

    public function step5(Request $request)
    {
        $q1 = $request->step5_q1;
        $q2 = $request->step5_q2;
        $q3 = $request->step5_q3;
        $q4 = $request->step5_q4;
        $q5 = $request->step5_q5;
        $q6 = $request->step5_q6;
        $q7 = $request->step5_q7;

        Session::put("step5", ($q1+$q2+$q3+$q4+$q5+$q6+$q7));
        
        return redirect("question?category=6");
    }

    public function step6(Request $request)
    {
        $q1 = $request->step6_q1;
        $q2 = $request->step6_q2;
        $q3 = $request->step6_q3;
        $q4 = $request->step6_q4;
        $q5 = $request->step6_q5;

        Session::put("step6", ($q1+$q2+$q3+$q4+$q5));
        
        return redirect("thankyou");
    }

}
