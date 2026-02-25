<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Kaos Toraja Tedong Hitam',
                'slug' => 'kaos-toraja-tedong-hitam',
                'category' => 'Kaos',
                'description' => 'Kaos premium dengan desain khas Toraja menampilkan motif Tedong (kerbau) yang ikonik. Dibuat dari bahan cotton combed 30s yang nyaman dan breathable. Cocok untuk daily wear atau sebagai oleh-oleh khas Toraja.',
                'price' => 150000,
                'discount_price' => 120000,
                'sku' => 'TS-KAOS-001',
                'stock' => 50,
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => ['Hitam', 'Putih'],
                'is_featured' => true,
                'is_active' => true,
                'rating' => 4.8,
                'reviews_count' => 24,
                'views' => 156,
            ],
            [
                'name' => 'Hoodie Toraja Pa\'tedong Merah',
                'slug' => 'hoodie-toraja-patedong-merah',
                'category' => 'Hoodie',
                'description' => 'Hoodie eksklusif dengan desain Pa\'tedong (rumah adat Toraja) yang detail. Material fleece premium yang hangat dan nyaman. Perfect untuk cuaca dingin atau style casual yang keren.',
                'price' => 350000,
                'discount_price' => null,
                'sku' => 'TS-HOODIE-001',
                'stock' => 30,
                'sizes' => ['M', 'L', 'XL', 'XXL'],
                'colors' => ['Merah', 'Hitam'],
                'is_featured' => true,
                'is_active' => true,
                'rating' => 4.9,
                'reviews_count' => 18,
                'views' => 203,
            ],
            [
                'name' => 'Kaos Toraja Ukiran Tradisional',
                'slug' => 'kaos-toraja-ukiran-tradisional',
                'category' => 'Kaos',
                'description' => 'Kaos dengan motif ukiran tradisional Toraja yang artistik. Menampilkan keindahan seni ukir khas Toraja dalam desain modern. Bahan cotton combed 30s yang adem dan tidak mudah luntur.',
                'price' => 145000,
                'discount_price' => 115000,
                'sku' => 'TS-KAOS-002',
                'stock' => 45,
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => ['Hitam', 'Putih', 'Merah'],
                'is_featured' => true,
                'is_active' => true,
                'rating' => 4.7,
                'reviews_count' => 31,
                'views' => 189,
            ],
            [
                'name' => 'Jacket Bomber Toraja Edition',
                'slug' => 'jacket-bomber-toraja-edition',
                'category' => 'Jacket',
                'description' => 'Jacket bomber limited edition dengan embroidery logo Tedong Simpo. Material parasut berkualitas tinggi yang water resistant. Desain modern dengan sentuhan budaya Toraja.',
                'price' => 450000,
                'discount_price' => 400000,
                'sku' => 'TS-JACKET-001',
                'stock' => 20,
                'sizes' => ['M', 'L', 'XL'],
                'colors' => ['Hitam'],
                'is_featured' => false,
                'is_active' => true,
                'rating' => 4.9,
                'reviews_count' => 12,
                'views' => 145,
            ],
            [
                'name' => 'Kaos Toraja Tongkonan Putih',
                'slug' => 'kaos-toraja-tongkonan-putih',
                'category' => 'Kaos',
                'description' => 'Kaos dengan ilustrasi Tongkonan (rumah adat Toraja) yang detail dan elegan. Warna putih yang clean dengan print berkualitas tinggi. Nyaman dipakai untuk berbagai aktivitas.',
                'price' => 140000,
                'discount_price' => null,
                'sku' => 'TS-KAOS-003',
                'stock' => 60,
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => ['Putih', 'Hitam'],
                'is_featured' => false,
                'is_active' => true,
                'rating' => 4.6,
                'reviews_count' => 28,
                'views' => 167,
            ],
            [
                'name' => 'Hoodie Toraja Geometric Pattern',
                'slug' => 'hoodie-toraja-geometric-pattern',
                'category' => 'Hoodie',
                'description' => 'Hoodie dengan pattern geometric terinspirasi dari motif kain Toraja. Desain modern yang stylish dengan kenyamanan maksimal. Material fleece premium yang soft dan warm.',
                'price' => 380000,
                'discount_price' => 340000,
                'sku' => 'TS-HOODIE-002',
                'stock' => 25,
                'sizes' => ['M', 'L', 'XL'],
                'colors' => ['Hitam', 'Merah'],
                'is_featured' => false,
                'is_active' => true,
                'rating' => 4.8,
                'reviews_count' => 15,
                'views' => 178,
            ],
        ];

        foreach ($products as $index => $productData) {
            // Mapping existing images to products
            $imageFiles = [
                'products/Es32YH9hhHGPBvm0zpstRhNDgGC98FCGNPN2sM7o.jpg',
                'products/HwYtnNWCOCSEDbeUQ0zPzmYnPYfxGydHyhF0c02Y.jpg',
                'products/QfWzl44bp6P4LIm9iHNB2FZe3GNDFZAeVHTZU69L.jpg',
                'products/SI84IEvPEkLZ70upzX75iRoYxiO8QhYbqQzh9IeV.jpg',
                'products/TdZBdEKQvgwV3tT2E4eqnBsnztxeoJn8ZvbZZkXv.jpg',
                'products/VG7OryldDEb4SHn9KJ8E8PFH9D8YopyH3Pe7yype.jpg',
            ];

            $productData['main_image'] = $imageFiles[$index % count($imageFiles)];
            $productData['images'] = [$productData['main_image']];

            Product::updateOrCreate(
                ['sku' => $productData['sku']],
                $productData
            );
        }
    }
}
