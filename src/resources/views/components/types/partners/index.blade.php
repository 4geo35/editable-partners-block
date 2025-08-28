@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @php
        if ($isFullPage) {
            $gridCol = "lg:w-1/3 xl:w-1/6";
        } else {
            $gridCol = "xl:w-1/3 2xl:w-1/4";
        }
    @endphp
    @if ($block->render_title)
        <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
    @endif

    <div class="row justify-between">
        @foreach($block->items as $item)
            <div class="col w-full xs:w-1/2 {{ $gridCol }} mb-indent">
                <x-epb::types.partners.item :$item />
            </div>
        @endforeach
    </div>
@endif
