<?php namespace AppLogger\Logger;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails()
    {
        return [
            'name' => 'Logger',
            'description' => 'No description provided yet...',
            'author' => 'AppLogger',
            'icon' => 'icon-leaf'
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        include_once  'plugins/applogger/logger/route.php'; # REVIEW toto by tu nemalo byť treba (ak to teda nesúvisí nejako s tými components)
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'AppLogger\Logger\Components\Logs' => 'logs',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'applogger.logger.some_permission' => [
                'tab' => 'Logger',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'logger' => [
                'label' => 'Logger',
                'url' => Backend::url('applogger/logger/mycontroller'),
                'icon' => 'icon-leaf',
                'permissions' => ['applogger.logger.*'],
                'order' => 500,
            ],
        ];
    }
}
