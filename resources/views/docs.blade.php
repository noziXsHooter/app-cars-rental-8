<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: flex-center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-top py-4 sm:pt-0">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
            <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
        </div>
        @endif
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <h1 class="flex  text-gray-700 justify-center mx-auto">API CARS RENTAL</h1>
            <div class="flex justify-center mx-auto pt-8">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150px" height="150px" x="0px" y="0px" viewBox="0 0 410.006 410.006" style="enable-background:new 0 0 410.006 410.006;" xml:space="preserve">
                    <g>
                        <path style="fill:#008DB3;" d="M381.311,175.02l-19.314-13.367l-17.71-77.204c-4.249-18.525-20.734-31.657-39.741-31.657H105.46
                            		c-19.006,0-35.491,13.132-39.741,31.657L48.01,161.654l-19.314,13.367c-12.778,8.843-20.403,23.394-20.403,38.933v69.482
                            		c0,12.905,10.462,23.367,23.367,23.367h346.687c12.905,0,23.367-10.462,23.367-23.367v-69.482
                            		C401.714,198.414,394.089,183.863,381.311,175.02z" />
                        <path style="fill:#76CDCE;" d="M339.426,161.651H70.586l16.58-72.28c1.97-8.58,9.49-14.58,18.3-14.58h199.08
                            		c8.81,0,16.33,6,18.3,14.58L339.426,161.651z" />
                        <g>
                            <g>
                                <path style="fill:#FFFFFF;" d="M39.692,219.546c0,17.018,13.796,30.814,30.814,30.814s30.814-13.796,30.814-30.814H39.692z" />
                            </g>
                            <g>
                                <path style="fill:#FFFFFF;" d="M308.686,219.546c0,17.018,13.796,30.814,30.814,30.814s30.814-13.796,30.814-30.814H308.686z" />
                            </g>
                        </g>
                        <path style="fill:#CCCCCC;" d="M393.326,273.443H16.68c-9.212,0-16.68,7.468-16.68,16.68l0,0c0,9.212,7.468,16.68,16.68,16.68
                            		h376.646c9.212,0,16.68-7.468,16.68-16.68l0,0C410.006,280.911,402.538,273.443,393.326,273.443z" />
                        <path style="fill:#666666;" d="M30.279,306.803v40.716c0,5.354,4.34,9.694,9.694,9.694H77.12c5.354,0,9.694-4.34,9.694-9.694
                            		v-40.716" />
                        <path style="fill:#666666;" d="M323.192,306.803v40.716c0,5.354,4.34,9.694,9.694,9.694h37.147c5.354,0,9.694-4.34,9.694-9.694
                            		v-40.716" />
                        <path style="fill:#4D4D4D;" d="M269.462,306.803v4.935c0,11.986-9.716,21.702-21.702,21.702h-70.59
                            		c-11.986,0-21.702-9.716-21.702-21.702v-4.935" />
                        <path style="fill:#96E0DE;" d="M339.426,161.651h-92.56l-86.86-86.86h144.54c8.81,0,16.33,6,18.3,14.58L339.426,161.651z" />
                        <rect x="133.506" y="219.546" style="fill:#037893;" width="151" height="12" />
                        <rect x="133.506" y="239.771" style="fill:#037893;" width="151" height="12" />
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8000/documentation" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-4 border-t border-gray-800 text-black dark:text-gray-400 text-sm">
                                <article class="markdown-body entry-content container-lg" itemprop="text">
                                    <p align="center" dir="auto"><a href="https://laravel.com" rel="nofollow"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo" style="max-width: 100%;"></a></p>
                                    <p align="center" dir="auto">
                                        <a href="https://travis-ci.org/laravel/framework" rel="nofollow"><img src="https://camo.githubusercontent.com/fa459b08edcef0a72eaec3b515452fa09f6efb1282166209476903af384e145c/68747470733a2f2f7472617669732d63692e6f72672f6c61726176656c2f6672616d65776f726b2e737667" alt="Build Status" data-canonical-src="https://travis-ci.org/laravel/framework.svg" style="max-width: 100%;"></a>
                                        <a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://camo.githubusercontent.com/edce12023a516c393bb2b00207b812c70673392af971dfdb389219a3e973e3b4/68747470733a2f2f696d672e736869656c64732e696f2f7061636b61676973742f64742f6c61726176656c2f6672616d65776f726b" alt="Total Downloads" data-canonical-src="https://img.shields.io/packagist/dt/laravel/framework" style="max-width: 100%;"></a>
                                        <a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://camo.githubusercontent.com/1e193601773cb46eadd045bf33db8176613c433c9d35fe9eb38986d547ec8e76/68747470733a2f2f696d672e736869656c64732e696f2f7061636b61676973742f762f6c61726176656c2f6672616d65776f726b" alt="Latest Stable Version" data-canonical-src="https://img.shields.io/packagist/v/laravel/framework" style="max-width: 100%;"></a>
                                        <a href="https://packagist.org/packages/laravel/framework" rel="nofollow"><img src="https://camo.githubusercontent.com/6cb41a4ecf844e610d9b2e0f709dcd3456a5b41aba8989129df66708a86e8329/68747470733a2f2f696d672e736869656c64732e696f2f7061636b61676973742f6c2f6c61726176656c2f6672616d65776f726b" alt="License" data-canonical-src="https://img.shields.io/packagist/l/laravel/framework" style="max-width: 100%;"></a>
                                    </p>
                                    <h1 dir="auto"><a id="user-content-install" class="anchor" aria-hidden="true" href="#install"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a class="text-gray-900">Install</h1>
                                    <p dir="auto">composer create-project --prefer-dist laravel/laravel="8.6" app-cars-rental</p>
                                    <p dir="auto">php artisan storage:link</p>
                                    <h2 dir="auto"><a id="user-content-install-jwt" class="anchor" aria-hidden="true" href="#install-jwt"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Install JWT</h2>
                                    <p dir="auto"><a href="https://jwt-auth.readthedocs.io/en/develop/laravel-installation/" rel="nofollow">https://jwt-auth.readthedocs.io/en/develop/laravel-installation/</a></p>
                                    <p dir="auto">composer require tymon/jwt-auth "1.0.2"</p>
                                    <h3 dir="auto"><a id="user-content-if-composer-above-doesnt-work-run-this" class="anchor" aria-hidden="true" href="#if-composer-above-doesnt-work-run-this"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>If composer above doesn't work run this:</h3>
                                    <p dir="auto">composer require -w tymon/jwt-auth --ignore-platform-reqs</p>
                                    <p dir="auto">php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"</p>
                                    <p dir="auto">php artisan jwt:secret</p>
                                    <h1 dir="auto"><a id="user-content-app-car-rentals" class="anchor" aria-hidden="true" href="#app-car-rentals"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>APP CAR RENTALS</h1>
                                    <h2 dir="auto"><a id="user-content-api-rest---backend" class="anchor" aria-hidden="true" href="#api-rest---backend"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Api Rest - Backend</h2>
                                    <h3 dir="auto"><a id="user-content-table-marcas" class="anchor" aria-hidden="true" href="#table-marcas"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Table Marcas</h3>
                                    <p dir="auto">id - nome - imagem - created_at - updated_at</p>
                                    <h3 dir="auto"><a id="user-content-table-modelos" class="anchor" aria-hidden="true" href="#table-modelos"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Table Modelos</h3>
                                    <p dir="auto">id - marca_id - nome - imagem - numero_portas - lugares - air_bags - abs - created_at - updated_at</p>
                                    <h3 dir="auto"><a id="user-content-table-clientes" class="anchor" aria-hidden="true" href="#table-clientes"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Table Clientes</h3>
                                    <p dir="auto">id - nome - created_at - updated_at</p>
                                    <h3 dir="auto"><a id="user-content-table-carros" class="anchor" aria-hidden="true" href="#table-carros"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Table Carros</h3>
                                    <p dir="auto">id - modelo_id - placa - disponivel - km - created_at - updated_at</p>
                                    <h3 dir="auto"><a id="user-content-table-locações" class="anchor" aria-hidden="true" href="#table-locações"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Table Locações</h3>
                                    <p dir="auto">id - cliente_id - carro_id - data_inicio_periodo - data_final_previsto_periodo - data_final_realizado_periodo - valor_diaria - km_inicial - km_final - created_at - updated_at</p>
                                    <h2 dir="auto"><a id="user-content-atributos-e-filtro" class="anchor" aria-hidden="true" href="#atributos-e-filtro"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>ATRIBUTOS E FILTRO</h2>
                                    <p dir="auto">'<a href="https://nozixapi.000webhostapp.com/api/modelo" rel="nofollow">https://nozixapi.000webhostapp.com/api/modelo</a>?' ---&gt; Inicie chamando o modelo.</p>
                                    <p dir="auto">'atributos=nome,numero_portas,marca_id' ---&gt; Concatene os atributos que deseja mostrando no resultado conforme as colunas das tabelas.</p>
                                    <p dir="auto">'&amp;atributos_marca=nome' ---&gt; Concatene os atributos da marca do modelo escolhido.</p>
                                    <p dir="auto">'&amp;filtro=nome:like:bmw%' ---&gt; Concatene com filtro e query separada por ':'(dois pontos).</p>
                                    <p dir="auto">';abs:=:1' ---&gt; Adicione mais filtros separando ';'(ponto e vírgula).</p>
                                    <h1 dir="auto"><a id="user-content-exemplo" class="anchor" aria-hidden="true" href="#exemplo"><svg class="octicon octicon-link" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M7.775 3.275a.75.75 0 001.06 1.06l1.25-1.25a2 2 0 112.83 2.83l-2.5 2.5a2 2 0 01-2.83 0 .75.75 0 00-1.06 1.06 3.5 3.5 0 004.95 0l2.5-2.5a3.5 3.5 0 00-4.95-4.95l-1.25 1.25zm-4.69 9.64a2 2 0 010-2.83l2.5-2.5a2 2 0 012.83 0 .75.75 0 001.06-1.06 3.5 3.5 0 00-4.95 0l-2.5 2.5a3.5 3.5 0 004.95 4.95l1.25-1.25a.75.75 0 00-1.06-1.06l-1.25 1.25a2 2 0 01-2.83 0z"></path>
                                            </svg></a>Exemplo</h1>
                                    <p dir="auto">'<a href="https://nozixapi.000webhostapp.com/api/modelo?atributos=nome,numero_portas,marca_id&amp;atributos_marca=nome&amp;filtro=nome:like:BMW%;abs:=:1" rel="nofollow">https://nozixapi.000webhostapp.com/api/modelo?atributos=nome,numero_portas,marca_id&amp;atributos_marca=nome&amp;filtro=nome:like:BMW%;abs:=:1</a>'</p>
                                    <p dir="auto">Esta query retornará o seguinte Array de Objetos:</p>
                                    <p dir="auto">[
                                        {
                                        "nome": "BMW Série 5",
                                        "numero_portas": 4,
                                        "marca_id": 9,
                                        "marca": {
                                        "id": 9,
                                        "nome": "BMW"
                                        }
                                        },
                                        {
                                        "nome": "BMW x6",
                                        "numero_portas": 4,
                                        "marca_id": 9,
                                        "marca": {
                                        "id": 9,
                                        "nome": "BMW"
                                        }
                                        }
                                        ]</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>