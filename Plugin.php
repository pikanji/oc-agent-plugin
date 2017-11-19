<?php namespace Pikanji\Agent;

use System\Classes\PluginBase;

/**
 * Agent Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Cocci\Utility\Components\Agent' => 'Agent',
        ];
    }
}
