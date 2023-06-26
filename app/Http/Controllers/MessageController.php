<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::all();
        return view('admin.message.index', [
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            Message::create($request->only('sender_name', 'sender_email', 'subject', 'message'));
            DB::commit();

            return back();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('admin.message.show', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        return view('admin.message.edit', [
            'message' => $message
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        $request->validated();
        DB::beginTransaction();
        try {
            $message->update($request->only('sender_name', 'sender_email', 'subject', 'message'));
            DB::commit();

            return redirect('/admin/message');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        DB::beginTransaction();
        try {
            $message->delete();
            DB::commit();

            return redirect('/admin/message');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
    }
}
