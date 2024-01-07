@extends('layouts.main2')
@section('title', 'Checking Order')
@section('container2')
    <nav class="flex flex-row items-center pl-21.5 pt-7.5">
        @include('partials.breadcrumb')
    </nav>
    <section class="font-quicksand pt-10.5">
        <div class="pl-21.5">
            <h1 class="text-2xl font-bold">Dont forget to check it back your order!</h1>
            <p class="font-normal text-xl">Before you continue to finalization</p>
        </div>
    </section>
    <section class="grid grid-cols-2 gap-15 pl-21.5 pt-15.5">
        @include('partials.invoice')
        <div class="font-quicksand">
            <h1 class="font-bold text-3xl">Pembayaran Akan Dialihkan ke WhatsApp</h1>
            <p class="font-normal mt-2 text-2xl">Pastikan Pesanan di Invoice benar ya!</p>
            <div class="pr-20">
                <p class="font-normal mt-5 text-justify text-lg">Tim kami akan memandu Anda melalui proses pembayaran dengan
                    langkah-langkah
                    yang sederhana melalui aplikasi WhatsApp. Jika Anda memiliki pertanyaan atau memerlukan bantuan
                    tambahan,
                    silakan hubungi kami melalui pesan WhatsApp. Kami siap membantu!</p>
            </div>
            <a
                href="https://wa.me/6287877689344?text=Halo%2C%20Berikut%20adalah%20pesanan%20saya%0A%0A-Nama%20depan:%20{{ $book->fullname }}%0A-Nama%20belakang:%20{{ $book->lastname }}%0A-Tanggal:%20{{ $book->date }}%0A-Waktu:%20{{ $book->time }}%0A-Paket:%20{{ $book->package }}"><button
                    class="bg-slate-900 hover:bg-black text-white font-quicksand font-bold py-2 px-4 mt-10 mr-5 rounded-lg">
                    <i class="ri-whatsapp-line"></i>
                    Payment on WhatsApp</button></a>
        </div>
    </section>
@endsection
