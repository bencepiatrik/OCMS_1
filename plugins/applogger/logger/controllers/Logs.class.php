<?php

namespace AppLogger\Logger\Controllers;

use AppLogger\Logger\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Response;

class Logs extends BaseController
{
    public function showCreateForm()
    {
        return view('applogger.logger::create-log');
    }

    /**
     * Handle the form submission to create a new log.
     */
    public function createLog(Request $request)
    {
        Log::create($request->only('datum_prichodu', 'meno_uzivatela', 'meskanie'));

        return redirect('/logs')->with('success', 'Log entry created successfully!');
    }


    public function getAllLogs()
    {
        $logs = Log::all();
        return Response::json($logs);
    }

    public function getLogsByUser($username)
    {
        $logs = Log::where('meno_uzivatela', $username)->get();
        return Response::json($logs);
    }
}
