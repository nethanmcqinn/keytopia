@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md p-6">
        <h1 class="text-2xl font-bold mb-6">Create New Product</h1>
        
        <form method="POST" action="{{ route('admin.products.store') }}">
            @csrf
            
            <!-- Name Field -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Product Name</label>
                <input type="text" name="name" required
                    class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('name')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <!-- Price Field -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Price (CHF)</label>
                <input type="number" step="0.01" name="price" required
                    class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('price')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <!-- Description Field -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Description</label>
                <textarea name="description" rows="3"
                    class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <!-- Features Field -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Features (one per line)</label>
                <textarea name="features" rows="5"
                    class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500"></textarea>
                <p class="text-sm text-gray-500 mt-1">Enter each feature on a new line</p>
            </div>

            <!-- Stock Field -->
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Stock</label>
                <input type="number" name="stock" min="0" required
                    class="w-full px-3 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500">
                @error('stock')<span class="text-red-500 text-sm">{{ $message }}</span>@enderror
            </div>

            <button type="submit" 
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Create Product
            </button>
        </form>
    </div>
</div>
@endsection