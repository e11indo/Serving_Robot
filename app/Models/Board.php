<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Board extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = ['name','company','time','number','content','email'];

    public function searchableAs()
    {
        return 'boards';
    }
    /* id는 고유키값이라 자동생성 */
    /* created_at과 updated_at 컬럼은 자동으로 생성 */
    /* 생성하기 싫다면 public $timestamps = false 적기 */
}