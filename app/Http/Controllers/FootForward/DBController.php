<?php

namespace App\Http\Controllers\FootForward;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DBController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function hakunamatata()
    {
        $tests = DB::table('loudcrowd')->get();                              
        $checks = DB::table('colemod_pages')->get();
        $sprawdzimys = DB::table('colemod_pages')->where('id', '2')->pluck('Name');
        $nazwiskos = DB::table('colemod_pages')->where('id', '2')->pluck('Surname');
        $ordery = DB::table('orders')->get();
        $richy = DB::table('orders')->max('Earnings');
        $oldest = DB::table('orders')->max('Age');
        $youngest = DB::table('orders')->min('Age');
        


        return view('pages.testcursorfollow', compact('tests', 'checks', 'sprawdzimys', 'nazwiskos', 'ordery', 'richy', 'oldest', 'youngest'));
    }
    public function inserting(Request $request)
    {
        $firstname = $request->input('firstname');
        $surname = $request->input('surname');
        $email = $request->input('email');
        $comment = $request->input('comment');

        $data = array('firstname'=>$firstname, 'surname'=>$surname, 'email'=>$email, 'comment'=>$comment);

        DB::table('InsertData')->insert($data);
    }
}

