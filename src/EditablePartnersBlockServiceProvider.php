<?php

namespace GIS\EditablePartnersBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditablePartnersBlock\Livewire\Admin\Types\PartnersWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditablePartnersBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        // Config
        $this->mergeConfigFrom(__DIR__ . "/config/editable-partners-block.php", 'editable-partners-block');
    }

    public function boot(): void
    {
        // Views
        $this->loadViewsFrom(__DIR__ . "/resources/views", "epb");

        // Livewire
        $this->addLivewireComponents();

        // Конфиг
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-partners-blocks.customPartnersComponent");
        Livewire::component(
            "epb-partners",
            $component ?? PartnersWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $epb = app()->config["editable-partners-block"];
        $this->expandTemplates($epb);
        $this->expandBlocks($epb);
    }
}
