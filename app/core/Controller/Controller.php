<?php
namespace ColognePictureGallery\Controller;

/**
 * 
 * @tonisun
 */
interface Controller {
    public function fetchAll(): array | null;
}