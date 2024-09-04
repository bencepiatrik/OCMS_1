<?php namespace AppLogger\Logger\Components;

use Cms\Classes\ComponentBase;
use AppLogger\Logger\Models\Log;
use Illuminate\Support\Facades\Redirect;

class Logs extends ComponentBase
{
    public $logs;

    public function componentDetails()
    {
        return [
            'name'        => 'Logs Component',
            'description' => 'Displays a list of logs'
        ];
    }

    public function defineProperties()
    {
        return [
            'username' => [
                'title'       => 'Username',
                'description' => 'The username to filter logs by',
                'default'     => '{{ :username }}',
                'type'        => 'string',
                'required'    => false
            ]
        ];
    }

    public function onRun()
    {/*
        $username = $this->property('username') ?: input('username');

        if (post('create-log')) {
            $this->createLog();
        }

        if (input('username') && $this->property('username')) {
            return Redirect::to($this->controller->pageUrl($this->page->baseFileName, ['username' => input('username')]));
        }

        if ($username) {
            $this->logs = Log::where('meno_uzivatela', $username)->get();
        } else {
            $this->logs = Log::all();
        }

        $this->page['logs'] = $this->logs;
    }

    protected function createLog(): void
    {
        $data = post();
        Log::create([
            'datum_prichodu' => $data['datum_prichodu'],
            'meno_uzivatela' => $data['meno_uzivatela'],
            'meskanie' => $data['meskanie']
        ]);
        //return Redirect::to($this->controller->pageUrl('logs'))->with('success', 'Log entry created successfully!');
    }*/
}}
