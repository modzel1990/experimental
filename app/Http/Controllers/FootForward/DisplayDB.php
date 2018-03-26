<?php

namespace App\Http\Controllers\FootForward;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DisplayDB extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function displaying()
    {
        $commvals = DB::table('InsertData')->get();
        $commvals = $commvals->toArray();

        return view('pages.insert', ['commvals' => $commvals]);
    }

}
