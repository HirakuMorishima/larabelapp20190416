@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th><tr></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->mail}}</td>
                <td>{{$item->age}}</td>
                <td><button type="submit" formaction="/hello/add">編集</button></td>
                <td><button >削除</button></td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano.
@endsection