<?php echo $__env->make('site.technical_mode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo Breadcrumbs::render('product', $product); ?>


    <site-product-component :page="<?php echo e(json_encode($page)); ?>" :translate_watch="<?php echo e(json_encode($translate_watch)); ?>" :translate="<?php echo e(json_encode($translate)); ?>" :product="<?php echo e(json_encode($product)); ?>" :locale="<?php echo e(json_encode($locale)); ?>" :attributes="<?php echo e(json_encode($selected_attr)); ?>" :back="<?php echo e(json_encode(Redirect::back()->getTargetUrl())); ?>" :settings="<?php echo e(json_encode($settings)); ?>"></site-product-component>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

    <script>
        $(function () {
            $('#add_cart').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '<?php echo e(route('productAddToCart',['id' => $product->id])); ?>',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] - 1;
                        $(function () {
                            count++;
                            $("CART").text(count);
                            $("#myModal_add_cart").modal();
                        });
                    },
                    // error: function (msg) {
                    //     alert('Не добавлен!');
                    // }
                });
            });

            $('#prod_plus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '<?php echo e(route('addByOneCardProduct',['id' => $product->id])); ?>',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] - 1;
                        $(function () {
                            count++;
                            $("CART").text(count);
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });
                    },
                });
            });

            $('#prod_minus').on('click', function () {
                var product = $('#product').val();
                $.ajax({
                    url: '<?php echo e(route('reduceByOneCardProduct',['id' => $product->id])); ?>',
                    type: 'get',
                    dataType: 'json',
                    data: {product: product},
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (data) {
                        //передаем в корзину количество
                        count = data['qty_product'] + 1;
                        $(function () {
                            count--;
                            $("CART").text(count);
                            if (count === 0) {
                                alert(data['info_messages']);
                            }
                            alert(data['info_messages']);
                        });

                    },
                });
            });
        });
        $('a.gallery').featherlightGallery({
            // previousIcon: '&#9664;',     /* Code that is used as previous icon */
            // nextIcon: '&#9654;',         /* Code that is used as next icon */
            previousIcon: '«',
            nextIcon: '»',
            galleryFadeIn: 100,          /* fadeIn speed when slide is loaded */
            galleryFadeOut: 300,          /* fadeOut speed before slide is loaded */
            openSpeed: 300
        });
    </script>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-sm" role="dialog" id="myModal_add_cart">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h4><?php echo e($product->title); ?> добавлен в корзину!</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                    <a href="<?php echo e(route('shopping-cart')); ?>" type="button" class="btn btn-primary">Перейти в корзину</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal_one_click" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                        <div class="col-md-6">
                            <img class="im_page" src="<?php echo e(URL::to('/public')); ?>/house/uploads/<?php echo e($product->image); ?>">
                        </div>
                        <div class="col-md-6">
                            <h3><?php echo e($product->title); ?></h3>
                            <?php if($product->new_price): ?>
                                <strong class="prod_price_new">
                                    Цена: <?php echo e($product->new_price); ?> грн.
                                </strong>
                                <strong class="prod_price_old">
                                    <strike><?php echo e($product->price); ?>грн.</strike>
                                </strong>
                            <?php else: ?>
                                <strong class="prod_price_old">
                                    Цена: <?php echo e($product->price); ?>грн.
                                </strong>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <form class="form-inline" role="form" action="<?php echo e(route('orderQuick',$product->id)); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label class="sr-only">Имя</label>
                            <?php if(Auth::check()): ?>
                                <input required type="text" name="name" class="form-control"
                                       value="<?php echo e(Auth::user()->name); ?>">
                            <?php else: ?>
                                <input required type="text" name="name" class="form-control" placeholder="Ваше имя">
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label class="sr-only">Телефон</label>
                            <?php if(Auth::check()): ?>
                                <input required type="text" name="phone" class="form-control"
                                       value="<?php echo e(Auth::user()->phone); ?>">
                            <?php else: ?>
                                <input required type="text" name="phone" class="form-control" placeholder="Телефон">
                            <?php endif; ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Заказать</button>
                        <input type="text" name="type" hidden/>
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\veisshop\resources\views/site/product.blade.php ENDPATH**/ ?>