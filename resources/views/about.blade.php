@extends('layouts.school-app')
@section('style')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<style>
.ing-hover {
    display: none;
}

.btn-favorites:hover .un-hover {
    display: none;
}

.btn-favorites:hover .ing-hover {
    display: inline-block;
}

</style>
@endsection

@section('content')
<!-- bradcam_area_start -->
<div class="bradcam_area breadcam_bg mb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcam_text text-center">
                    <h3>我要領養</h3>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="choss text-center mb-95"> --}}
<div class="container">
    <div class="form-section mb-20">
        <form method="GET" action="{{route('about')}}" class="row">
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">種類</label>
                <div class="form-control border-none">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="category" id="category-all" value="0" {{request()->get('category') == '0' || !request()->has('category') ? 'checked' : ''}}>
                        <label class="form-check-label" for="category-all">不限</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="category" id="category-dog" value="1" {{request()->get('category') == '1' ? 'checked' : ''}}>
                        <label class="form-check-label" for="category-dog">狗</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="category" id="category-cat" value="2" {{request()->get('category') == '2' ? 'checked' : ''}}>
                        <label class="form-check-label" for="category-cat">貓</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">品種</label>
                <div class="form-control border-none">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="breed" id="breed-all" value="0" {{request()->get('breed') == '0' || !request()->has('breed') ? 'checked' : ''}}>
                        <label class="form-check-label" for="breed-all">不限</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="breed" id="breed-mix" value="1" {{request()->get('breed') == '1' ? 'checked' : ''}}>
                        <label class="form-check-label" for="breed-mix">純種</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="breed" id="breed-pure" value="2" {{request()->get('breed') == '2' ? 'checked' : ''}}>
                        <label class="form-check-label" for="breed-pure">混種</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">性別</label>
                <div class="form-control border-none">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="gender-all" value="0" {{request()->get('gender') == '0' || !request()->has('gender') ? 'checked' : ''}}>
                        <label class="form-check-label" for="gender-all">不限</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="gender-man" value="1" {{request()->get('gender') == '1' ? 'checked' : ''}}>
                        <label class="form-check-label" for="gender-man">男</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="gender" id="gender-woman" value="2" {{request()->get('gender') == '2' ? 'checked' : ''}}>
                        <label class="form-check-label" for="gender-woman">女</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">毛色</label>
                <select class="form-control" name="color" id="">
                    <option value="0">不限</option>
                    @foreach (config('pet-data.color') as $key => $color)
                    <option value="{{$key}}" {{request()->get('color') == $key ? 'selected' : ''}}>{{$color}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">體型</label>
                <select class="form-control" name="body_type" id="">
                    <option value="0">不限</option>
                    @foreach (config('pet-data.body_type') as $key => $type)
                    <option value="{{$key}}" {{request()->get('body_type') == $key ? 'selected' : ''}}>{{$type}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-4">
                <label class="font-bold text-lg text-gray-800" for="">年齡</label>
                <select class="form-control" name="age" id="">
                    <option value="0">不限</option>
                    @foreach (config('pet-data.age') as $key => $age)
                    <option value="{{$key}}" {{request()->get('age') == $key ? 'selected' : ''}}>{{$age}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-white border-red-500 bg-red-500 ml-auto mr-3 hover:bg-red-600 hover:border-red-500">搜尋</button>

        </form>
    </div>
    <div class="row">
        @foreach($pets as $pet)
        <div class="relative col-3 mb-10">
            <div class="absolute top-0 right-0 mr-4 mt-2 w-auto inline-block text-2xl cursor-pointer btn-favorites" data-id="{{$pet->id}}">
                <i class="fa fa-heart-o text-white un-hover"></i>
                <i class="fa fa-heart text-red-500 ing-hover"></i>
            </div>
            <img class="w-full mb-1 object-cover" src="{{'https://loremflickr.com/640/480/'. config('pet-data.category')[$pet->category]}}" alt="">
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none">毛色： {{config('pet-data.color')[$pet->color]}}</p>
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none">體型： {{config('pet-data.body_type')[$pet->body_type]}}</p>
            <p class="pet-info text-sm py-1 m-0 text-gray-600 leading-none mb-1">品種： {{config('pet-data.breed')[$pet->breed]}}</p>
            <p class="pet-info-small m-0 text-xs text-gray-500 leading-4">所在地點： {{$pet->current_location}}</p>
            <p class="pet-info-small m-0 text-xs text-gray-500 leading-4">拾獲時間： {{$pet->found_date}}</p>
        </div>
        @endforeach
    </div>
    {{ $pets->links() }}
</div>
{{-- </div> --}}
<div class="section_title text-center mb-95">
    <img class="SEP mx-auto" src="img/SEP1.png">
    <img class="SEP mx-auto" src="img/SEP2.png">
    </div>
    <div class="choss text-center mb-95">
    <h3>認養須知</h3>
</div>
<div class="w-full max-w-screen-md mx-auto mb-20">
    <P>一、	申請人：年滿20歲之民眾，未滿20歲者。以其法定代理人或法定監護人為飼主。</P>
    <P>二、	申請步驟：</P>
    <P>（一）	申請人應攜身分證明文件，填具申請書。</P>
    <P>（二）	承辦人員應就認養人核對身份證明文件，必要時得親自實地勘察。</P>
    <P>（三）	待認養動物條件：於本處留置已逾7日尚無飼主認領或無身份標識者，且經本處健康行為評估適養者。</P>
    <P>（四）	符合認養人資格者，經由管理人員協助，可由認養犬隻中，自行挑選合意犬隻。</P>
    <P>（五）	繳交相關規費：晶片植入手續費250元、狂犬病預防注射費200元。</P>
    <P>（六）	未實施晶片植入、狂犬病預防注射及寵物登記之動物，應於完成晶片植入、狂犬病預防注射及寵物登記後始得放行。唯8週齡以下幼犬暫免施打狂犬病疫苗。</P>
    <P>（七）	認養之犬隻自領出日起1個月內，若因任何原因無法續養，可將該犬交還本所，填寫「不擬續養動物申請切結書」放棄該犬之所有權，並繳回寵物登記證及狂犬病預防注射證明辦理註銷。認養時所繳之費用概不退還。</P>
    <a href=" https://drive.google.com/file/d/1XPgWzkRkZR_AOygD8CT9cf_0vd6P_0pX/view?usp=sharing">105年度改版認養四聯單</a>
</div>

@endsection

@section('script')
<script>
    $('.btn-favorites').click(function(){
        $.ajax({
            type: "POST",
            url: "{{ route('favorites') }}",
            data: {
                '_token': "{{ csrf_token() }}",
                'pet_id': $(this).data('id')
            }
        })
        .done(function (data){
            alert(data);
        })
        .fail(function(e){
            console.log(e);
        });
    })
</script>

@endsection
