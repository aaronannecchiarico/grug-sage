<div {{ $attributes }}>
	<header class="sticky top-4 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full text-sm">
		<div class="container mx-auto flex flex-col flex-wrap items-center p-5 md:flex-row">
			<a class="title-font mb-4 flex items-center font-medium text-gray-900 md:mb-0"  href="{{ home_url('/') }}">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2" class="h-10 w-10 rounded-full bg-blue-600 p-2 text-white"
					viewBox="0 0 24 24">
					<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
				</svg>
				<span class="ml-3 text-xl">{{ $siteName }}</span>
			</a>
			@if (has_nav_menu('primary_navigation'))
				<nav
					class="flex flex-wrap items-center justify-center text-base md:ml-4 md:mr-auto md:border-l md:border-gray-400 md:py-1 md:pl-4"  aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
					@if($nav_items)
            @foreach ($nav_items as $nav_item)
              <a class="mr-5 hover:text-gray-900" href="{{ $nav_item->url }}">{{ $nav_item->title }}</a>
            @endforeach
          @endif
				</nav>
			@endif
			<button
				class="inline-flex items-center justify-center gap-x-1 rounded-lg border border-transparent bg-blue-600 px-3 py-2 text-sm font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">Button
				<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
					class="ml-1 h-4 w-4" viewBox="0 0 24 24">
					<path d="M5 12h14M12 5l7 7-7 7"></path>
				</svg>
			</button>
		</div>
	</header>
</div>
