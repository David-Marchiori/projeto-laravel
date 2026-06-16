<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Services\QuoteService;

class QuoteController extends Controller
{
    public function calculate(QuoteRequest $request, QuoteService $quoteService)
    {
        try {
            $data = $request->validated();

            $result = $quoteService->calculate($data);
            return response()->json($result, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
