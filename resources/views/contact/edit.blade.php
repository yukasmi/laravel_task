@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					editです
					<form action="{{route('contact.update',['id'=> $contact->id])}}" method="POST">
					@csrf
					氏名
					<input type="text" name="name" id="" value="{{ $contact->name }}"><br>
					件名
					<input type="title" name="title" id="" value="{{ $contact->title }}"><br>
					メールアドレス
					<input type="email" name="email" id="" value="{{ $contact->email }}"><br>
					ホームページ
					<input type="url" name="url" id="" value="{{ $contact->url }}"><br>
					性別
					<input type="radio" name="gender" id="" value="1" @if( $contact->gender === 1 ) checked @endif>男</input>
					<input type="radio" name="gender" id="" value="2" @if( $contact->gender === 2 ) checked @endif>女</input><br>
					年齢
					<select name="age" id="">
						<option value="">選択して下さい</option>
						<option value="1" @if( $contact->age === 1 ) selected @endif>~19歳</option>
						<option value="2" @if( $contact->age === 2 ) selected @endif>20歳~29歳</option>
						<option value="3" @if( $contact->age === 3 ) selected @endif>30歳~39歳</option>
						<option value="4" @if( $contact->age === 1 ) selected @endif>40歳~49歳</option>
						<option value="5" @if( $contact->age === 1 ) selected @endif>50歳~59歳</option>
						<option value="6" @if( $contact->age === 1 ) selected @endif>60歳~</option>
					</select><br>
					お問い合わせ内容
					<textarea name="contact" id="">{{ $contact->contact }}</textarea><br>
					<input type="submit" class="btn btn-info" id="" value="更新する"">
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
