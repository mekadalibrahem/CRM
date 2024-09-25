<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-3 sm:py-0 dark:bg-neutral-800">
        <nav class="max-w-[85rem] w-full mx-auto px-4 md:px-6 lg:px-8">
          <div class="relative sm:flex sm:items-center">
            <div class="flex items-center justify-between">
              <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">Brand</a>
              <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" id="hs-navbar-basic-usage-collapse" aria-expanded="false" aria-controls="hs-navbar-basic-usage" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-basic-usage">
                  <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                  <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
              </div>
            </div>
      
            <div id="hs-navbar-basic-usage" class="hidden hs-collapse overflow-hidden transition-all duration-300 basis-full grow sm:block" aria-labelledby="hs-navbar-basic-usage-collapse">
              <div class="flex flex-col gap-y-3 sm:gap-y-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">
                <a class="sm:p-2 font-medium text-blue-500 focus:outline-none" href="#" aria-current="page">Active</a>
      
                <div class="hs-dropdown [--strategy:static] sm:[--strategy:absolute] [--adaptive:none]   [--is-collapse:true] sm:[--is-collapse:false] ">
                  <button id="hs-mega-menu" type="button" class="hs-dropdown-toggle sm:p-2 flex items-center w-full text-gray-600 font-medium hover:text-gray-400 focus:outline-none focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" aria-haspopup="menu" aria-expanded="false" aria-label="Mega Menu">
                    Mega Menu
                    <svg class="hs-dropdown-open:-rotate-180 sm:hs-dropdown-open:rotate-0 duration-300 ms-2 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                  </button>
      
                  <div class="hs-dropdown-menu transition-[height] sm:transition-[opacity,margin] duration-300 ease-in-out sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 w-full hidden z-10  top-full start-0 min-w-60 bg-white sm:shadow-md rounded-lg py-2 sm:px-2 dark:bg-neutral-800 sm:dark:border dark:border-neutral-700 dark:divide-neutral-700 before:absolute" role="menu" aria-orientation="vertical" aria-labelledby="hs-mega-menu">
                    <div class="sm:grid sm:grid-cols-3">
                      <div class="flex flex-col">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          About
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Services
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Customer Story
                        </a>
                      </div>
      
                      <div class="flex flex-col">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Careers
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Careers: Overview
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Careers: Apply
                        </a>
                      </div>
      
                      <div class="flex flex-col">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Log In
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                          Sign Up
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
      
                <a class="sm:p-2 font-medium text-gray-600 hover:text-gray-400 focus:outline-none focus:text-gray-400 dark:text-neutral-400 dark:hover:text-neutral-500 dark:focus:text-neutral-500" href="#">Project</a>
              </div>
            </div>
          </div>
        </nav>
      </header>
</x-app-layout>


