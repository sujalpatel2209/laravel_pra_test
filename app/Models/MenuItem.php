<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    public function parent() {
        return $this->belongsToOne(MenuItem::class, 'parent_id');
    }

    //each category might have multiple children
    public function children() {
        return $this->hasMany(MenuItem::class, 'parent_id')->with('children');
    }
}
