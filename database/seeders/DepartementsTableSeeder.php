<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departements = [
            'Acupuncteur',
            'Algologue',
            'Allergologue',
            'Anatomo-pathologiste',
            'Anesthésiste-réanimateur',
            'Angiologue',
            'Autre',
            'Biologiste vétérinaire',
            'Cancérologue',
            'Cardiologue',
            'Chirurgien cancérologue',
            'Chirurgien cardio-vasculaire',
            'Chirurgien dentiste',
            'Chirurgien digestif - viscéral',
            'Chirurgien esthétique',
            'Chirurgien général',
            'Chirurgien hépato-biliaire et digestive',
            'Chirurgien orthopédiste et traumatologue',
            'Chirurgien pédiatre',
            'Chirurgien réparateur et plastique',
            'Chirurgien thoracique',
            'Dermatologue',
            'Diététicien',
            'Endocrinologue - maladies métaboliques',
            'Gastrologue entérologue',
            'Génétique médicale',
            'Gériatre',
            'Gérontologue',
            'Gynécologue obstétricien',
            'Gynécologue sexologue',
            'Homéopathe',
            'Infectiologue',
            'Infirmier',
            'Kinésithérapeute',
            'Médecin biologiste',
            'Médecin généraliste',
            'Médecin interne',
            'Médecin légal et de travail',
            'Médecin morphologique et anti-âge',
            'Médecin Ostéopathe',
            'Médecin physique et réadaptation fonctionnelle',
            'Médecin sportif',
            'Médecin urgentiste',
            'Médecine nucléaire',
            'Néphrologue',
            'Neurochirurgien',
            'Neurologue',
            'Neuropsychiatre',
            'Nutritionniste',
            'Odontologue chirurgicale',
            'Oncologue médicale',
            'Ophtalmologue',
            'Opticien',
            'Orthodontiste',
            'Orthopédiste dento-faciale',
            'Orthophoniste',
            'Orthoptiste',
            'Oto-rhino-laryngologue',
            'Parodontologue',
            'Pédiatre',
            'Pédodontiste',
            'Pharmacologue',
            'Pneumologue',
            'Podologue',
            'Psychiatre',
            'Psychologue',
            'Psychomotricité',
            'Radiologue',
            'Radiothérapeute',
            'Réanimateur',
            'Rhumatologue',
            'Sexologue',
            'Stomatologue et chirurgien maxillo-faciale',
            'Urologue et chirurgien urologue',
        ];

        foreach ($departements as $departement) {
            DB::table('departements')->insert([
                'libelle' => $departement,
            ]);
        }
    }
}

   
