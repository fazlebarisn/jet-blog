{{-- @props(['post']) --}}
<div>
    {{-- <div>
        <img class="w-full rounded-xl"
            src="{{$post->image}}">
    </div> --}}
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <p class="text-gray-500 text-sm">{{ $title }}</p>
        </div>
        <a class="text-xl font-bold text-gray-900">{{ $name }}</a>
    </div>
</div>

