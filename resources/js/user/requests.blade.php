@extends('layouts.userlayout')

@section('title', 'My Requests')

@section('content')

<main class="p-6 space-y-6">

  <h2 class="text-xl font-semibold">My Requests</h2>

  <div class="space-y-4">

    <!-- REQUEST CARD -->
    <div class="bg-white p-4 rounded-xl shadow flex justify-between items-center">

      <div class="flex items-center gap-4">
        <img src="{{ asset('assets/img/furniture1.jpg') }}"
             class="w-20 h-20 rounded-lg object-cover">

        <div>
          <h3 class="font-semibold">Dining Table</h3>
          <p class="text-sm text-gray-500">Type: Borrow</p>

          <!-- STATUS -->
          <span class="text-xs px-2 py-1 rounded bg-yellow-100 text-yellow-600">
            Pending
          </span>
        </div>
      </div>

      <button class="text-red-500 text-sm">Cancel</button>

    </div>


    <!-- APPROVED -->
    <div class="bg-white p-4 rounded-xl shadow flex justify-between items-center">

      <div class="flex items-center gap-4">
        <img src="{{ asset('assets/img/book2.jpg') }}"
             class="w-20 h-20 rounded-lg object-cover">

        <div>
          <h3 class="font-semibold">Books</h3>
          <p class="text-sm text-gray-500">Type: Get Item</p>

          <span class="text-xs px-2 py-1 rounded bg-green-100 text-green-600">
            Approved
          </span>
        </div>
      </div>

    </div>

  </div>

</main>

@endsection