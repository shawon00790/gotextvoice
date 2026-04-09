@extends('backend.layouts.apps')

@section('content')
  <div class="flex-1 flex flex-col">
    
    <!-- Topbar -->
    <header class="bg-white shadow p-4 flex justify-between items-center">
      <h1 class="text-xl font-semibold">Dashboard Overview</h1>
      <input type="text" placeholder="Search..." class="border rounded px-3 py-1">
    </header>

    <!-- Content -->
    <main class="p-6 space-y-6 overflow-y-auto">
      <!-- Table -->
      <div class="bg-white p-4 rounded shadow">
        <h2 class="text-lg font-semibold mb-4">Order Management</h2>
        <table class="w-full text-left border-collapse">
          <thead>
            <tr class="border-b">
              <th class="p-2">Order Id</th>
              <th class="p-2">Customer</th>
              <th class="p-2">Mail</th>
              <th class="p-2">Phone</th>
              <th class="p-2">Date</th>
              <th class="p-2">Product</th>
              <th class="p-2">Quantity</th>
              <th class="p-2">Status</th> 
              <th class="p-2">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr class="border-b">
              <td class="p-2">Rahim</td>
              <td class="p-2">10</td>
              <td class="p-2 text-green-600">Active</td>
              <td class="p-2">
                <button class="bg-blue-500 text-white px-3 py-1 rounded">View</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </main>
  </div>
@endsection