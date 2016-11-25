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

        //////////

        factory(\App\Entities\Question::class)->create([
            'number'  => '1',
            'question'  => 'Divisiones de la Ingeniería de Software.'
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 3,
            'answer'    => 'Análisis, Diseño e Implementación',
            'ans'       => true
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 3,
            'answer'    => 'Diseño y Codificación de Software',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 3,
            'answer'    => 'Análisis e Implementación',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 3,
            'answer'    => 'Planificación, Diseño e Implementación',
            'ans'       => false
        ]);

        //////////

        factory(\App\Entities\Question::class)->create([
            'number'  => '1',
            'question'  => 'La Ingeniería de Software...'
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 4,
            'answer'    => 'Es una disciplina con una larga duración',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 4,
            'answer'    => 'Está relacionada con la Programación de Computadoras, las Ciencias de la Computación, la Administración General y la Ingeniería de Sistemas',
            'ans'       => true
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 4,
            'answer'    => 'Es toda construcción de software involucra realizar tareas de Ingeniería de Software',
            'ans'       => false
        ]);

        factory(\App\Entities\Answer::class)->create([
            'question_id'   => 4,
            'answer'    => 'Aplica especialmente a la construcción de software que es llevada a cabo por una persona para ser utilizado por ella misma',
            'ans'       => false
        ]);
    }
}
