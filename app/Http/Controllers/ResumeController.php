<?php

namespace App\Http\Controllers;
use App\Services\ResumeAnalysisService;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function analyze(Request $request, ResumeAnalysisService $resumeAnalyzer)
{
    $resumeText = $request->input('resume_text'); // Assume text is extracted from PDF

    $analysisResult = $resumeAnalyzer->analyzeResume($resumeText);

    return response()->json(['analysis' => $analysisResult]);
}   
}
