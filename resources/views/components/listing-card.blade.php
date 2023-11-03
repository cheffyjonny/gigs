@props(['listing'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block rounded-xl"
        style="height:140px"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png') }}" />
        <div>
            <h3 class="text-2xl underline decoration-3">
                <a  href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>

            <div class="text-lg font-bold mb-4">{{ $listing->company }}</div>
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-m mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
