<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $index = 0)
    {
        // Ambil semua pertanyaan dari database
        $questions = Question::all();

        // Pastikan index berada dalam rentang pertanyaan
        if ($index < 0 || $index >= $questions->count()) {
            return redirect()->route('quiz', ['index' => 0]);
        }

        // Kirim pertanyaan saat ini ke view
        return view('user.quiz.index', [
            'questions' => $questions,
            'currentIndex' => $index,
            'currentQuestion' => $questions[$index],
            'isFirstQuestion' => $index == 0,
            'isLastQuestion' => $index == ($questions->count() - 1),
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
    public function store(StoreQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}
