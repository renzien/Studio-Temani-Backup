<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Home;
use App\Models\About;
use App\Models\Studio;
use App\Models\Pricelist;
use App\Models\Contact;
use App\Models\PricelistHome;
use App\Models\Book;
use App\Models\CreaSpace;
use App\Models\Bookpost;
use App\Models\Packagebook;
use App\Models\SelfSession;
use App\Models\FamilyPhoto;
use App\Models\Quote;
use App\Models\Package;
use App\Models\Inquiry;
use App\Models\Family;
use App\Models\SelfPhoto;
use App\Models\CreativeSpace;
use App\Models\HomeStudio;
use App\Models\PhotoSave;
use App\Models\StudioEquip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Joko',
            'email' => 'joko123@gmail.com',
            'password' => '12345'
        ]);
        
        Home::create([
            'title' => 'Studio Temani Cabang Mirai Foundation',
            'tagline' => 'Yang punya kyouka kirigiri',
            'photo' => 'bg-hero-2.jpg'
        ]);

        About::create([
            'title' => 'Tentang Studio Temani',
            'desc' => 'Studio Temani adalah studio yang berada di bawah naungan Mirai Foundation. 
                        Studio ini berdiri pada tanggal 1 Januari 2021.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Studio::create([
            'title' => 'Studio Yang Kita Punya',
            'desc' => 'Studio yang kita punya merupakan studio pribadi, dengan perlengkapan yang diberikan
                        oleh para investor yang ada di Mirai Foundation. Studio ini berada di bawah naungan
                        Mirai Foundation. Studio ini berdiri pada tanggal 1 Januari 2021.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Pricelist::create([
            'title' => 'Pricelist Studio Temani',
            'desc' => 'Abadikan momen spesial Anda dengan Studio Temani dan kenang selamanya. Harga Daftar Harga kami dirancang untuk memberikan Anda pengalaman fotografi yang disesuaikan, memastikan bahwa setiap kesempatan dikenang dengan sukacita. Berikut adalah daftar harga kami untuk berbagai fasilitas studio.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Contact::create([
            'desc' => 'Hi! Kalo kalian mau tanya-tanya atau mau booking studio, bisa langsung hubungi kontak di bawah ini ya! Jangan lupa follow juga akun sosial media kita!',
        ]);

        PricelistHome::create([
            'title' => 'Lihat Harga Pricelist Kita!',
            'desc' => 'Abadikan momen spesial Anda dengan Studio Temani dan kenang selamanya. Harga Daftar Harga kami dirancang untuk memberikan Anda pengalaman fotografi yang disesuaikan, memastikan bahwa setiap kesempatan dikenang dengan sukacita. Berikut adalah daftar harga kami untuk berbagai fasilitas studio.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Inquiry::create([
            'title' => 'Inquiry',
            'desc' => 'Hi! Kalo kalian mau tanya-tanya atau mau booking studio, bisa langsung hubungi kontak di bawah ini ya! Jangan lupa follow juga akun sosial media kita!',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Family::create([
            'title' => 'Sesi Foto Keluarga',
            'tag1' => '//Studio Besar',
            'desc1' => '(Hanya Tersedia Background Putih)',
            'tag2' => '//30 Minut per Sesi',
            'desc2' => '(Bebas Potret)',
            'unit1' => '5 - 7 Pax',
            'price1' => '200K',
            'descprice1' => 'Dapat 3 Print Foto 4R',
            'unit2' => '8 - 10 Pax',
            'price2' => '300K',
            'descprice2' => 'Dapat 5 Print Foto 4R',
            'photo' => 'bg-hero-2.jpg'
        ]);

        SelfPhoto::create([
            'title' => 'Sesi Foto Sendiri',
            'tag1' => '//Studio Kecil',
            'desc1' => '(Hanya Tersedia Background Putih)',
            'tag2' => '//20 Menit Per Sesi',
            'desc2' => '(Potret Dibatasi)',
            'unit1' => '1 - 2 Pax',
            'price1' => '400K',
            'descprice1' => 'Dapat 1 Samsung Galaxy Flip',
            'unit2' => '3 - 4 Pax',
            'price2' => '650K',
            'descprice2' => 'Dapat 2 Mobil Purrarri',
            'photo' => 'bg-hero-2.jpg'
        ]);

        CreativeSpace::create([
            'title' => 'Sesi Foto Creative Space',
            'tag1' => '//Gratis Semua Studio',
            'desc1' => 'Termasuk semua props',
            'tag2' => '//Gratis pakai semua peralatan dan aksesoris',
            'desc2' => 'Lighting, Kamera, dll',
            'tag3' => '//Diizinkan membawa peralatan sendiri',
            'desc3' => 'Jangan lupa kontak ngab',
            'tag4' => '//Gratis 1 Fotografer',
            'desc4' => 'Kalo mau bawa fotografer sendiri',
            'tag5' => '//Gratis 1 Asisten',
            'desc5' => 'Kalo mau bawa asisten sendiri',
            'unit1' => '1 - 2 Jam',
            'price1' => '500K',
            'descprice1' => 'Dapat 2 Mobil Purrarri',
            'unit2' => '3 - 4 Jam',
            'price2' => '800K',
            'descprice2' => 'Dapat 2 Mobil Purrarri',
            'photo' => 'bg-hero-2.jpg'
        ]);

        HomeStudio::create([
            'title' => 'Studio Temani Cabang Nihon',
            'tagline' => 'Yang punya oda nobunaga',
            'photo' => 'bg-hero-2.jpg'
        ]);

        StudioEquip::create([
            'title' => 'Perlengkapan Studio Temani',
            'tagline' => 'Kalian bisa cek disini :',
            'list1' => 'Lampu Flashlight Godox SKII400',
            'list2' => 'Softbox Lantern',
            'list3' => 'Continuous Light Imbex',
            'list4' => 'Tripod Kaki 3, Backdrop',
            'list5' => 'Banyak Background',
            'list6' => 'Kamera Canon 5D Mark IV',
            'desc' => 'Studio Temani memiliki perlengkapan yang lengkap untuk kebutuhan fotografi kalian. Kalian bisa cek disini :',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Quote::create([
            'quote' => 'Kita tidak akan pernah tahu, sampai kita mencoba.',
            'author' => 'Albert Einstein',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Package::create([
            'title' => 'Paket Studio Temani',
            'descpack' => 'Temukan paket-paket eksklusif kami yang dirancang khusus untuk memenuhi berbagai kebutuhan fotografi Anda. Dari paket pernikahan yang romantis hingga sesi potret keluarga yang hangat, setiap paket memberikan pengalaman fotografi yang tak terlupakan.'
        ]);

        FamilyPhoto::create([
            'title' => 'Sesi Foto Keluarga',
            'descpack' => 'Sesi Foto Keluarga, merupakan foto sesi dengan foto keluarga yang bersangkutan dengan harga yang sangat amat terjangkau. Dengan harga yang terjangkau, kalian bisa mendapatkan 3 Print Foto 4R untuk 5 - 7 Pax, dan 5 Print Foto 4R untuk 8 - 10 Pax.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        SelfSession::create([
            'title' => 'Sesi Foto Sendiri',
            'descpack' => 'Sesi Foto Sendiri, merupakan foto sesi dengan foto sendiri yang bersangkutan dengan harga yang sangat amat terjangkau. Dengan harga yang terjangkau, kalian bisa mendapatkan 1 Samsung Galaxy Flip untuk 1 - 2 Pax, dan 2 Mobil Purrarri untuk 3 - 4 Pax.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        CreaSpace::create([
            'title' => 'Sesi Foto Creative Space',
            'descpack' => 'Sesi Foto Creative Space, merupakan foto sesi dengan foto creative space yang bersangkutan dengan harga yang sangat amat terjangkau. Dengan harga yang terjangkau, kalian bisa mendapatkan 2 Mobil Purrarri untuk 1 - 2 Jam, dan 2 Mobil Purrarri untuk 3 - 4 Jam.',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Book::create([
            'fullname' => 'Renzien',
            'lastname' => 'Ishikawa',
            'email' => 'renzien10@gmail.com',
            'guest' => '4',
            'date' => '2021-10-10',
            'time' => '10:00:00',
            'package' => 'Sesi Foto Keluarga',
            'phone' => '081234567890'
        ]);

        Bookpost::create([
            'tagline' => 'Secure Your Moment With Us ! Book and chilling together ! with Studio Temani',
            'photo' => 'bg-hero-2.jpg'
        ]);

        Packagebook::create([
            'title' => 'Paket Studio Temani',
            'desc' => 'Temukan paket-paket eksklusif kami yang dirancang khusus untuk memenuhi berbagai kebutuhan fotografi Anda. Dari paket pernikahan yang romantis hingga sesi potret keluarga yang hangat, setiap paket memberikan pengalaman fotografi yang tak terlupakan.'
        ]);

        PhotoSave::create([
            'photo' => 'bg-hero-2.jpg',
            'title' => 'Ini judul',
            'desc' => 'Ini link google drive'
        ]);
    }
}
