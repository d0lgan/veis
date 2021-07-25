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

	public function stock() {
	    return $this->belongsTo('App\Stock');
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


  //Скоуп для фильтров товаров в каталоге

    public function scopeWithFilters($query, $filters, $prices, $tags, $sale, $childCategories, $IdOfInstantCategory, $IdOfInstantManufacturer, $IdOfInstantTag)
    {
        return $query
            ->when($IdOfInstantCategory, function ($query) use ($childCategories, $IdOfInstantCategory) {
                // Под childCategories подразумеваются все категории.
                $allCats = $childCategories;

                if ($IdOfInstantCategory) {
                    $query->where(function ($subQuery) use ($allCats) {
                        $subQuery->whereIn('category_id', $allCats)->orWhere(function ($que) use ($allCats) {
                            $que->whereHas('categories', function ($q) use ($allCats) {
                                $q->whereIn('categories.id', $allCats);
                            });
                        });
                    });
                }
            })

            ->when($IdOfInstantTag, function ($query) use ($IdOfInstantTag) {
                $query->whereHas('tags', function($q) use ($IdOfInstantTag) {
                    $q->whereIn('tags.id', [$IdOfInstantTag]);
                });
            })

            ->when($IdOfInstantManufacturer, function ($query) use ($IdOfInstantManufacturer) {
                $query->where('manufacturer_id', $IdOfInstantManufacturer);
            })
            ->when(count($filters), function ($query) use ($filters) {
                foreach ($filters as $index => $filter) {
                    // $filters это всегда массив со строками
                    if ($filter == "undefined" || $filter == "[]") continue;
                    $query->whereHas('attributes', function($q) use ($index, $filter) {
                        // $filter это массив, в виде строки, поэтому тут мы преобразовываем его обратно в массив
                        $filter = explode(',', substr($filter, 1, -1));
                        if ($index == 14) {
                            array_push($filter, '62');
                        }

                        if ($index == 18) {
                            $colors = Attribute::whereIn('id', $filter)->get()->pluck('name_ru');
                            $q->whereIn('attributes.name_ru', $colors);
                        } else {
                            $q->whereIn('attributes.id', $filter);
                        }
                    });
                }
            })
            ->when($sale == 'true', function ($query) use ($sale) {
                $query->where('percent', '>', 0);
            })
            ->when($prices, function ($query) use ($prices) {
                $query->whereBetween('price', [$prices[0], $prices[1]]);
            })
            ->when(count($tags), function ($query) use ($tags) {
                $query->whereHas('tags', function($q) use ($tags) {
                    $q->whereIn('tags.id', $tags);
                });
            });

    }

    // Scope по поиску товаров в компоненте поиск

    public function scopeSearchProducts($query, $request) {
        return $query
            ->when($request, function ($query) use ($request) {
                $words = explode(' ', $request);
                foreach ($words as $word) {
                    // Работаем только со словами от трех букв
                    if (strlen($word) < 4) continue;

                    $query->orWhere(function ($q) use ($word) {
                        $q->where('title_ru', 'like', "%$word%")->orWhere('title_uk', 'like', "%$word%");
                    });

                    $attr = Attribute::where('name_ru', 'like', "%$word%")->orWhere('name_uk', 'like', "%$word%")->first();
                    $man = Manufacturer::where('title_ru', 'like', "%$word%")->orWhere('title_ru', 'like', "%$word%")->first();
                    $cat = Category::where('title_ru', 'like', "%$word%")->orWhere('title_ru', 'like', "%$word%")->first();
                    if ($man) {
                        $query->orWhere(function ($query) use ($man) {
                            $query->whereHas('manufacturer', function ($q) use ($man) {
                                $q->where('id', $man->id);
                            });
                        });
                    }
                    if ($cat) {
                        $query->orWhere(function ($subQuery) use ($cat) {
                            $subQuery->whereIn('category_id', $cat)->orWhere(function ($que) use ($cat) {
                                $que->whereHas('categories', function ($q) use ($cat) {
                                    $q->whereIn('categories.id', [$cat->id]);
                                });
                            });
                        });

                    }
                    if ($attr) {
                        $query->orWhere(function ($query) use ($attr) {
                            $query->whereHas('attributes', function ($q) use ($attr) {
                                $q->whereIn('attributes.id', [$attr->id]);
                            });
                        });

                    }
                }
            });
    }

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
