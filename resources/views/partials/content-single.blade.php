	<!-- Blog Article -->
	<article class="mx-auto max-w-3xl px-4 pb-12 pt-6 sm:px-6 lg:px-8 lg:pt-10">
		<div class="max-w-2xl">
			<!-- Avatar Media -->
			<div class="mb-6 flex items-center justify-between">
				<div class="flex w-full gap-x-5 sm:items-center sm:gap-x-3">
					<div class="grow">
						<div class="flex items-center justify-between gap-x-2">
							<div>
								<!-- Tooltip -->
								<div class="hs-tooltip inline-block [--placement:bottom] [--trigger:hover]">
									<div class="hs-tooltip-toggle block cursor-pointer text-start sm:mb-1">
										<span class="font-semibold text-gray-800">
											@author
										</span>

										<!-- Dropdown Card -->
										<div
											class="hs-tooltip-content invisible absolute z-10 inline-block max-w-xs cursor-default divide-y divide-gray-700 rounded-xl bg-gray-900 opacity-0 shadow-lg transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
											role="tooltip">
											<!-- Body -->
											<div class="p-4 sm:p-5">
												<div class="mb-2 flex w-full gap-x-5 sm:items-center sm:gap-x-3">
													<div class="flex-shrink-0">
														<img class="h-8 w-8 rounded-full"
															src={{ get_avatar_url(get_the_author_meta('ID')) }}
															alt="Author Image">
													</div>

													<div class="grow">
														<p class="text-lg font-semibold text-gray-200">
															@author
														</p>
													</div>
												</div>
												<p class="text-sm text-gray-400">
													{{ get_the_author_meta('description') }}
												</p>
											</div>
											<!-- End Body -->

											<!-- Footer -->
											<div class="flex items-center justify-between px-4 py-3 sm:px-5">
												<ul class="space-x-3 text-xs">
													<li class="inline-block">
														<span class="font-semibold text-gray-200">{{ get_the_author_posts() }}</span>
														<span class="text-gray-400">articles</span>
													</li>
												</ul>

												<div>
													<button type="button"
														class="inline-flex items-center gap-x-2 rounded-lg border border-transparent bg-blue-600 px-2.5 py-1.5 text-xs font-semibold text-white hover:bg-blue-700 disabled:pointer-events-none disabled:opacity-50">
														<svg class="h-3.5 w-3.5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
															fill="currentColor" viewBox="0 0 16 16">
															<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
															<path fill-rule="evenodd"
																d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
														</svg>
														Follow
													</button>
												</div>
											</div>
											<!-- End Footer -->
										</div>
										<!-- End Dropdown Card -->
									</div>
								</div>
								<!-- End Tooltip -->

								<ul class="text-xs text-gray-500">
									<li
										class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:h-1 before:w-1 before:-translate-y-1/2 before:rounded-full before:bg-gray-300 last:pe-0 last-of-type:before:hidden">
										@modified
									</li>
									<li
										class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:h-1 before:w-1 before:-translate-y-1/2 before:rounded-full before:bg-gray-300 last:pe-0 last-of-type:before:hidden">
										@php($min_to_read = str_word_count(strip_tags($post->post_content)) / 200)
                    {{ ceil($min_to_read) }} min read
									</li>
								</ul>
							</div>

							<!-- Button Group -->
							<div>
								<button type="button"
									class="inline-flex items-center gap-x-2 rounded-lg border border-gray-200 bg-white px-2.5 py-1.5 text-sm font-medium text-gray-800 shadow-sm hover:bg-gray-50 disabled:pointer-events-none disabled:opacity-50">
									<svg class="h-3.5 w-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
										viewBox="0 0 16 16">
										<path
											d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
									</svg>
									Tweet
								</button>
							</div>
							<!-- End Button Group -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Avatar Media -->
			<!-- Content -->
			@content
			<!-- End Content -->
		</div>
	</article>
	<!-- End Blog Article -->

	<!-- Sticky Share Group -->
	<div class="sticky inset-x-0 bottom-6 text-center">
		<div class="inline-block rounded-full bg-white px-4 py-3 shadow-md">
			<div class="flex items-center gap-x-1.5">
				<!-- Button -->
				<div class="hs-tooltip inline-block">
					<button type="button"
						class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
						875
						<span
							class="hs-tooltip-content invisible absolute z-10 inline-block rounded bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
							role="tooltip">
							Like
						</span>
					</button>
				</div>
				<!-- Button -->

				<div class="mx-3 block h-3 border-e border-gray-300"></div>

				<!-- Button -->
				<div class="hs-tooltip inline-block">
					<button type="button"
						class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800">
						<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
							viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round">
							<path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z" />
						</svg>
						16
						<span
							class="hs-tooltip-content invisible absolute z-10 inline-block rounded bg-gray-900 px-2 py-1 text-xs font-medium text-white opacity-0 shadow-sm transition-opacity hs-tooltip-shown:visible hs-tooltip-shown:opacity-100"
							role="tooltip">
							Comment
						</span>
					</button>
				</div>
				<!-- Button -->

				<div class="mx-3 block h-3 border-e border-gray-300"></div>

				<!-- Button -->
				<div class="hs-dropdown relative inline-flex">
					<button type="button" id="blog-article-share-dropdown"
						class="hs-dropdown-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800">
						<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
							viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
							stroke-linejoin="round">
							<path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8" />
							<polyline points="16 6 12 2 8 6" />
							<line x1="12" x2="12" y1="2" y2="15" />
						</svg>
						Share
					</button>
					<div
						class="hs-dropdown-menu duration z-10 mb-1 hidden w-56 rounded-xl bg-gray-900 p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100"
						aria-labelledby="blog-article-share-dropdown">
						<a
							class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
							href="#">
							<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round">
								<path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
								<path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
							</svg>
							Copy link
						</a>
						<div class="my-2 border-t border-gray-600"></div>
						<a
							class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
							href="#">
							<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
							</svg>
							Share on Twitter
						</a>
						<a
							class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
							href="#">
							<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
							</svg>
							Share on Facebook
						</a>
						<a
							class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-gray-400"
							href="#">
							<svg class="h-4 w-4 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
								fill="currentColor" viewBox="0 0 16 16">
								<path
									d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
							</svg>
							Share on LinkedIn
						</a>
					</div>
				</div>
				<!-- Button -->
			</div>
		</div>
	</div>
