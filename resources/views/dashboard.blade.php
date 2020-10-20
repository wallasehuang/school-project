@extends('layouts.school-app')
@section('style')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <h1 class="text-center mb-20 font-bold text-4xl">我的收藏</h1>
    <div class="row">
        @foreach($pets as $pet)
        <div class="relative col-3 mb-10">
            <img class="w-full mb-1 object-cover" src="{{'https://loremflickr.com/640/480/'. config('pet-data.category')[$pet->category]}}" alt="">
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none">毛色： {{config('pet-data.color')[$pet->color]}}</p>
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none">體型： {{config('pet-data.body_type')[$pet->body_type]}}</p>
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none mb-1">品種： {{config('pet-data.breed')[$pet->breed]}}</p>
            <p class="pet-info-small m-0 text-xs text-gray-500 leading-4">所在地點： {{$pet->current_location}}</p>
            <p class="pet-info-small m-0 text-xs text-gray-500 leading-4">拾獲時間： {{$pet->found_date}}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection
