<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new Client();
        $client->name = 'Christina Chavez';
        $client->email = 'Christinachv@email.com';
        $client->gender = false;
        $client->occupation = 'modelador 3D';
        $client->save();

        $client = new Client();
        $client->name = 'Sergio Doria';
        $client->email = 'sadoria@email.com';
        $client->gender = true;
        $client->occupation = 'Programador DB';
        $client->save();

        $client = new Client();
        $client->name = 'Erik Torres';
        $client->email = 'Eriktorres@email.com';
        $client->gender = true;
        $client->occupation = 'Programador videojuegos';
        $client->save();
    }
}
