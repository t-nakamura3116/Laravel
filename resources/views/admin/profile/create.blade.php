{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('name', 'プロフィール')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Myプロフィール</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="name">氏名</label>
                        <div class="col-md-10">
                            <input type="name" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div>
                        <input type="radio" name="gender" value="男性 {{ old('gender') == '男性' ? 'checked' : '' }}"> 男性
                    </div>
                    <div>
                        <input type="radio" name="gender" value="女性 {{ old('gender') == '女性' ? 'checked' : '' }}"> 女性
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="hobby" rows="5">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="introduction">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="10">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection