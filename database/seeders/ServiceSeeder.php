<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s = new Service();
        $s->name = 'test';
        $s->image = 'test';
        $s->price = 1515;
        $s->content = 'aaaaaaa';
        $s->save();


        $s = new Service();
        $s->name = 'test';
        $s->image = 'test';
        $s->price = 1515;
        $s->content = 'aaaaaaa';
        $s->save();


        $s = new Service();
        $s->name = 'test';
        $s->image = 'test';
        $s->price = 1515;
        $s->content = 'aaaaaaa';
        $s->save();


        $s = new Service();
        $s->name = 'test';
        $s->image = 'test';
        $s->price = 1515;
        $s->content = 'aaaaaaa';
        $s->save();

        $s = new Service();
        $s->name = 'test';
        $s->image = 'test';
        $s->price = 1515;
        $s->content = 'aaaaaaa';
        $s->save();

        $p = new Project();
        $p->name = 'name';
        $p->image = 'name';
        $p->content = 'name';
        $p->save();
    }
}
