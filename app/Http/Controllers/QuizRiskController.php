<?php

namespace App\Http\Controllers;

use App\Models\QuizRisk;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuizRiskRequest;
use App\Http\Requests\UpdateQuizRiskRequest;
use App\Models\ResultQuizResiko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizRiskController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function indexBiodata()
    {
        return view('user.quiz-resiko.data-diri', [
            'title' => 'Quiz Test Resiko'
        ]);
    }

    public function index(Request $request, $index = 0)
    {
        $questions = QuizRisk::all();

        // Pastikan index berada dalam rentang pertanyaan
        if ($index < 0 || $index >= $questions->count()) {
            return redirect()->route('tes-resiko', ['index' => 0]);
        }

        // Kirim pertanyaan saat ini ke view
        return view('user.quiz-resiko.index', [
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

    public function next(Request $request, $index)
    {
        // Get the user's answer from the form
        $answer = $request->input('answer');

        // Retrieve previous answers from session
        $answers = Session::get('answers', []);

        // Store the current answer
        $answers[$index] = $answer;
        Session::put('answers', $answers);

        // Redirect to next question or save results if it's the last question
        return redirect()->route('tes-resiko', ['index' => $index + 1]);
    }

    public function store(Request $request)
    {
        // Get the user's answer
        $answers = Session::get('answers', []);

        // Count "Ya" and "Tidak" answers
        $yesCount = count(array_filter($answers, fn($a) => $a === "Ya"));
        $noCount = count(array_filter($answers, fn($a) => $a === "Tidak"));

        // Store results in session
        Session::put('yesCount', $yesCount);
        Session::put('noCount', $noCount);

        $nama = Session::get('nama');
        $alamat = Session::get('alamat');

        $param = '';
        $message = '';
        $title = '';
        if ($yesCount > 2) {
            $title = 'Resiko Tinggi';
            $param = 'high';
            $message = 'Anda berisiko tinggi mengalami kanker leher rahim (serviks). Kami anjurkan untuk melakukan deteksi dini kanker serviks ke Puskesmas terdekat dengan metode IVA (1-5 tahun sekali) dan metode HPV DNA (5 tahun sekali) dengan tetap menjaga gaya hidup sehat dan berhubungan seksual aman serta jaga kebersihan vagina dengan benar.';
        } else {
            $title = 'Beresiko';
            $param = 'normal';
            $message = 'Anda mungkin berisiko mengalami infeksi virus HPV yang dapat  menyebabkan kanker leher rahim (serviks). Kami sarankan untuk melakukan konsultasi lanjutan ke Puskesmas terdekat dengan tetap menjaga gaya hidup sehat, imunisasi HPV, berhubungan seksual aman, Jaga kebersihan vagina, kelola stress dan melakukan deteksi dini';
        }

        ResultQuizResiko::create([
            'nama' => $nama,
            'alamat' => $alamat,
            'hasil' => $title,
            'jawaban_iya' => $yesCount,
            'jawaban_tidak' => $noCount
        ]);

        // Redirect to the result page after submission
        return redirect()->route('tes-resiko.result')->with($param, $message);
    }

    public function storeBiodata(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        Session::put('nama', $nama);
        Session::put('alamat', $alamat);

        return redirect()->route('tes-resiko', ['index' => 0]);
    }

    public function result()
    {
        $yesCount = Session::get('yesCount', 0);
        $noCount = Session::get('noCount', 0);

        return view('user.quiz-resiko.result', compact('yesCount', 'noCount'));
    }
    /**
     * Display the specified resource.
     */
    public function show(QuizRisk $quizRisk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuizRisk $quizRisk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRiskRequest $request, QuizRisk $quizRisk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuizRisk $quizRisk)
    {
        //
    }
}
