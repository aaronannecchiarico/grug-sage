<div class="{{ $block->classes }}">
	@if ($cards)
		<!-- Icon Blocks -->
		<div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
			<div class="grid items-center gap-6 sm:grid-cols-2 md:gap-10 lg:grid-cols-3">
				<!-- Card -->
        @foreach ($cards as $card)
          <div class="h-full w-full rounded-lg bg-white p-5 shadow-lg" >
            <div class="mb-3 flex items-center gap-x-4">
              <div
                class="inline-flex h-[62px] w-[62px] items-center justify-center rounded-full border-4 border-blue-50 bg-blue-100">
                <i class="h-6 w-6 flex-shrink-0 text-blue-600 text-3xl {{ $card['icon']['icon'] }}"></i>
              </div>
              <div class="flex-shrink-0">
                <h3 class="block text-lg font-semibold text-gray-800">{{ $card['title'] }}</h3>
              </div>
            </div>
            <p class="text-gray-600">{{ $card['subtitle'] }}</p>
          </div>
        @endforeach
				<!-- End Card -->
			</div>
		</div>
		<!-- End Icon Blocks -->
	@else
		<p>{{ $block->preview ? 'Add a feature card' : 'No items found!' }}</p>
	@endif

	<div>
		<InnerBlocks />
	</div>
</div>
