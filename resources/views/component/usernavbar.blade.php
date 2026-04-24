<!-- resources/views/partials/usernavbar.blade.php -->

<header class="bg-white px-6 py-3 flex justify-between items-center shadow-sm">

  <div class="flex items-center gap-2">
    <div class="w-10 h-10 rounded flex items-center justify-center">
      <img src="{{ asset('assets/img/hearth.png') }}" class="w-10 h-10 object-contain">
    </div>
    <div>
      <h1 class="font-semibold">Community Hub</h1>
      <p class="text-xs text-gray-500">Donation & Lending</p>
    </div>
  </div>

  <nav class="flex gap-6 text-sm">

    <!-- HOME -->
    <a href="/home"
       class="flex items-center gap-2 pb-1
       {{ request()->is('home') ? 'text-green-600 font-semibold border-b-2 border-green-600' : '' }}">
      <img src="{{ asset('assets/icons/home.png') }}" class="w-4 h-4">
      Home
    </a>

    <!-- BROWSE -->
    <a href="/browse"
       class="flex items-center gap-2 pb-1
       {{ request()->is('browse*') ? 'text-green-600 font-semibold border-b-2 border-green-600' : '' }}">
      <img src="{{ asset('assets/icons/menu.png') }}" class="w-4 h-4">
      Browse Items
    </a>

    <!-- REQUESTS -->
    <a href="/requests"
       class="flex items-center gap-2 pb-1
       {{ request()->is('requests*') ? 'text-green-600 font-semibold border-b-2 border-green-600' : '' }}">
      <img src="{{ asset('assets/icons/request.png') }}" class="w-4 h-4">
      My Requests
    </a>

    <!-- LISTINGS -->
    <a href="/listings"
       class="flex items-center gap-2 pb-1
       {{ request()->is('listings*') ? 'text-green-600 font-semibold border-b-2 border-green-600' : '' }}">
      <img src="{{ asset('assets/icons/shop.png') }}" class="w-4 h-4">
      My Listings
    </a>

    <!-- MESSAGES -->
    <a href="/messages"
       class="flex items-center gap-2 pb-1
       {{ request()->is('messages*') ? 'text-green-600 font-semibold border-b-2 border-green-600' : '' }}">
      <img src="{{ asset('assets/icons/message.png') }}" class="w-4 h-4">
      Messages
    </a>

  </nav>

  <div class="flex items-center gap-3">
    <img src="https://via.placeholder.com/30" class="rounded-full" />
    <span class="text-sm">Jane Dela Cruz</span>
  </div>

</header>