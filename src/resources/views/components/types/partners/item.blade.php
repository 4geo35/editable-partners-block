@props(["item"])
<div class="h-full flex flex-col">
    <div class="rounded-base bg-white shadow-lg mb-indent-xs overflow-hidden text-center">
        @php($fileName = $item->recordable->image->file_name)
        <picture>
            <source media="(min-width: 1280px)" srcset="{{ route('thumb-img', ['template' => 'partners-record', 'filename' => $fileName]) }}">
            <img src="{{ route('thumb-img', ['template' => 'partners-record-tablet', 'filename' => $fileName]) }}" alt=""
                 class="inline-block w-auto object-cover">
        </picture>
    </div>
    <div class="text-center text-[#717171]">{{ $item->title }}</div>
</div>
