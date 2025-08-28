<?php

namespace GIS\EditablePartnersBlock\Templates;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class PartnersRecordTablet implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->pad(296, 147, position: 'center');
    }
}
