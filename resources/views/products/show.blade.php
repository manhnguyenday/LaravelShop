<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center space-x-4">
                        <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900">← Quay lại</a>
                        <h1 class="text-xl font-bold">Chi tiết sản phẩm</h1>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <div class="mb-6">
                            <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
                            <p class="text-gray-600">Danh mục: {{ $product->category->name }}</p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full rounded-lg">
                            </div>
                            
                            <div>
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold mb-2">Giá</h3>
                                    <p class="text-2xl text-blue-600">{{ number_format($product->price) }} đ</p>
                                </div>
                                
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold mb-2">Mô tả</h3>
                                    <p class="text-gray-700">{{ $product->description }}</p>
                                </div>

                                @if($product->stock > 0)
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold mb-2">Tình trạng</h3>
                                    <p class="text-green-600">Còn hàng ({{ $product->stock }} sản phẩm)</p>
                                </div>
                                @else
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold mb-2">Tình trạng</h3>
                                    <p class="text-red-600">Hết hàng</p>
                                </div>
                                @endif

                                @if($product->sku)
                                <div class="mb-4">
                                    <h3 class="text-lg font-semibold mb-2">Mã sản phẩm</h3>
                                    <p class="text-gray-700">{{ $product->sku }}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> 