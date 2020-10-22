@extends('layouts.school-app')
@section('style')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="container">
    <div class="row px-6 mt-10">
        <div class="col-sm-4">
            <h3 class="text-lg font-medium text-gray-900">個人資料</h3>
            <p class="mt-1 text-sm text-gray-600">
                更新您的個人資訊與電子信箱
            </p>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('user.update.profile')}}" method="POST">
                        @csrf
                        <div class="form-group col-8">
                            <label for="">姓名</label>
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                        </div>
                        <div class="form-group col-8">
                            <label for="">電子信箱</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                        </div>
                        <div class="flex itmes-center justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-jet-section-border />

    <div class="row px-6 mt-10">
        <div class="col-sm-4">
            <h3 class="text-lg font-medium text-gray-900">更新密碼</h3>
            <p class="mt-1 text-sm text-gray-600">
                確保你的密碼安全，密碼請大於 8 個字元
            </p>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('user.update.password')}}" method="POST">
                        @csrf
                        <div class="form-group col-8">
                            <label for="">現在密碼</label>
                            <input type="password" class="form-control" name="current_password">
                        </div>
                        <div class="form-group col-8">
                            <label for="">新密碼</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group col-8">
                            <label for="">確認密碼</label>
                            <input type="password" class="form-control" name="confirmation_password">
                        </div>
                        <div class="flex itmes-center justify-end">
                            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                            Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-jet-section-border />

    <div class="w-full mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-center mb-16 font-bold text-3xl">我的收藏</h1>
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
</div>
@endsection
