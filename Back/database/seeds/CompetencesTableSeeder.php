<?php
//test faire un pul resquest
use Illuminate\Database\Seeder;

class CompetencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('competences')->insert([
        'nom_competence'=>'PHP',

      ]);
      DB::table('competences')->insert([
        'nom_competence'=>'HTML5',

      ]);
      DB::table('competences')->insert([
        'nom_competence'=>'CSS3',

      ]);
      DB::table('competences')->insert([
        'nom_competence'=>'JAVASCRIPT',

      ]);
      DB::table('competences')->insert([
        'nom_competence'=>'WORPRESS',

      ]);
      DB::table('competences')->insert([
        'nom_competence'=>'LUMEN',

      ]);
    }
}
