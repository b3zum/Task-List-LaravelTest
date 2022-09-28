<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Quickstart - Basic</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }

    </style>
</head>

<body id="app-layout">

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <div style="position:absolute; right: 100px;">
                <div
                    class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                    <div class="text-sm text-gray-700 dark:text-gray-500 underline">

                        <button type='button' id='viewSubjectRating' class="button_position">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"

                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}

                                </x-dropdown-link>
                            </form>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <div style="position:absolute; right: 100px;">
                            <div
                                class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                                <div class="text-sm text-gray-700 dark:text-gray-500 underline">

                                    <button type='button' id='viewSubjectRating' class="button_position">

                                        <form method="GET" action="{{ route('profile.edit') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('profile.edit')"

                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Редактировать профиль') }}

                                            </x-dropdown-link>

                                        </form>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            Task List
                        </a>
                    </div>
                </div>
            </nav>
@yield('content')
