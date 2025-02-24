<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-white shadow">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center space-x-4">
                        <h1 class="text-xl font-bold">Trang chủ</h1>
                        <a href="{{ route('products.index') }}" class="text-gray-600 hover:text-gray-900">Sản phẩm</a>
                    </div>
                    <div class="flex items-center">
                        <span class="mr-4">{{ Auth::user()->name }}</span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-600 hover:text-gray-900">
                                Đăng xuất
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-6">Danh sách sản phẩm</h2>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            @foreach($products as $product)
                            <div class="bg-white rounded-lg shadow overflow-hidden">
                                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                                <div class="p-4">
                                    <h3 class="text-lg font-semibold mb-2">{{ $product->name }}</h3>
                                    <p class="text-gray-600 mb-2">{{ $product->category->name }}</p>
                                    <p class="text-blue-600 text-xl mb-4">{{ number_format($product->price) }} đ</p>
                                    <a href="{{ route('products.show', $product->id) }}" 
                                        class="block text-center bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                        Xem chi tiết
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html> 