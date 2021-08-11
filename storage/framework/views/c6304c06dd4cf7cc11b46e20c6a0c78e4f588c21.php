<?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="tab-pane <?php echo e($key == 0 ? 'active' : null); ?>"
         id="<?php echo e($id); ?>_<?php echo e($type); ?>_<?php echo e($lang->locate_code); ?>">
        <?php if($title): ?>
            
            <?php $method = "title_" . $lang->locate_code ?>
            <div class="form-group">
                <label for="title_<?php echo e($lang->locate_code); ?>"><?php echo e(isset($title_name) ? $title_name . ':' : 'Название:'); ?></label>
                <input required name="title_<?php echo e($lang->locate_code); ?>"
                       id="title_<?php echo e($lang->locate_code); ?>"
                       value="<?php echo e(@optional($item)->$method); ?>"
                       placeholder="Title <?php echo e(strtoupper($lang->locate_code)); ?>"
                       type="text"
                       class="form-control"/>
            </div>
        <?php endif; ?>

        <?php if($meta): ?>
                <?php $method = "meta_h1_" . $lang->locate_code ?>
            <div class="form-group">
                <label for="meta_<?php echo e($lang->locate_code); ?>">Meta Заголовок:</label>
                <input type="text"
                       id="meta_<?php echo e($lang->locate_code); ?>"
                       name="meta_<?php echo e($lang->locate_code); ?>"
                       class="form-control"
                       value="<?php echo e(// json_encode(@optional($item)->data[$lang->locate_code]['meta'] ?: old('meta_' . $lang->locate_code)) == 'null' ? @optional($item)->meta_h1 : @optional($item)->data[$lang->locate_code]['meta'] ?: old('meta_' . $lang->locate_code)
                        @optional($item)->$method); ?>"
                       placeholder="Meta H1 <?php echo e(strtoupper($lang->locate_code)); ?>"/>
            </div>
        <?php endif; ?>

            <?php if(isset($page_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text"  name="slug" value="<?php echo e($page->slug); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($tag_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" <?php if($item): ?> value="<?php echo e($lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk); ?>" <?php endif; ?> name="slug_<?php echo e($lang->locate_code); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($prod_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text"  name="slug_<?php echo e($lang->locate_code); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($category_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_<?php echo e($lang->locate_code); ?>" value="<?php echo e($lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($category_create_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input name="slug_<?php echo e($lang->locate_code); ?>"  type="text" value="" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($manufacturer_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_<?php echo e($lang->locate_code); ?>" value="<?php echo e($lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($manufacturer_create_url)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug" value="" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($page_type)): ?>
                <div class="form-group">
                    <label for="type">Тип</label>
                    <input type="text" required name="type" value="<?php echo e($page->type); ?>" class="form-control">
                </div>
            <?php endif; ?>

            <?php if(isset($long_title)): ?>
                <div class="form-group">
                    <label for="long_title_<?php echo e($lang->locate_code); ?>">Значение (в карточке товара):</label>

                    <textarea placeholder="<?php echo e(strtoupper($lang->locate_code)); ?>" name="long_title_<?php echo e($lang->locate_code); ?>" id="long_title_<?php echo e($lang->locate_code); ?>" cols="30" rows="3" class="form-control"><?php echo e(@optional($item)->data[$lang->locate_code]['long_title'] ?: old('title_' . $lang->locate_code)); ?></textarea>

                </div>
            <?php endif; ?>
            <?php if(isset($short_description)): ?>
                <div class="form-group">
                    <label for="desc">Краткое описание:</label>
                    <editor-component :name="<?php echo e(json_encode('short_description_' . $lang->locate_code)); ?>" :v="<?php echo e(json_encode(@optional($item)->data[$lang->locate_code]['short_desc'] ?: old('short_description_' . $lang->locate_code))); ?>"></editor-component>
                    

                </div>
            <?php endif; ?>
        <?php if($description): ?>
            <div class="form-group">
                

                <label for="desc">Описание:</label>
                <div class="w-100">
                    <editor-component :name="<?php echo e(json_encode('description_' . $lang->locate_code)); ?>" :v="<?php echo e($lang->locate_code == 'ru' ? json_encode(@optional($item)->description_ru) : json_encode(@optional($item)->description_uk)); ?>"></editor-component>

                </div>

            </div>
        <?php endif; ?>
            <?php if(isset($slider)): ?>
                <div class="form-group pl-0">
                    <label for="button_<?php echo e($lang->locate_code); ?>">Название кнопки:</label>
                    <input type="text" name="button_<?php echo e($lang->locate_code); ?>" id="button_<?php echo e($lang->locate_code); ?>" class="form-control" value="<?php echo e(@optional($item)->data[$lang->locate_code]['button'] ?: old('button_' . $lang->locate_code)); ?>">
                </div>
                
                <div class="form-group">
                    <label for="additional_button_<?php echo e($lang->locate_code); ?>">Название дополнительной кнопки:</label>
                    <input type="text" name="additional_button_<?php echo e($lang->locate_code); ?>" id="additional_button_<?php echo e($lang->locate_code); ?>" class="form-control" value="<?php echo e(@optional($item)->data[$lang->locate_code]['additional_button'] ?: old('additional_button_' . $lang->locate_code)); ?>">
                </div>
                
            <?php endif; ?>
            <?php if(isset($additional)): ?>
                <div class="form-group">
                    <label for="additional_title_<?php echo e($lang->locate_code); ?>">Дополнительное поле:</label>
                    <input name="additional_title_<?php echo e($lang->locate_code); ?>"
                           id="additional_title_<?php echo e($lang->locate_code); ?>"
                           value="<?php echo e(@optional($item)->data[$lang->locate_code]['additional_title'] ?: old('additional_title_' . $lang->locate_code)); ?>"
                           placeholder="Дополнительное поле <?php echo e(strtoupper($lang->locate_code)); ?>"
                           type="text"
                           class="form-control"/>
                </div>
            <?php endif; ?>
            <?php if(isset($additional)): ?>
                <div class="form-group">
                    <label for="desc">Описание:</label>
                    <editor-component :name="<?php echo e(json_encode('additional_' . $lang->locate_code)); ?>" :v="<?php echo e(json_encode(@optional($item)->data[$lang->locate_code]['additional'] ?: old('additional_' . $lang->locate_code))); ?>"></editor-component>
                </div>
                <div class="form-group">
                    <label for="how_size_<?php echo e($lang->locate_code); ?>">Название кнопки "Как узнать размер":</label>
                    <input name="how_size_<?php echo e($lang->locate_code); ?>"
                           id="how_size_<?php echo e($lang->locate_code); ?>"
                           value="<?php echo e(@optional($item)->data[$lang->locate_code]['how_size'] ?: old('how_size_' . $lang->locate_code)); ?>"
                           placeholder="<?php echo e(strtoupper($lang->locate_code)); ?>"
                           type="text"
                           class="form-control"/>
                </div>
            <?php endif; ?>

            <?php if(isset($slug)): ?>
                <div class="form-group">
                    <label for="slug">Url</label>
                    <input type="text" name="slug_<?php echo e($lang->locate_code); ?>" value="<?php echo e($lang->locate_code == 'ru' ? $item->slug_ru : $item->slug_uk); ?>" class="form-control">
                </div>
            <?php endif; ?>
        <?php if(isset($setting)): ?>
                <div class="form-group">
                    <label for="new_<?php echo e($lang->locate_code); ?>">Название вкладки "Новики"</label>
                    <input type="text" name="new_<?php echo e($lang->locate_code); ?>" id="new_<?php echo e($lang->locate_code); ?>" class="form-control" value="<?php echo e(@optional($item)->data[$lang->locate_code]['new'] ?: old('new' . $lang->locate_code)); ?>">
                </div>
                <div class="form-group">
                    <label for="sell_<?php echo e($lang->locate_code); ?>">Название вкладки "Распродажа"</label>
                    <input type="text" name="sell_<?php echo e($lang->locate_code); ?>" id="sell_<?php echo e($lang->locate_code); ?>" class="form-control" value="<?php echo e(@optional($item)->data[$lang->locate_code]['sell'] ?: old('sell_' . $lang->locate_code)); ?>">
                </div>
        <?php endif; ?>
        <?php if($seo): ?>
            <div class="form-group">
                <label for="seo_<?php echo e($lang->locate_code); ?>">SEO описание:</label>

                <editor-component :name="<?php echo e(json_encode('seo_' . $lang->locate_code)); ?>" :v="<?php echo e($item ? json_encode($lang->locate_code == 'ru' ? $item->seo_ru : $item->seo_uk) : 'seo'); ?>"></editor-component>
                
            </div>
        <?php endif; ?>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/admin/partials/url.blade.php ENDPATH**/ ?>