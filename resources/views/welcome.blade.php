<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Keytopia - Premium Keyboards</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .product-card {
                border: 1px solid #e5e7eb;
                transition: all 0.2s ease;
            }
            .product-card:hover {
                transform: translateY(-2px);
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            }
            .feature-bullet::before {
                content: '•';
                margin-right: 0.5rem;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50">
            <div class="container mx-auto p-4">
                <!-- Promo Banner -->
                <div class="bg-blue-600 text-white p-3 rounded-md mb-6 text-center">
                    <h1 class="text-lg font-bold">Shop over CHF 150 to Win a handcrafted BRAA3 Backpack!</h1>
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach($products as $product)
                    <div class="product-card bg-white p-4 rounded-md">
                        <!-- Product Title -->
                        <h3 class="font-semibold text-lg mb-2">{{ $product->name }}</h3>
                        
                        @if($product->type === 'bullet' && $product->features)
                        <!-- Bullet Point Features -->
                        <ul class="text-sm text-gray-600 mb-3 space-y-1">
                            @foreach(explode("\n", $product->features) as $feature)
                            <li class="feature-bullet">{{ $feature }}</li>
                            @endforeach
                        </ul>
                        @else
                        <!-- Paragraph Description -->
                        <p class="text-sm text-gray-600 mb-3">{{ $product->description }}</p>
                        @endif
                        
                        <!-- Price and CTA -->
                        <div class="flex justify-between items-center mt-2">
                            <span class="font-bold">CHF {{ number_format($product->price, 2) }}</span>
                            <button class="px-3 py-1 bg-blue-600 text-white text-sm rounded hover:bg-blue-700">
                                {{ $product->button_text }}
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>