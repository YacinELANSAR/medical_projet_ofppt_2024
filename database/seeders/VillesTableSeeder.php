<?php 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $villes = [
            'Ad Dakhla', 'Ad Darwa', 'Agadir', 'Aïn Harrouda', 'Ait Melloul', 'Ait Ourir', 'Al Aaroui', 'Al Fqih Ben Çalah',
            'Al Hoceïma', 'Al Khmissat', 'Azemmour', 'Azrou', 'Barrechid', 'Ben Guerir', 'Beni Mellal', 'Beni Yakhlef',
            'Berkane', 'Béni Mellal', 'Bouskoura', 'Boujad', 'Casablanca', 'El Aïoun', 'El Jadid', 'El Kelaa des Srarhna',
            'Errachidia', 'Fès', 'Fnidq', 'Guelmim', 'Guercif', 'Inezgane', 'Jerada', 'Kenitra', 'Khénifra', 'Kouribga',
            'Ksar El Kebir', 'Larache', 'Laâyoune', 'Martil', 'M\'diq', 'Mediouna', 'Meknès', 'Midalt', 'Mohammedia',
            'Moulay Abdallah', 'Mrirt', 'My Drarga', 'Nador', 'Oued Zem', 'Oujda-Angad', 'Oulad Teïma', 'Ouezzane', 'Rabat',
            'Safi', 'Settat', 'Sefrou', 'Sidi Bennour', 'Sidi Qacem', 'Sidi Slimane', 'Sidi Yahya Zaer', 'Skhirate',
            'Taourirt', 'Taza', 'Temara', 'Temsia', 'Tétouan', 'Youssoufia', 'Zagora',
        ];

        foreach ($villes as $ville) {
            DB::table('villes')->insert([
                'libelle' => $ville,
            ]);
        }
    }
}

?>