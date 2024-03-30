
  <footer class="bg-[#383838]" aria-labelledby="footer-heading" x-data="footer">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-20 sm:pt-24 lg:px-8 lg:pt-20">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="grid grid-cols-2 gap-8 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-semibold leading-6 text-slate-grey hover:cursor-pointer">Solutions</h3>
              <ul role="list" class="mt-4 space-y-4">
                <template x-for="solution in solutions" :key="solution.name">
                    <li>
                        <x-footer-link x-text="solution.name"></x-footer-link>
                    </li>
                </template>
              </ul>
            </div>
            <div class="mt-10 md:mt-0">
              <h3 class="text-base font-semibold leading-6 text-slate-grey hover:cursor-pointer">Partners</h3>
              <ul role="list" class="mt-4 space-y-4">
                <template x-for="partner in partners" :key="partner.name">
                    <li>
                        <x-footer-link x-text="partner.name"></x-footer-link>
                    </li>
                </template>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-base font-semibold leading-6 text-slate-grey hover:cursor-pointer">About</h3>
              <ul role="list" class="mt-4 space-y-4">
                <template x-for="about in about" :key="about.name">
                    <li>
                        <x-footer-link x-text="about.name"></x-footer-link>
                    </li>
                </template>
              </ul>
            </div>
            <div class="mt-10 md:mt-0">
              <h3 class="text-base font-semibold leading-6 text-slate-grey hover:cursor-pointer">Blog</h3>
              <ul role="list" class="mt-4 space-y-4">
                <template x-for="blog in blog" :key="blog.name">
                    <li>
                        <x-footer-link x-text="blog.name"></x-footer-link>
                    </li>
                </template>
              </ul>
            </div>
          </div>
        </div>
        <div class="mt-10 xl:mt-0 flex flex-col gap-8 w-3/4 lg:ml-auto">
          <h3 class="text-[26px] tracking-normal leading-6 font-bold text-green">Let's Talk</h3>
          <div class="text-sm leading-6 text-gray-300">
            <h3 class="text-[26px] tracking-normal leading-6 font-bold text-white">info@intellezy.com</h3>
            <h3 class="text-[26px] tracking-normal leading-6 font-bold text-white underline mt-3">781.227.8260</h3>
          </div>
          <div class="font-medium text-base">
            <p class="text-white leading-7">400 West Cummings Park, Ste. 2850 Woburn, MA 01801</p>
            <p class="text-slate-grey leading-7">Privacy | Terms of Use</p>
            <p class="text-slate-grey leading-7">© 2023 Intellezy, LLC. All rights reserved</p>
          </div>
        </div>
      </div>
      <div class="mt-16 pt-8 sm:mt-20 md:flex md:items-center md:justify-between lg:mt-24">
        <p class="mt-8 text-xs leading-5 text-gray-400 md:order-1 md:mt-0">info@intellezy.com</p>
      </div>
    </div>
  </footer>
  <script>
        function footer() {
            return{
                solutions: [
                    {name: 'AR / VR Solutions', href: '#'},
                    {name: 'Training Videos', href: '#'},
                    {name: 'Custom eLearning Development', href: '#'},
                    {name: 'Learning Strategy', href: '#'},
                    {name: 'Training Delivery', href: '#'},
                    {name: 'Change Management', href: '#'}
                ],
                partners: [
                    {name: 'Microsoft ACM', href: '#'},
                    {name: 'Technology Partners', href: '#'},
                    {name: 'Training Video Partner Program', href: '#'}
                ],
                about: [
                    {name: 'Our Team', href: '#'},
                    {name: 'Careers', href: '#'},
                    {name: 'Events', href: '#'},
                    {name: 'Success Stories', href: '#'},
                    {name: 'Press', href: '#'},
                    {name: 'Contact', href: '#'}
                ],
                blog: [
                    {name: 'Log In', href: '#'}
                ]
            }
        }
    </script>
