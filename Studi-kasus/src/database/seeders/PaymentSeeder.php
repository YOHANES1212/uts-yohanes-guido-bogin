<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Book;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $book = Book::first();

        if ($book) {
            Payment::firstOrCreate([
                'payer_name' => 'Yohanes',
                'book_id' => $book->id,
                'amount_paid' => 10.00,
                'paid_at' => now()
            ]);
        } else {
            $this->command->info('Tidak ada data buku. Jalankan seeder BookSeeder dulu.');
        }
    }
}
