@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')

<!-- <h4 class="fw-bold py-3 mb-2"><span class="text-muted fw-light">UI elements /</span> Alerts</h4> -->
<h4 class="fw-bold py-3 mb-2">Dashboard</h4>

<div class="row">
    <div class="col-12 col-md-8 col-lg-12 ">
        <div class="row">


            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-body">

                        <div class="card-title">
                            <h3 class="text-nowrap mb-2">Profile Report</h3>
                        </div>
                        <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection


{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @can('access')
                        <p>Olá {{ Auth::user()->name }}</p>

                    @endcan

                    <p>Lorem ipsum dolor sit.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
