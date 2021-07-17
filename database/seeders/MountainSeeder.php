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
            'description' => 'Being the highest mountain on the island of Sumatra, Mount Kerinci deserves to be named as one of the Seven Summits of Indonesia. Mount Kerinci has a height of 3,805 masl.
            The location of Mount Kerinci is on the border between West Sumatra and Jambi. Mount Kerinci is located in the Kerinci Seblat National Park which is also the largest national park in Indonesia.
            One of the Seven Summits of Indonesia has been designated as a World Heritage Site in the category of Tropical Rainforest Heritage of Sumatra. In addition, Mount Kerinci also holds the status as the highest volcano in Southeast Asia.',
            'days' => '3',
            'quota' => '300',
            'max' => '10',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Semeru',
            'height' => '3676',
            'img' => 'semeru.jpg',
            'description' => 'Located on the border of Malang and Lumajang regencies, Mount Semeru is one of the highest peaks in Indonesia. Mount Semeru has a height of 3,676 meters above sea level.
            Mount Semeru is one of the active volcanoes in Indonesia, so that every 20 minutes the crater emits volcanic ash. Seven Summit Indonesia is under the supervision of the administration of Bromo Tengger Semeru National Park.
            The main attraction of Mount Semeru is its varied terrain characteristics. We can find savanna landscapes, cypress forests, mountain lakes, to montana forests on the way to the top of Mount Semeru.',
            'days' => '3',
            'quota' => '300',
            'max' => '8',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Rinjani',
            'height' => '3726',
            'img' => 'rinjani.jpg',
            'description' => 'Included in one of the Seven Summits of Indonesia, Mount Rinjani is the highest mountain in the Lesser Sunda archipelago. Mount Rinjani has a height of 3,726 meters above sea level.
            Mount Rinjani is the second highest active volcano in Indonesia. One of the highest peaks in Indonesia is located on the island of Lombok, West Nusa Tenggara. One of the attractions of Mount Rinjani is the caldera lake at its peak.',
            'days' => '2',
            'quota' => '250',
            'max' => '10',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Bukit Raya',
            'height' => '2278',
            'img' => 'bukit-raya.jpg',
            'description' => 'Kalimantan Island is also one of the sports tourism locations included in the Seven Summit Indonesia. Mount Bukit Raya has a height of 2,278 meters above sea level and is included in the ranks of the highest peaks in Indonesia.
            Mount Bukit Raya is located on the border of West Kalimantan and Central Kalimantan. Administratively, the highest peak in Indonesia is under the supervision of the Bukit Baka-Bukit Raya National Park. Mount Bukit Raya is not a volcano.',
            'days' => '3',
            'quota' => '300',
            'max' => '5',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Latimojong',
            'height' => '3430',
            'img' => 'latimojong.jpg',
            'description' => 'Seven Summit Indonesia is also located on the island of Sulawesi, precisely on Mount Latimojong which has an altitude of 3,430 meters above sea level. The highest peak of Mount Latimojong is at the top of Rantemario.
            One of the attractions of Mount Latimojong is the variety of animal species that inhabit this location. If lucky, we can meet anoa and deer pigs during the hike. The climbing route that is commonly used to reach the top of Rantemario is the Baraka District route.',
            'days' => '2',
            'quota' => '200',
            'max' => '8',
        ]);
        DB::table('mountains')->insert([
            'mountain_name' => 'Binaiya',
            'height' => '3027',
            'img' => 'binaiya.jpg',
            'description' => 'Mount Binaiya is one of the highest peaks in Indonesia, located in the Maluku Islands. The peak of Binaiya has an altitude of 3,027 meters above sea level and is located on the island of Seram, Maluku.
            Mount Binaiya belongs to the karst mountains and is not active. The uniqueness of this mountain is its varied terrain. Mount Binaiya has forests with coastal ecosystems, swamp forests, lowland rain forests, mountain rain forests, to subalpine forests.',
            'days' => '2',
            'quota' => '200',
            'max' => '10',
        ]);
    }
}
