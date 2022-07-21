<?php if(!empty($images)): ?>
<div class="section">
    <div class="container">
        <div class="image-gallery">
            <?php foreach($images AS $image): ?>
            <figure class="image-gallery-item">
                <img class="image-gallery-image" src="app/core/View/assets/images/<?php echo $image->getFileName(); ?>"
                    alt="Cologne Pics">
                <figcaption><b><?php echo $image->getId(); ?>. <?php echo esc($image->getTitle()); ?></b>
                    <?php echo esc($image->getDescription()); ?>
                </figcaption>
            </figure>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php else: ?>
<p>Es wurden noch keine Bilder erfasst.</p>
<?php endif; ?>