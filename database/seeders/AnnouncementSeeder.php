<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10000; $i++) {
            $announcement = new Announcement();
            $announcement->author = 'Fake Author ' . $i;
            $announcement->date = new \DateTime();
            $announcement->body = 'Fake Body ' . $i;
            $announcement->save();
        }
    }
}
