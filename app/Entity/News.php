<?php
/**
 * Created by PhpStorm.
 * User: powman
 * Date: 16/7/21
 * Time: 上午3:49
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $primaryKey = 'id';
}

