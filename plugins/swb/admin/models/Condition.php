<?php namespace Swb\Admin\Models;

use Model;

/**
 * Model
 */
class Condition extends Model
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
    public $table = 'swb_admin_condition';

    public $translatable = [
        'title_document',
        'location',
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'rules_ru' => 'System\Models\File',
        'rules_en' => 'System\Models\File',
    ];

    public $attachMany = [
        'gallery_ru' => 'System\Models\File',
        'gallery_mobile_ru' => 'System\Models\File',
        'gallery_en' => 'System\Models\File',
        'gallery_mobile_en' => 'System\Models\File'
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
