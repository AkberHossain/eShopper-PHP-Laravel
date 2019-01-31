<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'qobile' , 'fobile' ,'hobile' ,'hobile' ,'ooobile' ,
            'obile' ,'mobile4' ,'mobile3' ,'mobile2' ,'mobile1' ,
        ];

        foreach($tags as $tag)
        {
            Tag::create([
                'name' => $tag ,
            ]);
        }
    }
}
