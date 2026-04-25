@extends('layouts.userlayout')

@section('title', 'Browse Items')

@section('content')

<main class="p-6 space-y-6">

  <!-- 🔍 SEARCH + FILTER -->
  <div class="flex flex-col md:flex-row gap-4 md:items-center md:justify-between">

    <!-- Search -->
    <input 
      type="text" 
      placeholder="Search items..." 
      class="w-full md:w-1/3 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
    >

    <!-- Optional Filter -->
    <select class="px-4 py-2 border rounded-lg">
      <option>All Locations</option>
      <option>Davao</option>
      <option>Manila</option>
    </select>

  </div>


  <!-- 🧩 CATEGORIES (HORIZONTAL SCROLL) -->
  <div class="flex gap-6 overflow-x-auto pb-2">

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-green-500 text-white rounded-full flex items-center justify-center">
        <span class="text-xs">All</span>
      </div>
      <p class="text-xs mt-2">All</p>
    </div>

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center">
        <img src="{{ asset('assets/icons/furniture.png') }}" class="w-5">
      </div>
      <p class="text-xs mt-2">Furniture</p>
    </div>

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center">
        <img src="{{ asset('assets/icons/appliances.png') }}" class="w-5">
      </div>
      <p class="text-xs mt-2">Appliances</p>
    </div>

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center">
        <img src="{{ asset('assets/icons/book.png') }}" class="w-5">
      </div>
      <p class="text-xs mt-2">Books</p>
    </div>

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center">
        <img src="{{ asset('assets/icons/tools.png') }}" class="w-5">
      </div>
      <p class="text-xs mt-2">Tools</p>
    </div>

    <div class="text-center flex-shrink-0">
      <div class="w-12 h-12 mx-auto bg-[#E4EFE6] rounded-full flex items-center justify-center">
        <img src="{{ asset('assets/icons/toys.png') }}" class="w-5">
      </div>
      <p class="text-xs mt-2">Toys</p>
    </div>

  </div>


  <!-- 🧱 ITEMS GRID -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

    <!-- ITEM CARD -->
    <div class="bg-white card p-3 hover:shadow-lg transition">

      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>

      <img src="{{ asset('assets/img/furniture1.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">

      <h4 class="mt-2 font-medium text-sm">Dining Table Set</h4>
      <p class="text-xs text-gray-500">Davao City</p>

      <button class="mt-3 w-full bg-green-500 text-white py-2 rounded-lg text-sm">
        View Details
      </button>

    </div>

    <!-- DUPLICATE MORE ITEMS -->
    <div class="bg-white card p-3 hover:shadow-lg transition">
      <div class="bg-green-500 text-white text-xs px-2 py-1 rounded w-fit mb-2">
        Available
      </div>
      <img src="{{ asset('assets/img/appliaces1.jpg') }}"
           class="rounded-lg w-full h-40 object-cover">
      <h4 class="mt-2 font-medium text-sm">Rice Cooker</h4>
      <p class="text-xs text-gray-500">Davao City</p>
      <button class="mt-3 w-full bg-green-500 text-white py-2 rounded-lg text-sm">
        View Details
      </button>
    </div>

  </div>

</main>

@endsection