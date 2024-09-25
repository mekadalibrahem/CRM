<div id="hs-application-sidebar"
    class="hs-overlay  [--auto-close:lg]
hs-overlay-open:translate-x-0
-translate-x-full transition-all duration-300 transform
w-[260px] h-full
hidden
fixed inset-y-0 start-0 z-[60]
bg-white border-e border-gray-200
lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
dark:bg-neutral-800 dark:border-neutral-700 "
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
    {{-- logo --}}

    <div class="px-6 pt-4">
        <!-- Logo -->
        <a class="flex-none rounded-xl align-middle text-center text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="#" aria-label="CRM">
            {{
                config('app.name')
            }}
        </a>
        <!-- End Logo -->
      </div>
    {{-- end logo --}}

        <!-- Content -->
        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">

                    <x-admin-saidbar-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')">
                        <x-icons.home />
                        {{ __('Dashboard') }}
                    </x-admin-saidbar-link>
                    <x-admin-saidbar-link :href="route('admin.users')" :active="request()->routeIs('admin.users')">
                        <x-icons.users />
                        {{ __('Users') }}
                    </x-admin-saidbar-link>
                    <x-admin-saidbar-link :href="route('admin.clients')" :active="request()->routeIs('admin.clients')">
                        <x-icons.clients />
                        {{ __('Clients') }}
                    </x-admin-saidbar-link>
                    <x-admin-saidbar-link :href="route('admin.projects')" :active="request()->routeIs('admin.projects')">
                        <x-icons.projects />
                        {{ __('Projects') }}
                    </x-admin-saidbar-link>
                    <x-admin-saidbar-link :href="route('admin.tasks')" :active="request()->routeIs('admin.tasks')">
                        <x-icons.tasks />
                        {{ __('Tasks') }}
                    </x-admin-saidbar-link>






                </ul>
            </nav>
        </div>
        <!-- End Content -->
    </div>
</div>
