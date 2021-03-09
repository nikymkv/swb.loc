<?php namespace Swb\Admin\Models;

use Model;

/**
 * Model
 */
class Gift extends Model
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
    public $table = 'swb_admin_gifts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'logo_gift_ru' => 'System\Models\File',
        'logo_gift_en' => 'System\Models\File',
    ];
}
