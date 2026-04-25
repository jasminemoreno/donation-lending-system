@extends('layouts.userlayout')

@section('title', 'My Listings')

@section('content')

<main class="p-6 space-y-6">

  <h2 class="text-xl font-semibold">My Listings</h2>

  {{-- TAB NAVIGATION --}}
  <div class="flex gap-4 border-b pb-2">

    <a href="?tab=requests"
       class="pb-2 text-sm font-medium
       {{ request('tab', 'requests') == 'requests' ? 'border-b-2 border-green-600 text-green-600' : 'text-gray-500' }}">
      Requests
    </a>

    <a href="?tab=posted"
       class="pb-2 text-sm font-medium
       {{ request('tab') == 'posted' ? 'border-b-2 border-green-600 text-green-600' : 'text-gray-500' }}">
      Posted Items
    </a>

  </div>

  {{-- ========================= --}}
  {{-- REQUESTS TAB --}}
  {{-- ========================= --}}
  @if(request('tab', 'requests') == 'requests')

    <div class="space-y-3">

      <h3 class="font-semibold text-gray-700">Incoming Requests</h3>

      {{-- SAMPLE REQUEST --}}
      <div class="bg-white p-4 rounded-xl shadow flex justify-between items-center">

        <div>
          <p class="font-medium">Juan Dela Cruz</p>
          <p class="text-xs text-gray-500">Borrow Request for Dining Table</p>
        </div>

        <div class="flex gap-2">
          <button class="bg-green-500 text-white px-3 py-1 text-xs rounded">
            Approve
          </button>
          <button class="bg-red-500 text-white px-3 py-1 text-xs rounded">
            Reject
          </button>
        </div>

      </div>

      {{-- another request --}}
      <div class="bg-white p-4 rounded-xl shadow flex justify-between items-center">

        <div>
          <p class="font-medium">Maria Santos</p>
          <p class="text-xs text-gray-500">Get Item Request (Donation)</p>
        </div>

        <div class="flex gap-2">
          <button class="bg-green-500 text-white px-3 py-1 text-xs rounded">
            Give Item
          </button>
          <button class="bg-red-500 text-white px-3 py-1 text-xs rounded">
            Reject
          </button>
        </div>

      </div>

    </div>

  @endif

  {{-- ========================= --}}
  {{-- POSTED ITEMS TAB --}}
  {{-- ========================= --}}
  @if(request('tab') == 'posted')

    <div class="space-y-3">

      <h3 class="font-semibold text-gray-700">My Posted Items</h3>

      {{-- ITEM CARD --}}
      <div class="bg-white p-4 rounded-xl shadow flex justify-between items-center">

        <div class="flex gap-4 items-center">

          <img src="{{ asset('assets/img/furniture1.jpg') }}"
               class="w-20 h-20 rounded object-cover">

          <div>
            <p class="font-semibold">Dining Table</p>
            <p class="text-xs text-gray-500">Type: Lending</p>

            <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">
              Available
            </span>
          </div>

        </div>

        {{-- ACTIONS --}}
        <div class="flex flex-col gap-2">

          <button class="bg-green-600 text-white px-3 py-1 text-xs rounded">
            Lend Again
          </button>

          <button class="bg-blue-600 text-white px-3 py-1 text-xs rounded">
            Donate Instead
          </button>

        </div>

      </div>

    </div>

  @endif

</main>

@endsection