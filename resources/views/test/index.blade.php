@extends('layouts.testapp')

@section('title','testapp')
@section('header','testのheaderです。')

@section('content')
@if(count($errors) > 0)
<p>入力欄にエラーがあります。項目に沿って修正してください。</p>
@endif
<form action="/test" method="POST">
    {{ csrf_field() }}
    @if($errors->has('name'))
    <p>{{$errors->first('name')}}</p>
    @endif
    <input type="text" name="name" value="{{ old('name') }}"/>名前<br>
    @if($errors->has('mail'))
    <p>{{$errors->first('mail')}}</p>
    @endif
    <input type="text" name="mail" value="{{ old('mail') }}"/>メール<br>
    <input type="submit" value="Submit"/>
</form>
@endsection

@section('footer')
<p>copyright2017</p>
@endsection