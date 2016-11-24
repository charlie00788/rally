<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->question1();
    }

    public function question1()
    {
        factory(\App\Entities\Question::class)->create([
            'number'  => '1',
            'question'  => 'Selecciona una metodología ágil.'
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 1,
            'answer'    => 'UWE',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 1,
            'answer'    => 'SCRUM',
            'ans'       => true
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 1,
            'answer'    => 'UML',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 1,
            'answer'    => 'SD',
            'ans'       => false
        ]);

        //////////

        factory(\App\Entities\Question::class)->create([
            'number'  => '1',
            'question'  => 'Los componentes son...'
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 2,
            'answer'    => 'Una entidad independiente ejecutable',
            'ans'       => true
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 2,
            'answer'    => 'Un documento de seguimiento',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 2,
            'answer'    => 'Diagramas de caso de uso',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 2,
            'answer'    => 'Reportes de cronograma de trabajo',
            'ans'       => false
        ]);
    }
}
