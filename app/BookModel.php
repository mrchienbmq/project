<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = "book";

    protected $primaryKey = "book_id";

    protected $fillable = ["author_id","title","ISBN","pub_year","available"];
}
