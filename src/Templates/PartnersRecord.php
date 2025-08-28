<?php

namespace GIS\EditablePartnersBlock\Templates;

use Intervention\Image\Interfaces\ImageInterface;
use Intervention\Image\Interfaces\ModifierInterface;

class PartnersRecord implements ModifierInterface
{
    public function apply(ImageInterface $image): ImageInterface
    {
        return $image->pad(220, 109, position: 'center');
    }
}
