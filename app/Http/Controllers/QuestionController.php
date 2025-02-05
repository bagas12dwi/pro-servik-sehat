<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\ResultQuiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexBiodata()
    {
        return view('user.quiz.data-diri', [
            'title' => 'Quiz'
        ]);
    }


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

    public function submitAnswer(Request $request, $index)
    {
        $questions = Question::all();

        if ($index < 0 || $index >= $questions->count()) {
            return redirect()->route('quiz', ['index' => 0]);
        }

        $currentQuestion = $questions[$index];
        $userAnswer = $request->input('answer');

        // Retrieve or initialize session count
        $correctCount = Session::get('correctCount', 0);
        // Update correct count if answer is correct
        if ($userAnswer == $currentQuestion->answer) {
            $correctCount++;
            Session::put('correctCount', $correctCount);
        }

        // Check if there are more questions
        if ($index + 1 < $questions->count()) {
            return redirect()->route('quiz', ['index' => $index + 1]);
        } else {
            ResultQuiz::create([
                'nama' => Session::get('nama'),
                'alamat' => Session::get('alamat'),
                'score' => $correctCount,
            ]);
            return redirect()->route('quiz.result');
        }
    }


    public function result()
    {
        $correctCount = Session::get('correctCount', 0);
        session()->forget('correctCount'); // Reset count after quiz ends
        $questions = Question::all();

        return view('user.quiz.result', [
            'correctCount' => $correctCount,
            'questionsCount' => $questions->count(),
        ]);
    }

    public function storeBiodata(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        Session::put('nama', $nama);
        Session::put('alamat', $alamat);

        return redirect()->route('quiz', ['index' => 0]);
    }

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
