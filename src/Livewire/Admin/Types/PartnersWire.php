<?php

namespace GIS\EditablePartnersBlock\Livewire\Admin\Types;


use GIS\EditableBlocks\Interfaces\SimpleItemActionsInterface;
use GIS\EditableBlocks\Traits\CheckBlockAuthTrait;
use GIS\EditableBlocks\Traits\DeleteImageTrait;
use GIS\EditableBlocks\Traits\EditBlockTrait;
use GIS\EditableBlocks\Traits\PlaceholderBlockTrait;
use GIS\EditableBlocks\Traits\SimpleItemActionsTrait;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class PartnersWire extends Component implements SimpleItemActionsInterface
{
    use WithFileUploads, EditBlockTrait, SimpleItemActionsTrait, CheckBlockAuthTrait, PlaceholderBlockTrait;

    public function rules(): array
    {
        $imageRequired = $this->itemId ? "nullable" : "required";
        return [
            "title" => ["required", "string", "max:150"],
            "image" => [$imageRequired, "image"],
        ];
    }

    public function validationAttributes(): array
    {
        return [
            "title" => "Заголовок",
            "image" => "Изображение",
        ];
    }

    public function render(): View
    {
        $items = $this->block->items()->with("recordable")->orderBy("priority")->get();
        return view('epb::livewire.admin.types.partners-wire', compact("items"));
    }
}
