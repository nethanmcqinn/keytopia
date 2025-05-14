@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <!-- Header Section -->
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-2xl font-bold">Admin Dashboard</h1>
<a href="{{ route('admin.products.create') }}" 
       class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-800 transition-colors shadow-md">
        + New Product
    </a>
    </div>



    <!-- Dashboard Content -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Users Section -->
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold mb-4">Users</h2>
                <div class="space-y-2">
                    @foreach($users as $user)
                    <div class="flex justify-between items-center border-b pb-2">
                        <span>{{ $user->name }}</span>
                        <span class="text-sm {{ $user->is_admin ? 'text-green-600' : 'text-gray-600' }}">
                            {{ $user->is_admin ? 'Admin' : 'User' }}
                        </span>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Products Section -->
            <div class="bg-white p-6 rounded shadow">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold">Products</h2>
                </div>
                <div class="space-y-2">
                    @foreach($products as $product)
                    <div class="flex justify-between items-center border-b pb-2">
                        <span>{{ $product->name }}</span>
                        <span class="font-bold">CHF {{ number_format($product->price, 2) }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection