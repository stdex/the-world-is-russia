<?php
namespace FlagMaker;

use Illuminate\Database\Eloquent\Model;

final class Photo extends Model
{
    public function books()
    {
        return $this->hasMany('Bookshelf\Book');
    }
}
