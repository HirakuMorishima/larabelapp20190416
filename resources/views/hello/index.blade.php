@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th><tr></tr>
        @if(isset($items))
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <form action="/hello">
                <td><button type="submit" formaction="/hello/add">編集</button></td>
                <td><button >削除</button></td>
                </form>
            </tr>
        @endforeach
        @endif
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection