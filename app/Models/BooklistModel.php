<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BooklistModel extends Model
{
   protected $table = 'bookslist';
   protected $guarded =['created_at','updated_at'];
}
