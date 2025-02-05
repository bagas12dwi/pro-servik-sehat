<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ResultQuiz;
use App\Models\ResultQuizResiko;
use Illuminate\Http\Request;

class HasilQuizController extends Controller
{
    public function index(Request $request)
    {
        $query = ResultQuiz::orderBy('created_at', 'DESC');

        if ($request->has('searchorders') && $request->searchorders) {
            $query->where('nama', 'like', '%' . $request->searchorders . '%')
                ->orWhere('alamat', 'like', '%' . $request->searchorders . '%');
        }

        if ($request->has('year') && $request->year) {
            $query->whereYear('created_at', $request->year);
        }

        $years = ResultQuiz::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        $result = $query->paginate(10);
        return view('admin.pages.hasil-quiz.index', [
            'title' => 'Hasil Quiz',
            'results' => $result,
            'years' => $years
        ]);
    }

    public function indexResiko(Request $request)
    {
        $query = ResultQuizResiko::orderBy('created_at', 'DESC');

        if ($request->has('searchorders') && $request->searchorders) {
            $query->where('nama', 'like', '%' . $request->searchorders . '%')
                ->orWhere('alamat', 'like', '%' . $request->searchorders . '%');
        }

        if ($request->has('year') && $request->year) {
            $query->whereYear('created_at', $request->year);
        }

        $years = ResultQuizResiko::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        $result = $query->paginate(10);
        return view('admin.pages.hasil-quiz-resiko.index', [
            'title' => 'Hasil Quiz Faktor Resiko Kanker Serviks',
            'results' => $result,
            'years' => $years
        ]);
    }
}
