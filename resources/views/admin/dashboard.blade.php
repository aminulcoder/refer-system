@php
    //  $studentsCount = \App\Models\FormSubmission::count();
    //  $user = \App\Models\User::count();
@endphp
@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb />
@endsection
@section('content')
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 items-center gap-2 md:gap-6">
        <a href="#">
            <x-dashboard.dahsbordcard title="Student" :data="$studentsCount" />
        </a>
        @if (auth()->user() && auth()->user()->role === 'admin')
            <a href="#">
                <x-dashboard.dashboardcard title="Affiliater " :data="$user" />
            </a>
        @endif


    </div>
@endsection
