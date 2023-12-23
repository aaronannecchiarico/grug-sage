  <!-- Clients -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto {{$block->classes}}">
  <!-- Title -->
  <div class="w-2/3 sm:w-1/2 lg:w-1/3 mx-auto text-center mb-6">
    @if($client && $client['client_text'])
      <h2 class="text-gray-600 dark:text-gray-400">@field('client_text')</h2>
    @endif
  </div>
  <!-- End Title -->

  <div class="flex justify-center gap-x-6 sm:gap-x-12 lg:gap-x-24">
    @if($client)
      @foreach ($client['client_icons'] as $icon)
        <div class="flex-shrink-0">
          @svg($icon['svg_icon']['icon'], 'py-3 lg:py-5 w-16 h-16 md:w-20 lg:w-24 lg:h-24 mx-auto sm:mx-0 text-gray-500')
        </div>
      @endforeach
    @endif
  </div>
</div>
<!-- End Clients -->
  <div>
    <InnerBlocks />
  </div>
</div>
