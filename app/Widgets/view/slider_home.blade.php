@if($slide_home)
<div class="row">
    <div class="col-md-12">
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <div class="carousel-inner">
		<?php $item_class = ' active'; ?>
		<?php foreach($products as $product): ?>
        <div class="block_carousel item<?= $item_class ?>">
			<?php $item_class = ''; /* убираем 'active' для следующих */ ?>
                <div class="col-md-6">
                    @if(empty($product->image))
                        <img class="im_page_slide" style="width: 100%;" src="{{URL::to('/public')}}/house/uploads/images_none.png">
                    @else
                        <img class="im_page_slide" style="width: 100%;" src="{{URL::to('/public')}}/house/uploads/{{$product->image}}">
                    @endif
                </div>

                <div class="col-md-6">
                    <div style="margin-left: 30%">
                        <h2>{{$product->title }}</h2>
                        <p><a href="{!! route('product', $product->slug) !!}" class="btn btn-primary" role="button">Просмотреть</a></p>
                    </div>
                </div>
        </div>
		<?php endforeach; ?>
    </div>

    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
    </div>
</div>
    @endif