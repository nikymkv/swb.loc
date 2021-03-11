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

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'rules' => 'System\Models\File',
    ];

    public $attachMany = [
        'gallery' => 'System\Models\File',
        'gallery_mobile' => 'System\Models\File'
    ];
}
