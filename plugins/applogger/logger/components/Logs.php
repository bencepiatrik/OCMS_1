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
    {
    }
}
