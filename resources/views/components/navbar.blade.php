<div>
    <header class="absolute inset-x-0 top-0 z-50" x-data="{ isOpen: false }">
        <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
              <span class="sr-only">Your Company</span>
              <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
          </div>
          <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" @click="isOpen = !isOpen">
              <span class="sr-only">Open main menu</span>
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
              </svg>
            </button>
          </div>
          <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900 hover:underline">Home</a>
            <a href="portfolio" class="text-sm font-semibold leading-6 text-gray-900 hover:underline">Portfolio</a>
            <a href="about" class="text-sm font-semibold leading-6 text-gray-900 hover:underline">About</a>
            <a href="contact" class="text-sm font-semibold leading-6 text-gray-900 hover:underline">Contact</a>
          </div>
          <div class="hidden lg:flex lg:flex-1 lg:justify-end gap-x-4">
            <a href="https://www.linkedin.com/in/syarifhiday" class="text-gray-900 hover:underline" target="_blank">
                <i class="fab fa-linkedin fa-lg"></i>
                <span class="sr-only">LinkedIn</span>
            </a>
            <a href="https://www.instagram.com/sya.hiday" class="text-gray-900 hover:underline" target="_blank">
                <i class="fab fa-instagram fa-lg"></i>
                <span class="sr-only">Instagram</span>
            </a>
            <a href="https://wa.me/6283844507429" class="text-gray-900 hover:underline" target="_blank">
                <i class="fab fa-whatsapp fa-lg"></i>
                <span class="sr-only">WhatsApp</span>
            </a>
        </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true"
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" @click="isOpen = !isOpen">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                  <a href="/" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hover:underline">Home</a>
                  <a href="portfolio" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hover:underline">Portfolio</a>
                  <a href="about" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hover:underline">About</a>
                  <a href="contact" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hover:underline">Contact</a>
                </div>
                <div class="py-6 flex gap-x-4">
                    <a href="https://www.linkedin.com/in/syarifhiday" class="text-gray-900 hover:underline" target="_blank">
                        <i class="fab fa-linkedin fa-lg"></i>
                        <span class="sr-only">LinkedIn</span>
                    </a>
                    <a href="https://www.instagram.com/sya.hiday" class="text-gray-900 hover:underline" target="_blank">
                        <i class="fab fa-instagram fa-lg"></i>
                        <span class="sr-only">Instagram</span>
                    </a>
                    <a href="https://wa.me/6283844507429" class="text-gray-900 hover:underline" target="_blank">
                        <i class="fab fa-whatsapp fa-lg"></i>
                        <span class="sr-only">WhatsApp</span>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
</div>
