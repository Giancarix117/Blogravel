@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-grey text-5xl uppercase font-bold text-shadow-md pb-14">
                    Everything Cyber Security related at the tip of your fingers. Tales from real field experts to your eyes.
                </h1>
                <a
                    href="/blog"
                    class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                    Get CyberSecing!
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img class ="object-fill" src="https://www.kaspersky.com/content/en-global/images/repository/isc/2017-images/What-is-Cyber-Security.jpg" width="700" alt="" height="700" >
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Want to know more about Cyber Security?
            </h2>

            <p class="py-8 text-gray-500 text-s">
                You came to the right place
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Whether you are a mere peasant trying to learn more about CyberSecurity, or an absolute CyberChad with years of experience, this is a place for everyone to share their personal stories.
            </p>

            <a
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            Learn about
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Penetration Testing
        </span>
        <span class="font-extrabold block text-4xl py-1">
            System Security
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Recent Hacks
        </span>
        <span class="font-extrabold block text-4xl py-1">
            and much, much more!
        </span>
    </div>

    </div>
@endsection
