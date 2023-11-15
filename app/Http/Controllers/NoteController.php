<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Http\Requests\NoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\NoteResource;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    public function index():JsonResource
    {
        //    return response()->json(Note::all(),200);
           return NoteResource::collection(Note::all());

    }


    public function store(NoteRequest $request):JsonResponse
    {

        $note = Note::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new NoteResource($note)
        ],201);
    }

    public function show($id):JsonResponse
    {
        $note = Note::find($id);
        return response()->json(new NoteResource($note),200);
    }

  
    public function update(NoteRequest $request,$id):JsonResponse
    {
        $note = Note::find($id);
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();

        return response()->json([
            'success' => true,
            'data' => new NoteResource($note)
        ],200);
    }

    public function destroy(string $id):JsonResponse
    {
        $note = Note::find($id)->delete();
        return response()->json([
            'eliminate'=> new NoteResource($note),
            'success' => true
        ],200);
    }
}
