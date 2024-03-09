<x-casteaching-layout>
    <div class="flex flex-col">
        <iframe
            class="md:p-3 lg:p-5 xl:px-10 xl:py-5 2xl:px-20 2xl:py-10"
            height="600"
            src="https://www.youtube.com/embed/kzlB7dvemfM?si=DqjzxTk__SeSLdW6"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>

        <div class="p-4 lg:p-5 xl:p-10 2xl:p-20">
            {{$video->title}}
        </div>

        <div>
            {{$video->description}}
        </div>

        @if ($video->user)
            <h3>{{$video->user->name}}</h3>
        @endif

    </div>
</x-casteaching-layout>
