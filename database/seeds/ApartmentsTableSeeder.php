<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apartments')->truncate();
        DB:table('apartments')->insert([
        [
            'id'=>1,
            'name'=>'Home 1',
            'address'=>'Ha Noi',
            'price'=>'150000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'data:image/jpeg;base64,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.jpg',
            'status'=>'1'
        ],
        [
            'id'=>3,
            'name'=>'Home 3',
            'address'=>'Ha Noi',
            'price'=>'1550000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'data:image/jpeg;base64,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.jpg',
            'status'=>'1'
        ],
        [
            'id'=>4,
            'name'=>'Home 4',
            'address'=>'Ha Noi',
            'price'=>'1250000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>5,
            'name'=>'Home 5',
            'address'=>'Ha Noi',
            'price'=>'1650000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>6,
            'name'=>'Home 6',
            'address'=>'Ha Noi',
            'price'=>'350000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>7,
            'name'=>'Home 7',
            'address'=>'Ha Noi',
            'price'=>'550000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>8,
            'name'=>'Home 8',
            'address'=>'Ha Noi',
            'price'=>'850000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>9,
            'name'=>'Home 9',
            'address'=>'Ha Noi',
            'price'=>'950000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>10,
            'name'=>'Home 10',
            'address'=>'Ha Noi',
            'price'=>'250000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>11,
            'name'=>'Home 11',
            'address'=>'Ha Noi',
            'price'=>'150000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>12,
            'name'=>'Home 12',
            'address'=>'Ha Noi',
            'price'=>'1250000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>13,
            'name'=>'Home 13',
            'address'=>'Ha Noi',
            'price'=>'8450000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>14,
            'name'=>'Home 14',
            'address'=>'Ha Noi',
            'price'=>'890000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>15,
            'name'=>'Home 15',
            'address'=>'Ha Noi',
            'price'=>'990000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>16,
            'name'=>'Home 16',
            'address'=>'Ha Noi',
            'price'=>'999999',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>17,
            'name'=>'Home 17',
            'address'=>'Ha Noi',
            'price'=>'6969696',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>18,
            'name'=>'Home 18',
            'address'=>'Ha Noi',
            'price'=>'450000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>19,
            'name'=>'Home 19',
            'address'=>'Ha Noi',
            'price'=>'780000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
        [
            'id'=>20,
            'name'=>'Home 20',
            'address'=>'Ha Noi',
            'price'=>'190000',
            'information'=>'Nhà đẹp',
            'details'=>'Gía rẻ',
            'image'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDrn_oO4YZi2LYynP4kemnewj_llvqvk5dCQL3pQu83b4PmV2O-w.jpg',
            'status'=>'1'
        ],
    ]);
    }
}
