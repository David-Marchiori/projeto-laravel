<?php

namespace App\Http\Controllers;
use App\Models\Sender;
use App\Http\Requests\SenderRequest;
use Illuminate\Http\Request;    

class SenderController extends Controller
{
    public function index() {
        $senders = Sender::all();
        return response()->json($senders, 200);
    }

    public function store(SenderRequest $request) {
        $sender = Sender::create($request->validated());
        return response()->json($sender, 201);
    }

    public function show(Sender $sender) {
        return response()->json($sender, 200);
    }

    public function update(SenderRequest $request, Sender $sender) {
        $sender->update($request->validated());
        return response()->json($sender, 200);
    }

    public function destroy(Sender $sender) {
        $sender->delete();
        return response()->json(null, 204);
    }

}
