<?php namespace Swb\Feedback;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Swb\Feedback\Components\FeedbackForm' => 'feedbackform',
        ];
    }

    public function registerSettings()
    {
    }

    public function registerMailTemplates()
    {
        return [
            'swb.feedback::mail.message',
        ];
    }
}
