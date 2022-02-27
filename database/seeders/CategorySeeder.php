<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->runParentCategories();
        $this->runChildCategories();
    }

    private function runParentCategories(){
        $book_string = 'Sách văn học,
        Sách kinh tế,
        Sách thiếu nhi,
        Sách kỹ năng sống,
        Sách Bà mẹ - Em bé,
        Sách Giáo Khoa - Giáo Trình,
        Sách Học Ngoại Ngữ,
        Sách Tham Khảo';
        $books = explode(',',$book_string);

        foreach ($books as $book) {
            $book = trim($book);
            $data = [
                'title'     => $book,
                'slug'      => Str::slug($book),
                'banner'    => 'category/banners/xh2_hero1.jpg.pagespeed.ic.YMkSfpi8tv.webp',
                'parent_id' => 0,
                'status'    => 1,
            ];
            DB::table('categories')->insert($data);
        }
    }
    private function runChildCategories(){
        $book_string = 'Thơ,
        Tiểu sử - Hồi ký,
        Tiểu Thuyết,
        Tranh Truyện,
        Truyện cổ tích - Ngụ ngôn,
        Truyện cười';

        $books = explode(',',$book_string);

        foreach ($books as $book) {
            $book = trim($book);
            $data = [
                'title'     => $book,
                'slug'      => Str::slug($book),
                'banner'    => 'category/banners/xh2_hero1.jpg.pagespeed.ic.YMkSfpi8tv.webp',
                'parent_id' => 1,
                'status'    => 1,
            ];
            DB::table('categories')->insert($data);
        }
    }
}
