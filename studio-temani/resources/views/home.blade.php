@extends('layouts.main')
@section('title', 'Home')
@section('container')
    <header class="h-screen"
        style="background-image: url('{{ asset('storage/post-image/'. $homes->photo) }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="flex flex-col pl-44 justify-center h-4/5 text-white">
            <div class="mt-48">
                <h1 class="text-2xl font-quicksand" data-aos="fade-up" data-aos-duration="1300">{{ $homes->title }}</h1>
                <h1 class="font-bold text-4xl font-quicksand" data-aos="fade-up" data-aos-duration="1600">
                    {!! $homes->tagline !!}</h1>
            </div>
        </div>
        <div class="flex flex-col relative items-center justify-center text-white font-quicksand mt-3">
            <a href="#about-us">Scroll Down</a>
            <i class="ri-arrow-down-s-line mt-5"></i>
        </div>
    </header>
    <section class="grid grid-cols-2">
        <div id="about-us" class="text-black">
            <h1 class="font-quicksand mt-24 ml-20 text-4xl font-bold leading-normal" data-aos="fade-down"
                data-aos-duration="1500">{{ $abouts->title }}</h1>
            <div class="text-lg text-justify font-quicksand mt-8 ml-20 mr-28 mb-9" data-aos="fade-down"
                data-aos-duration="1500">
                {!! $abouts->desc !!}
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-20" data-aos="flip-right" data-aos-duration="1000">
                <img class="rounded-3xl" src="{{ asset('storage/post-image/'. $abouts->photo) }}" alt="Studio Temani About">
            </div>
        </div>
    </section>
    <section class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-20" data-aos="flip-left" data-aos-duration="1000">
                <img class="rounded-3xl" src="{{ asset('storage/post-image/'. $studios->photo) }}" alt="Studio Temani Studio">
            </div>
        </div>
        <div class="studio text-black">
            <h1 class="font-quicksand mt-24 ml-20 text-4xl font-bold leading-normal" data-aos="fade-right"
                data-aos-duration="1500">{{ $studios->title }}</h1>
            <div class="text-lg text-justify font-quicksand mt-8 ml-20 mr-28 mb-9" data-aos="fade-right"
                data-aos-duration="1500">
                {!! $studios->desc !!}
            </div>
            <div class="py-28 px-20">
                <a href="/studio"><button
                        class="bg-slate-900 hover:bg-black text-white font-quicksand font-bold py-2 px-4 mr-5 rounded-lg"
                        data-aos="fade-right" data-aos-duration="1500">Baca Selengkapnya</button></a>
            </div>
        </div>
    </section>
    <section class="p-20"
        style="background-image: url('{{ asset('storage/post-image/'. $pricelists->photo) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex flex-col items-center h-2/5 text-white font-quicksand">
            <h1 class="text-4xl font-bold leading-normal" data-aos="fade-left" data-aos-duration="1500">
                {{ $pricelists->title }}</h1>
            <div class="text-center justify-center m-28 text-xl leading-normal" data-aos="fade-left"
                data-aos-duration="1500">
                {!! $pricelists->desc !!}
            </div>
            <a href="/pricelist"><button
                    class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 rounded-lg"
                    data-aos="fade-left" data-aos-duration="1500">Cek Sekarang</button></a>
        </div>
    </section>
    <div class="ml-20 pt-10 font-quicksand">
        <h1 class="font-bold text-4xl mt-4 leading normal" data-aos="fade-down" data-aos-duration="500">Contact Us!</h1>
        <h1 class="text-2xl leading normal pb-10" data-aos="fade-down" data-aos-duration="500">For more information</h1>
    </div>
    <section class="grid grid-cols-2 justify-items-center font-quicksand" data-aos="fade-up" data-aos-duration="400">
        <form action="#" method="POST" class="flex flex-col gap-5 p-10 bg-contact-us rounded-lg w-4/5">
            <div class="flex flex-col gap-3">
                <label for="name" class="text-white">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Your Name"
                    class="border-2 border-gray-300 p-2 rounded-lg w-full">
            </div>

            <div class="flex flex-col gap-3">
                <label for="name" class="text-white">Email Address</label>
                <input type="text" name="name" id="name" placeholder="Your Email"
                    class="border-2 border-gray-300 p-2 rounded-lg w-full">
            </div>

            <div class="flex flex-col gap-3">
                <label for="name" class="text-white">Subject</label>
                <input type="text" name="name" id="name" placeholder="Type Here"
                    class="border-2 border-gray-300 p-2 rounded-lg w-full">
            </div>

            <div class="flex flex-col gap-3">
                <label for="name" class="text-white">Message</label>
                <textarea name="message" id="message" cols="30" rows="10"
                    class="border-2 border-gray-300 p-2 rounded-lg w-full" placeholder="Enter your message"></textarea>
            </div>
            <div class="relative self-center bottom-10">
                <button class="bg-slate-900 hover:bg-black p-3 px-20 rounded-lg text-white" type="submit">Send</button>
            </div>
        </form>
        <div class="self-center" data-aos="fade-left" data-aos-duration="500">
            <div class="flex flex-col gap-10 p-10 items-center justify-center bg-white w-100 shadow-lg rounded-lg">
                <img src="assets/img/logo-update.png" alt="Studio Temani" width="200">
                <h5 class="text-center">{!! $contacts->desc !!}</h5>
                <ul class="flex flex-col gap-3">
                    <li>
                        <i class="ri-instagram-line"></i>
                        <a href="https://www.instagram.com/studio___temani/">Instagram</a>
                    </li>
                    <li>
                        <i class="ri-whatsapp-line"></i>
                        <a href="https://wa.me/message/YLINTHJ356G7P1">Whatsapp</a>
                    </li>
                    <li>
                        <i class="ri-linkedin-box-line"></i>
                        <a href="">LinkedIn</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
