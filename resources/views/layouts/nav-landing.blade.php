
		<nav 
			x-data="{showMenu:false}"
			class="sticky shadow-lg top-0 z-50 w-full transition bg-white border-b-2 border-b-sky-400"
			:class="{'left-0 text-black h-auto': showMenu}">
			<div class="relative px-5 max-w-7xl flex flex-wrap items-center justify-between h-24 py-1 mx-auto">
				<div class="flex items-center justify-start h-full w-1/4">
                    <a href="{{ route('index') }}" class="mx-auto z-[99]">
                        <img 
                         src="{{ asset('assets/logo/logo.png') }}" 
                         class="h-20 z-[99] mx-auto"
                         alt="{{ config('app.name', 'Blog with SEO') }} Logo">
                    </a>
				</div>
				<div 
					class="top-0 left-0 items-start hidden w-full py-4 text-sm bg-opacity-50 md:items-center md:w-3/4  lg:text-base md:bg-transparent md:p-0 md:relative md:flex transition h-full"
					:class="{'flex fixed ': showMenu, 'hidden': !showMenu }">
					<div 
						class="flex-col pb-8 md:pb-0 w-full relative overflow-hidden bg-white md:bg-transparent md:overflow-visible md:rounded-none md:relative md:flex md:flex-row border-b-2 border-b-sky-400 sm:border-none">
						<ul class="flex flex-col items-start justify-center w-full text-black-700 text-center lg:space-x-8 md:w-2/3 md:mt-0 md:flex-row md:items-center pt-[85px] md:pt-0">
							<li><div class="border-b-2 border-b-sky-400 w-full mb-3 md:hidden"></div></li>
							<li>
								<a href="{{ route('index') }}" class="inline-block w-full text-xl py-2 md:py-0 md:text-base md:w-auto px-5 text-sky-700 hover:text-sky-500 transition">Beranda</a>
							</li>
							<li>
								<a href="{{ route('tag') }}" class="inline-block w-full text-xl py-2 md:py-0 md:text-base md:w-auto px-5 text-sky-700 hover:text-sky-500 transition">Tag</a>
							</li>
							<li>
								<a href="https://entolrizky.com" class="inline-block w-full text-xl py-2 md:py-0 md:text-base md:w-auto px-5 text-sky-700 hover:text-sky-500 transition">Portal</a>
							</li>
						</ul>
					</div>
				</div>
				<div 
					class="right-0 flex flex-col items-center justify-center w-10 h-10 cursor-pointer md:hidden transition"
					@click="showMenu = !showMenu">
					<svg class="w-10 h-10 text-sky-800" x-show="!showMenu"
						fill="none" stroke-linecap="round"
						stroke-linejoin="round" stroke-width="2"
						viewBox="0 0 24 24" stroke="currentColor"
						x-cloak="">
						<path d="M4 6h16M4 12h16M4 18h16"></path>
					</svg>
					<svg class="w-10 h-10 text-sky-800 z-[100]" x-show="showMenu"
						fill="none" stroke="currentColor"
						viewBox="0 0 24 24"
						xmlns="http://www.w3.org/2000/svg" x-cloak="">
						<path stroke-linecap="round" stroke-linejoin="round"
							stroke-width="2" d="M6 18L18 6M6 6l12 12">
						</path>
					</svg>
				</div>
			</div>
		</nav>