<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatalogDropDown extends Model
{

    protected $table = 'catalog_dropdown';
    protected $fillable = ['title_ru', 'title_uk', 'link_ru', 'link_uk'];

}
