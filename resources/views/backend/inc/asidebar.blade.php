<aside class="w-64 fixed h-screen bg-gray-900 text-white flex flex-col">
    <div class="">
    <div class="p-4 text-2xl font-bold border-b border-gray-700">Dashboard</div>
    <nav class="flex-1 p-4 space-y-2">
      <a href="{{ route('dashboard') }}" class="block p-2 rounded bg-gray-800">Home</a>
      <a href="{{ route('categories.index') }}" class="block p-2 rounded hover:bg-gray-800">Category's</a>
      <a href="{{ route('products.index') }}" class="block p-2 rounded hover:bg-gray-800">Product's</a>
    </nav>
    <div class="p-4 border-t border-gray-700"><x-slot name="content">
        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
    </div>
  </aside>