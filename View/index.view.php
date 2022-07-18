<?php
    include_once('inc/header.php');
?>

<div class="section">
    <div class="container">
        <h4>Meine Bilder</h4>
    </div>
</div>

<?php
echo '<pre>';
var_dump($images[0]);

print_r($images[0]->getId());
echo '</pre>';

?>

<?php if(!empty($images)): ?>
<div class="section">
    <div class="container">
        <div class="image-gallery">
            <?php foreach($images AS $image): ?>
            <figure class="image-gallery-item">
                <img class="image-gallery-image" src="/View/assets/images/<?php echo $image->getFileName(); ?>"
                    alt="Kerl1">
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

<?php
    include_once('inc/footer.php');
?>