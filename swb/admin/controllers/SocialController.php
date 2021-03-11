<?php namespace Swb\Admin\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class SocialController extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Swb.Admin', 'main-menu-item', 'socials-menu-item');
    }
}
