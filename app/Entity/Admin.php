<?php
/**
 * Created by PhpStorm.
 * User: powman
 * Date: 16/7/21
 * Time: 上午3:49
 */

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';

    protected $primaryKey = 'id';
}

