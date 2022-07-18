<?php
    include_once('inc/header.php');
?>

<div class="section">
    <div class="container">
        <h4>Meine Geile Kerle</h4>
    </div>
</div>

<?php if(!empty($images)): ?>
<div class="section">
    <div class="container">
        <div class="image-gallery">
            <?php foreach($images AS $image): ?>
            <figure class="image-gallery-item">
                <img class="image-gallery-image" src="assets/images/<?php echo $image->getFileName(); ?>" alt="Kerl1">
                <figcaption><b><?php echo $image->getId(); ?>. <?php echo e($image->getTitle()); ?></b>
                    <?php echo e($image->getDescription()); ?>
                </figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php else: ?>
<p>Es wurden noch keine Bilder erfasst.</p>
<?php endif; ?>

<?php
    include_once('inc/footer.php');
?>