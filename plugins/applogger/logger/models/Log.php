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
    protected $table = 'applogger_logger_logs';
    protected $fillable = ['datum_prichodu', 'meno_uzivatela', 'meskanie'];


    /**
     * @var array rules for validation
     */
    public $rules = [];
}
