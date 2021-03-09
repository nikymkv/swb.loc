<?php namespace Swb\Admin\Models;

use Model;

/**
 * Model
 */
class About extends Model
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
    public $table = 'swb_admin_about';

    public $translatable = [
        'title_1',
        'title_2',
        'label_left',
        'label_right',
        'location_1',
        'location_2',
        'text_duration',
        'between',
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
