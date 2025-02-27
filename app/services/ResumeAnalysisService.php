<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

use OpenAI;

class ResumeAnalysisService
{
    protected $apiUrl = 'https://api-inference.huggingface.co/models/';

    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = config('services.huggingface.api_key');
    }

    public function analyzeResume($resumeText)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->post("https://api-inference.huggingface.co/models/facebook/bart-large-mnli", [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.huggingface.api_key'),
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'inputs' => $resumeText,
                'parameters' => [
                    'candidate_labels' => ['Software Engineer', 'Frontend Developer', 'Backend Developer', 'Full Stack Developer']
                ]
            ],
        ]);

        return json_decode($response->getBody(), true);
    }
}
