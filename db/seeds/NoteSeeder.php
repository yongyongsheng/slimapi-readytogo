<?php

use Phinx\Seed\AbstractSeed;
use Database\InitCapsuleTrait;
use App\Models\Note;

class NoteSeeder extends AbstractSeed
{
    use InitCapsuleTrait;

    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $n = new Note();
        $n->text = 'Hello World!';
        $n->save();

        $n2 = new Note();
        $n2->text = 'Hello World2!';
        $n2->save();
    }
}
