<?php namespace Swb\Admin\Models;

use Model;

/**
 * Model
 */
class MainInfo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'swb_admin_main_info';

    public $translatable = [
        'quote',
        'quote_author',
        'description',
        'interesting_title1',
        'interesting_title2',
        'interesting_desc1',
        'interesting_desc2',
        'title_btn',
        'main_title_interest',
        'form_name',
        'form_email',
        'form_phone',
        'form_participant',
        'form_partner',
        'feedback_title',
        'form_btn',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public static function boot()
    {
        parent::boot();
    
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            return;
    
        self::extend(function($model){
            $model->implement[] = 'RainLab.Translate.Behaviors.TranslatableModel';
        });
    }
}
