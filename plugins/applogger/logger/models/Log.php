<?php namespace AppLogger\Logger\Models;

use Model;

/**
 * Log Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Log extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    protected $table = 'applogger_logs';
    protected $fillable = ['datum_prichodu', 'meno_uzivatela', 'meskanie'];
    public $timestamps = false;


    /**
     * @var array rules for validation
     */
    public $rules = [];
}
