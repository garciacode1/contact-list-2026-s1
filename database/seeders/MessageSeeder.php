<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $MessageTopics = [
            [
                'name'=>'general message',
                'email'=>'kith@gmail.com',
                'subject'=>'general messsage about seeder',
                'topic_id'=>1,
                'message'=>'',
                'read_at'

            ],
            [
                'name',
                'email',
                'subject',
                'topic_id',
                'message',
                'read_at'
            ],
            [
                'name',
                'email',
                'subject',
                'topic_id',
                'message',
                'read_at'
            ],

    }
}
