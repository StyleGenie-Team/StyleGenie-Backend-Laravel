// app/Http/Controllers/ArController.php
use Illuminate\Support\Facades\Storage;

public function getArProducts()
{
    $baseUrl = url('/');
    
    return response()->json([
        'products' => [
            [
                'id' => 1,
                'name' => 'نظارة شمسية',
                'ar_model_url' => $baseUrl . Storage::url('ar-models/sunglasses.glb'),
                'image_url' => $baseUrl . Storage::url('ar-products\photo_2025-09-03_14-20-14.jpg'),
                'scale' => 0.1,
                'category' => 'نظارات'
            ],
            [
                'id' => 2, 
                'name' => 'ساعة يد',
                'ar_model_url' => $baseUrl . Storage::url('ar-models/watch.glb'),
                'image_url' => $baseUrl . Storage::url('ar-products/watch.jpg'),
                'scale' => 0.05,
                'category' => 'ساعات'
            ]
        ]
    ]);
}