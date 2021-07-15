<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MountainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mountains')->insert([
            'mountain_name' => 'Kerinci',
            'height' => '3805',
            'img' => 'kerinci.jpg',
            'description' => 'Menjadi gunung tertinggi di pulau Sumatera, Gunung Kerinci layak dinobatkan sebagai salah satu Seven Summit Indonesia. Gunung Kerinci memiliki ketinggian 3.805 mdpl.
            Lokasi Gunung Kerinci berada di perbatasan antara Sumatera Barat dan Jambi. Gunung Kerinci terletak di Taman Nasional Kerinci Seblat yang juga menjadi taman nasional terbesar di Indonesia.
            Salah satu Seven Summit Indonesia ini telah ditetapkan sebagai World Heritage Site dengan kategori Tropical Rainforest Heritage of Sumatra. Selain itu, Gunung Kerinci juga menyandang status sebagai gunung berapi tertinggi di Asia Tenggara.',
            'days' => '3',
            'quota' => '300',
            'max' => '10',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Semeru',
            'height' => '3676',
            'img' => 'semeru.jpg',
            'description' => 'Terletak di perbatasan Kabupaten Malang dan Lumajang, Gunung Semeru masuk dalam jajaran puncak tertinggi di Indonesia. Gunung Semeru memiliki ketinggian 3.676 mdpl.
            Gunung Semeru merupakan salah satu gunung aktif di Indonesia, sehingga kurang lebih 20 menit sekali kawahnya mengeluarkan abu vulkanik. Seven Summit Indonesia ini berada di bawah pengawasan administrasi Taman Nasional Bromo Tengger Semeru.
            Daya tarik utama Gunung Semeru adalah karakteristik medannya yang bervariasi. Kita dapat menemukan lanskap padang sabana, hutan cemara, danau gunung, hingga hutan montana dalam perjalanan menuju puncak Gunung Semeru.',
            'days' => '3',
            'quota' => '300',
            'max' => '8',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Rinjani',
            'height' => '3726',
            'img' => 'rinjani.jpg',
            'description' => 'Masuk dalam salah satu Seven Summit Indonesia, Gunung Rinjani merupakan gunung tertinggi di gugusan kepulauan Sunda Kecil. Gunung Rinjani memiliki ketinggian 3.726 mdpl.
            Gunung Rinjani menjadi gunung berapi aktif kedua tertinggi di Indonesia. Salah satu puncak tertinggi di Indonesia ini berada di Pulau Lombok, Nusa Tenggara Barat. Salah satu daya tarik Gunung Rinjani adalah danau kaldera yang berada di puncaknya.
            Untuk mencapai puncak tertinggi di Indonesia ini kita bisa melewati dua jalur pendakian, yakni dari Sembalun dan Senaru.',
            'days' => '2',
            'quota' => '250',
            'max' => '10',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Bukit Raya',
            'height' => '2278',
            'img' => 'bukit-raya.jpg',
            'description' => 'Pulau Kalimantan juga menjadi salah satu lokasi sport tourism yang masuk dalam Seven Summit Indonesia. Gunung Bukit Raya memiliki ketinggian 2.278 mdpl dan masuk dalam jajaran puncak tertinggi di Indonesia.
            Gunung Bukit Raya berada di perbatasan Kalimantan Barat dan Kalimantan Tengah. Secara administratif puncak tertinggi di Indonesia ini berada di bawah pengawasan Taman Nasional Bukit Baka-Bukit Raya. Gunung Bukit Raya bukan termasuk dalam gunung berapi.',
            'days' => '3',
            'quota' => '300',
            'max' => '5',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Latimojong',
            'height' => '3430',
            'img' => 'latimojong.jpg',
            'description' => 'Seven Summit Indonesia juga terdapat di Pulau Sulawesi, tepatnya di Gunung Latimojong yang memiliki ketinggian 3.430 mdpl. Puncak tertinggi Gunung Latimojong berada di puncak Rantemario.
            Salah satu daya tarik dari Gunung Latimojong adalah ragam jenis satwa yang menghuni lokasi ini. Jika beruntung, kita dapat menjumpai anoa dan babi rusa selama pendakian. Jalur pendakian yang umum dipakai untuk mencapai puncak Rantemario adalah jalur Kecamatan Baraka.',
            'days' => '2',
            'quota' => '200',
            'max' => '8',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Binaiya',
            'height' => '3027',
            'img' => 'binaiya.jpg',
            'description' => 'Gunung Binaiya merupakan salah satu puncak tertinggi di Indonesia yang terletak di Kepulauan Maluku. Puncak Binaiya memiliki ketinggian 3.027 mdpl dan berada di pulau Seram, Maluku.
            Gunung Binaiya termasuk dalam pegunungan karst dan tidak aktif. Keunikan dari gunung ini adalah medannya yang bervariasi. Gunung Binaiya memiliki hutan dengan ekosistem pantai, hutan rawa, hutan hujan dataran rendah, hutan hujan pegunungan, hingga hutan subalpin.',
            'days' => '2',
            'quota' => '200',
            'max' => '10',
        ]);
    }
}
