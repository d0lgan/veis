<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Магазин SHOP!</title>
    <link href="<?php echo e(asset('css/email_site.css')); ?>" rel="stylesheet">
</head>
<body>

<h1>Новый заказ №<?php echo e($order->id); ?></h1>
<hr>
<p>Клиент: <?php echo e($order->name); ?></p>
<?php if($order->email): ?>
<p>Email: <?php echo e($order->email); ?></p>
<?php endif; ?>
<p>Телефон: <?php echo e($order->phone); ?></p>
<hr>
<p>Перейдите в <a href="<?php echo e(route('admin-orders-index')); ?>">ЗАКАЗЫ</a> для просмотра!</p>
<hr>
</body>
</html>



<?php /**PATH /home/veisdpua/test.veis.dp.ua/resources/views/emails/admin/create_order.blade.php ENDPATH**/ ?>