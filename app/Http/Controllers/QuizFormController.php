<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quizform;
use App\Models\Quiz;
use App\Models\User;
use DB;
use Inertia\Inertia;


class QuizformController extends Controller
{


    public function index()
    {

      //  return Inertia::render('Home');


        /*
        $quizzes = Quiz::all();
        $quizforms = Quizform::all();
        $quizforms = Quizform::paginate(5);
        return view('quizforms.index', compact('quizforms'));
         */
         $questions=Quizform::with(['users'=>function($query){
         $query->inRandomOrder();
    }])->inRandomOrder()->get();

         return Inertia::render('Quizform',[
            'quizforms'=>$questions,

         ]);




    }


    public function create()
    {
        $quizzes = Quiz::all();
        $quizforms = Quizform::all();
        return view('quizforms.create', compact('quizforms', 'quizzes'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|array',
            'solve' => 'required|array',
        ]);

        $questions = $request->input('question');
        $solves = $request->input('solve');

        foreach ($questions as $index => $question) {
            $question = $questions[$index];

            $datasave = [
                'question' => $question,

            ];
            DB::table('quizforms')->insert($datasave);
        }
        foreach ( $solves as $index => $solve) {
            $solve = $solves[$index];

            $datasave = [

                'solve' => $solve,
            ];
            DB::table('quizforms')->insert($datasave);
        }

        return redirect()->route('quizforms.index');
    }

    public function show(Quizform $quizform)
    {

        $quizforms = Quizform::all();

        return view('quizforms.index', compact('quizform','quizzes'));
    }


    public function show(Quizform $quizform)
    {
        return Inertia::render('Quizform/Show', [
          'quizform' => $quizform
        ]);
    }


    public function update(Request $request, Quizform $quizform)
    {

        $quizform->feedback = $request->feedback;
        $quizform->teacher_id = $request->teacher_id;
        $quizform->student_id = $request->student_id;
        $quizform->question= $request->question;
        $quizform->solve= $request->solve;
        $quizform->quiz_id= $request->quiz_id;
        $quizform->save();

        return redirect()->route('quizforms.index');
    }


    public function destroy(Quizform $quizform)
    {
        $quizform->delete();
        return redirect()->route('quizforms.index');
    }
}
