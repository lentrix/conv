<?php

namespace App\Http\Controllers;

use App\Models\Convention;
use App\Models\Member;
use App\Models\Participation;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WhateverController extends Controller
{
    public function listParticipants(Convention $convention) {
        // $parts = Participation::where('convention_id', $convention->id)->get();
        // $parts->load('member');

        //lazy loading

        // return view('list-participants',[
        //     'parts' => $parts
        // ]);

        //Query Builder approach
        $parts = DB::table('participations')
            ->join('members', 'members.id','=','participations.member_id')
            ->where('participations.convention_id', $convention->id)
            ->select('members.last_name','members.first_name')
            ->get();

        return response()->json($parts);
    }

    public function attended($memberId) {
        $convs = DB::table('conventions')
                ->join('participations','participations.convention_id','=','conventions.id')
                ->where('participations.member_id', $memberId)
                ->select('conventions.title','conventions.venue','conventions.date_from')
                ->get();

        return response()->json($convs);
    }
}
