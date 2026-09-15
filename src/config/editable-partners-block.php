<?php

return [
    "availableTypes" => [
        "partners" => [
            "title" => env("EDITABLE_PARTNERS_TITLE", "Партнеры"),
            "admin" => "epb-partners",
            "render" => "epb::types.partners",
        ],
    ],
    // Admin
    "customPartnersComponent" => null,
    // Templates
    "templates" => [
        "partners-record" => \GIS\EditablePartnersBlock\Templates\PartnersRecord::class,
        "partners-record-tablet" => \GIS\EditablePartnersBlock\Templates\PartnersRecordTablet::class,
    ],
];
