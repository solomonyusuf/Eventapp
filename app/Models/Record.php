<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Record
 * 
 * @property string $id
 * @property string|null $meta_data
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Record extends Model
{
	use HasUuids;
	protected $table = 'records';
	public $incrementing = false;

	protected $fillable = [
		'meta_data'
	];
}
