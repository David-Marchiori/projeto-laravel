<?php

namespace App\Http\Controllers;
use App\Models\Recipient;
use App\Http\Requests\RecipientRequest;

class RecipientController extends Controller
{
    public function index() {
        $recipients = Recipient::all();
        return response()->json($recipients, 200);
    }

    public function store(RecipientRequest $request) {
        $recipient = Recipient::create($request->validated());
        return response()->json($recipient, 201);
    }

    public function show(Recipient $recipient) {
        return response()->json($recipient, 200);
    }

    public function update(RecipientRequest $request, Recipient $recipient) {
        $recipient->update($request->validated());
        return response()->json($recipient, 200);
    }

    public function destroy(Recipient $recipient) {
        $recipient->delete();
        return response()->json(null, 204);
    }
}
