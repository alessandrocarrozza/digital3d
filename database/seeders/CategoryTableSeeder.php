<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    // dentro la function run inseriamo i dati statici che vogliamo inserire nel db
    // creiamo array dei dati. Un ciclo per creare un oggetto di tipo Model per ogni dato e poi save()
    // dopo aver scritto, eseguiamo il seeder
    public function run(): void
    {
        $categories = ['Pittura', 'Scultura', 'Architettura', 'Animazione', 'Gaming', 'Design del prodotto', 'Scienza', 
        'Astratto', 'Tecnologia', 'Natura', 'Sport', 'Musica', 'Animali', 'Spazio', 'Geometria', 'Cibo', 'Moda'];
        foreach ($categories as $category) {
            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->save();
        }
    }
}
