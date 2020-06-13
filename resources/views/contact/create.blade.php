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

					@if ($errors->any())
                        <div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li> {{ $error }}</li>
								@endforeach
							</ul>
                        </div>
					@endif

					<form action="{{route('contact.store')}}" method="post">
					@csrf
					氏名
					<input type="text" name="name" id=""><br>
					件名
					<input type="title" name="title" id=""><br>
					メールアドレス
					<input type="email" name="email" id=""><br>
					ホームページ
					<input type="url" name="url" id=""><br>
					性別
					<input type="radio" name="gender" id="" value="1">男</input>
					<input type="radio" name="gender" id="" value="2">女</input><br>
					年齢
					<select name="age" id="">
						<option value="">選択して下さい</option>
						<option value="1">~19歳</option>
						<option value="2">20歳~29歳</option>
						<option value="3">30歳~39歳</option>
						<option value="4">40歳~49歳</option>
						<option value="5">50歳~59歳</option>
						<option value="6">60歳~</option>
					</select><br>
					お問い合わせ内容
					<textarea name="contact" id=""></textarea><br>
					<input type="checkbox" name="caution" id="" value="1">注意事項に同意する<br>
					<input type="submit" class="btn btn-info" id="" value="登録する">
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
