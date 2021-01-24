<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Aginev\SearchFilters\Filterable;

class Product extends Model
{
	use Sluggable;
	/**
	 * Return the sluggable configuration array for this model.
	 *
	 * @return array
	 */
	public function sluggable()
	{
		return [
			'slug_ru' => [
				'source' => 'title_ru'
			],
            'slug_uk' => [
                'source' => 'title_uk'
            ]
		];
	}

	protected $table = 'products';

	protected $fillable = [
	    'title',
        'description',
        'image',
        'alt',
        'new_price',
        'manufacturer_id',
        'manufacturer_title',
        'price',
        'how_size',
        'how_size_image',
        'undiscounted',
        'vendor_code',
        'ude',
        'course',
        'percent',
        'stock',
        'price_stock',
        'lens_height',
        'lens_width',
        'bridge_width',
        'long_arms',
        'frame_width',
        'type_stock',
        'start_stock',
        'end_stock',
        'availability',
        'model',
        'supplier',
        'meta_h1',
        'category_id',
        'category_title',
        'type',
        'public',
        'slug',
        'seo',
        'created_at',
        'updated_at'
    ];

	public function category()
	{
		return $this->belongsTo('App\Category');
        //return $this->belongsToMany('App\Category','product_category');
	}

	public function tags() {
		return $this->belongsToMany('App\Tag','product_tag');
	}

    public function categories() {
        return $this->belongsToMany('App\Category','product_category');
    }

	public function orders(){
		return $this->belongsToMany('App\Order');
	}

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

	public function galleries()
	{
		return $this->hasMany('App\Gallery')->orderBy('sort');
	}

	public function manufacturer()
	{
		return $this->belongsTo('App\Manufacturer');
	}

	public function attributes() {

		return $this->belongsToMany('App\Attribute','product_attribute');

	}

    public function productValues() {

        return $this->belongsToMany('App\ProductValue', 'product_product_values');

    }

    public function relations(){

	    return $this->belongsToMany('App\Product', 'relations', 'product_id', 'relation_id');

    }

    public function getCurrencyRate($value) {

        if(!Session::has('currency')) {
            Session::put('currency', 'UAH');
        }


    }

  /* public static function boot()
    {
        parent::boot();

        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($product)
        {
            $product->galleries()->delete();
        });
    }*/



    /**
	 * Set query filters
	 * https://github.com/aginev/search-filters
	 * Overwrite this method in the model to set query filters
	 */
	use Filterable;
	public function setFilters()
	{
		$this->filter->equal('id')
			->custom('attribute_id', function ($query, $key, $value) {
				$query->whereHas('attributes', function ($query) use ($value){
					$query->whereIn('attribute_id', $value);
				});
			}, function ($by, $dir, $query) {$query->orderBy($by, $dir);
		})
			->equal('manufacturer_id')
			->between('new_price')
			->between('price');

//	->equal('column')                  // column = filter_value
//	->distinct('column')               // column <> filter_value
//	->greaterThan('column')            // column > filter_value
//	->greaterOrEqualThan('column')     // column >= filter_value
//	->lessThan('column')               // column < filter_value
//	->lessOrEqualThan('column')        // column <= filter_value
//	->like('column')                   // column LIKE '%filter_value%'
//	->llike('column')                  // column LIKE '%filter_value'
//	->rlike('column')                  // column LIKE 'filter_value%'
//	->between('column')                // column BETWEEN filter_value[0] AND filter_value[1]
//	->notBetween('column')             // column NOT BETWEEN filter_value[0] AND filter_value[1]
//	->in('column')                     // column IN (filter_value[0], ..., filter_value[N])
//	->notIn('column')                  // column NOT IN (filter_value[0], ..., filter_value[N])
//	->null('column')                   // column IS NULL
//	->notNull('column')                // column IS NOT NULL
//	->date('column')                   // column DATE(column) = filter_value
//	->dateBetween('column');           // column DATE(column) BETWEEN filter_value[0] AND filter_value[1]
	}
}
