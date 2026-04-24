@extends('layouts.userlayout')

@section('title', 'Home')

@section('content')

<main class="p-6 grid grid-cols-3 gap-6">

  <!-- LEFT -->
  <section class="col-span-2 space-y-6">

<!-- HERO -->
<div class="green-soft card p-6 flex justify-between items-center">
    
  <div class="max-w-md">
    <h2 class="text-3xl font-bold">Share More,<br/>Help More.</h2>
    <p class="text-gray-600 mt-2 text-sm">
      Donate, lend, or borrow items and help build a stronger community.
    </p>
  </div>

  <div class="w-52 h-32 bg-green-200 rounded-xl flex items-center justify-center">
    <img src="{{ asset('assets/img/ex2.png') }}" class="h-full object-contain">
  </div>
</div>

<!-- WHITE CONTAINER (CATEGORIES + FEATURED) -->
<div class="bg-white card p-6 space-y-8">

  <!-- CATEGORIES -->
  <div>
    <div class="flex justify-between items-center mb-4">
      <h3 class="font-semibold">Browse by Category</h3>
      <span class="text-green-600 text-sm">View all</span>
    </div>

    <div class="flex justify-between">

      <!-- ITEM -->
      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/application.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">All</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/furniture.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Furniture</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/appliances.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Appliances</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/book.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Books</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/clothing.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Clothing</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/tools.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Tools</p>
      </div>

      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/toys.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Toys</p>
      </div>
      <div class="text-center">
        <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center shadow">
          <img src="{{ asset('assets/icons/others.png') }}" class="w-5 h-5">
        </div>
        <p class="text-xs mt-2">Others</p>
      </div>
    </div>
  </div>

  <!-- FEATURED -->
  <div>
  <div class="flex justify-between mb-4">
    <h3 class="font-semibold">Featured Items</h3>
    <span class="text-green-600 text-sm">View all</span>
  </div>

  <div class="grid grid-cols-4 gap-4">

    <div class="bg-white card p-3">
      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>
      <img src="{{ asset('assets/img/furniture1.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">
      <p class="text-sm mt-2 font-medium">Dining Table Set</p>
      <p class="text-xs text-gray-500">Quezon City</p>
    </div>

    <div class="bg-white card p-3">
      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>
      <img src="{{ asset('assets/img/appliaces1.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">
      <p class="text-sm mt-2 font-medium">Refrigerator</p>
      <p class="text-xs text-gray-500">Quezon City</p>
    </div>

    <div class="bg-white card p-3">
      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>
      <img src="{{ asset('assets/img/book2.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">
      <p class="text-sm mt-2 font-medium">Assorted Books</p>
      <p class="text-xs text-gray-500">Manila</p>
    </div>

    <div class="bg-white card p-3">
      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>
      <img src="{{ asset('assets/img/tool1.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">
      <p class="text-sm mt-2 font-medium">Power Drill</p>
      <p class="text-xs text-gray-500">Makati City</p>
    </div>

  </div>
</div>

</div>

</section>

  <!-- RIGHT SIDE -->
  <aside class="space-y-4">

    <!-- WELCOME -->
    <div class="bg-white card p-4">
      <h3 class="font-semibold">
        Welcome back, <span class="text-green-600">Jane!</span>
      </h3>
      <p class="text-sm text-gray-500 mt-2">
        Thank you for being part of our community.
      </p>
      <div class="mt-3 w-full h-20 bg-green-100 rounded"></div>
    </div>

    <!-- QUICK ACTIONS -->
    <div class="bg-white card p-4">
      <h3 class="font-semibold mb-3">Quick Actions</h3>

      <div class="space-y-3 text-sm">

        <div class="flex justify-between items-center bg-[#F5F7F6] p-3 rounded-lg">
          <div class="flex items-center gap-2">
            <img src="{{ asset('assets/icons/add.png') }}" class="w-4 h-4">
            <span>Post an Item</span>
          </div>
          <span>›</span>
        </div>

        <div class="flex justify-between items-center bg-[#F5F7F6] p-3 rounded-lg">
          <div class="flex items-center gap-2">
            <img src="{{ asset('assets/icons/shop.png') }}" class="w-4 h-4">
            <span>My Listings</span>
          </div>
          <span>›</span>
        </div>

        <div class="flex justify-between items-center bg-[#F5F7F6] p-3 rounded-lg">
          <div class="flex items-center gap-2">
            <img src="{{ asset('assets/icons/time.png') }}" class="w-4 h-4">
            <span>My Requests</span>
          </div>
          <span>›</span>
        </div>

      </div>
    </div>

    <!-- RECENT ACTIVITY -->
    <div class="bg-white card p-4">
  <div class="flex justify-between mb-3">
    <h3 class="font-semibold">Recent Activity</h3>
    <span class="text-green-600 text-sm">View all</span>
  </div>

  <ul class="text-sm text-gray-600 space-y-4">

    <li class="flex items-start gap-3">
      <img src="{{ asset('assets/icons/shop.png') }}" class="w-5 h-5 mt-0.5">
      <span>Your item "Study Table" has been approved</span>
    </li>

    <li class="flex items-start gap-3">
      <img src="{{ asset('assets/icons/message.png') }}" class="w-5 h-5 mt-0.5">
      <span>You have a new message</span>
    </li>

    <li class="flex items-start gap-3">
      <img src="{{ asset('assets/icons/check.png') }}" class="w-5 h-5 mt-0.5">
      <span>Request for "Tent" approved</span>
    </li>

  </ul>
</div>

  </aside>

</main>

@endsection