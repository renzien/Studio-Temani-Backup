@extends('layouts.main')
@section('title', 'Pricelist')
@section('container')
    <div class="grid grid-cols-2">
        <div class="font-quicksand pt-20">
            <div class="flex items-center justify-center pt-32">
                <img src="assets/img/logo-update.png" alt="Studio Temani" class="w-2/5" data-aos="fade-down"
                    data-aos-duration="1000">
            </div>
            <div class="flex items-center justify-center">
                <h1 class="font-bold text-2xl leading-normal mt-8 text-black" data-aos="fade-down" data-aos-duration="1000">
                    {{ $pricelisthomes->title }}</h1>
            </div>
            <div class="flex items-center justify-center text-center mt-14 ml-28 mr-28">
                <div class="font-base text-lg leading-normal text-black text-justify" data-aos="fade-down"
                    data-aos-duration="1000">
                    {!! $pricelisthomes->desc !!}
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-20 mb-28 ml-11" data-aos="flip-left" data-aos-duration="1000">
                <img class="rounded-3xl" src="{{ asset('storage/post-image/'. $pricelisthomes->photo) }}" alt="Studio Temani">
            </div>
        </div>
    </div>
    <section class="h-full" style="background-image: url('{{ asset('storage/post-image/'. $inquirys->photo) }}'); background-repeat: no-repeat;">
        <div class="flex flex-col items-center text-white font-quicksand">
            <h1 class="text-3xl font-bold pt-14 leading-normal" data-aos="fade-right" data-aos-duration="1500">
                {{ $inquirys->title }}</h1>
            <div class="text-center justify-center m-20 text-2xl font-bold leading-normal" data-aos="fade-right"
                data-aos-duration="1500">
                {!! $inquirys->desc !!}
            </div>
            <button
                class="bg-white hover:bg-gray-100 text-black font-quicksand font-bold py-2 px-4 mb-12 rounded-lg" data-aos="flip-up" data-aos-duration="1000">Contact
                Us</button>
        </div>
    </section>
    {{-- Family Photo Session --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22" data-aos="fade-right" data-aos-duration="500">
                <h1 class="font-quicksand text-4xl font-bold leading-normal">{{ $familys->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8" data-aos="fade-up" data-aos-duration="600">
                    <h3 class="text-2xl font-bold leading-normal">{{ $familys->tag1 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $familys->desc1 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-20" data-aos="fade-up" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">{{ $familys->tag2 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $familys->desc2 !!}
                    </div>
                </div>
                <div class="font-quicksand" data-aos="fade-up" data-aos-duration="800">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">{{ $familys->unit1 }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-25">{{ $familys->price1 }} K</h3>
                    </div>
                    <div class="text-lg leading-normal">
                        {!! $familys->descprice1 !!}
                    </div>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-9" data-aos="fade-up" data-aos-duration="900">
                    <div class="flex flex-row">
                        <h3 class="text-2xl font-bold leading-normal">{{ $familys->unit2 }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $familys->price2 }} K</h3>
                    </div>
                    <div class="text-lg leading-normal">
                        {!! $familys->descprice2 !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img class="rounded-3xl" src="{{ asset('storage/family-image/'. $familys->photo) }}" alt="Studio Temani About">
            </div>
        </div>
    </section>
    {{-- Self-Photo Session --}}
    <section class="grid grid-cols-2">
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img class="rounded-3xl" src="{{ asset('storage/selfphoto-image/'. $selfphotos->photo) }}" alt="Studio Temani Studio">
            </div>
        </div>
        <div class="studio text-black pr-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl font-bold leading-normal" data-aos="fade-down" data-aos-duration="600">{{ $selfphotos->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="py-10 ml-20 mr-28 text-end">
                <div class="font-quicksand py-8" data-aos="fade-down" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->tag1 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $selfphotos->desc1 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-20" data-aos="fade-down" data-aos-duration="800">
                    <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->tag2 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $selfphotos->desc2 !!}
                    </div>
                </div>
                <div class="flex justify-end font-quicksand">
                    <div class="flex flex-col items-end justify-end">
                        <div class="flex" data-aos="fade-down" data-aos-duration="900">
                            <h3 class="text-2xl font-bold leading-normal pr-20">{{ $selfphotos->unit1 }}</h3>
                            <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->price1 }} K</h3>
                        </div>
                        <div class="text-lg leading-normal" data-aos="fade-down" data-aos-duration="1000">
                            {!! $selfphotos->descprice1 !!}
                        </div>
                        <div class="border-b py-3 w-3/4"></div>
                        <div class="flex py-3" data-aos="fade-down" data-aos-duration="1100">
                            <h3 class="text-2xl font-bold leading-normal pr-20">{{ $selfphotos->unit2 }}</h3>
                            <h3 class="text-2xl font-bold leading-normal">{{ $selfphotos->price2 }} K</h3>
                        </div>
                        <div class="text-lg leading-normal pl-15" data-aos="fade-down" data-aos-duration="1200">
                            {!! $selfphotos->descprice2 !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Creative Studio Space --}}
    <section class="grid grid-cols-2">
        <div class="text-black pl-10">
            <div class="flex flex-col items-center pt-22">
                <h1 class="font-quicksand text-4xl pr-8 text-center font-bold leading-normal" data-aos="fade-left" data-aos-duration="600">{{ $creativespaces->title }}</h1>
                <div class="border-b py-1 w-1/6 "></div>
            </div>
            <div class="text-justify py-10 ml-20 mr-28">
                <div class="font-quicksand py-8" data-aos="fade-down" data-aos-duration="700">
                    <h3 class="text-2xl font-bold leading-normal">//{{ $creativespaces->tag1 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desc1 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="800">
                    <h3 class="text-2xl font-bold leading-normal">//{{ $creativespaces->tag2 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desc2 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="900">
                    <h3 class="text-2xl font-bold leading-normal">//{{ $creativespaces->tag3 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desc3 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="text-2xl font-bold leading-normal">//{{ $creativespaces->tag4 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desc4 !!}
                    </div>
                </div>
                <div class="font-quicksand pb-15" data-aos="fade-down" data-aos-duration="1100">
                    <h3 class="text-2xl font-bold leading-normal">//{{ $creativespaces->tag5 }}</h3>
                    <div class="text-lg leading-normal">
                        {!! $creativespaces->desc5 !!}
                    </div>
                </div>
                <div class="font-quicksand">
                    <div class="flex flex-row" data-aos="fade-down" data-aos-duration="1200">
                        <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->unit1 }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $creativespaces->price1 }} K</h3>
                    </div>
                    <div class="text-lg leading-normal mt-5" data-aos="fade-down" data-aos-duration="1400">
                        {!! $creativespaces->descprice1 !!}
                    </div>
                </div>
                <div class="border-b py-3 w-3/5"></div>
                <div class="font-quicksand py-5">
                    <div class="flex flex-row" data-aos="fade-down" data-aos-duration="1300">
                        <h3 class="text-2xl font-bold leading-normal">{{ $creativespaces->unit2 }}</h3>
                        <h3 class="text-2xl font-bold leading-normal pl-22">{{ $creativespaces->price2 }} K</h3>
                    </div>
                    <div class="text-lg leading-normal mt-5" data-aos="fade-down" data-aos-duration="1400">
                        {!! $creativespaces->descprice2 !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-studio-temani">
            <div class="flex items-center justify-center mt-24 mb-20">
                <img class="rounded-3xl" src="{{ asset('storage/creaspace-image/'. $creativespaces->photo) }}" alt="Studio Temani About">
            </div>
        </div>
    </section>
@endsection
