<?php namespace Swb\Admin\Models;

use Model;

/**
 * Model
 */
class Winner extends Model
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
    public $table = 'swb_admin_winners';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
