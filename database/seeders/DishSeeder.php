<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $dishes = [
            ['Rendang Sapi', 'Sumatera Barat', 'Daging sapi, santan kelapa, cabai merah, serai, lengkuas, kunyit, daun jeruk', 45000, 'rendang.jpg',
                'Daging sapi yang dimasak perlahan dalam santan dan rempah hingga kering dan meresap. Cita rasanya gurih, pedas, dan kaya aroma.'],
            ['Gudeg', 'Yogyakarta', 'Nangka muda, santan, gula jawa, bawang putih, daun salam, telur, ayam', 30000, 'gudeg.jpg',
                'Nangka muda yang dimasak berjam-jam bersama gula jawa dan santan. Rasanya manis legit, biasa disajikan dengan telur dan ayam.'],
            ['Rawon', 'Jawa Timur', 'Daging sapi, kluwek, serai, lengkuas, bawang merah, tauge, telur asin', 35000, 'rawon.jpg',
                'Sup daging berkuah hitam pekat dari kluwek. Disajikan bersama tauge pendek, sambal, dan telur asin.'],
            ['Pempek Kapal Selam', 'Sumatera Selatan', 'Ikan tenggiri, tepung sagu, telur, bawang putih, cuko (cuka, gula merah, cabai)', 25000, 'pempek.jpg',
                'Adonan ikan dan sagu berisi telur ayam, digoreng lalu disiram cuko yang asam, manis, dan pedas.'],
            ['Coto Makassar', 'Sulawesi Selatan', 'Daging sapi, jeroan, kacang tanah, rempah coto, bawang goreng, daun bawang', 38000, 'coto.jpg',
                'Sup daging khas Makassar dengan kuah kental dari kacang tanah dan rempah. Paling nikmat dimakan dengan ketupat.'],
            ['Ayam Betutu', 'Bali', 'Ayam kampung, base genep, daun singkong, cabai, kunyit, jahe, kencur', 55000, 'betutu.jpg',
                'Ayam utuh berisi bumbu base genep, dibungkus daun pisang lalu dimasak lama hingga empuk dan pedas.'],
            ['Soto Betawi', 'DKI Jakarta', 'Daging sapi, jeroan, santan, susu, kentang, tomat, emping, bawang goreng', 32000, 'soto.jpg',
                'Soto bersantan dan susu yang gurih dengan potongan daging sapi, kentang, dan tomat segar.'],
            ['Papeda Ikan Kuah Kuning', 'Maluku & Papua', 'Sagu, ikan tongkol, kunyit, jeruk nipis, serai, daun kemangi, cabai', 40000, 'papeda.jpg',
                'Bubur sagu yang lengket disantap dengan ikan berkuah kuning yang segar dan asam pedas.'],
        ];

        foreach ($dishes as [$name, $region, $ingredients, $price, $image, $description]) {
            Dish::create([
                'name' => $name,
                'origin_region' => $region,
                'ingredients' => $ingredients,
                'price' => $price,
                'image' => $image,
                'description' => $description,
            ]);
        }
    }
}
