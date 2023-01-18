@extends('layouts.application')

@section('content')
<div class="container">
    <h1>お問い合わせ内容の確認</h1>
    <table class="table mt-1">
        <tr>
            <th>お名前</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <th>お問い合わせ先</th>
            <td>{{ $contact->department->name }}</td>
        </tr>
        <tr>
            <th>お問い合わせ内容</th>
            <td>{{ $contact->content }}</td>
        </tr>
    </table>
    <p class="mt-1">誤りがないことをご確認のうえ、送信ボタンを押してください。</p>
    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <input id="name" type="hidden" name="name" value="{{ $contact->name }}">
        <input id="email" type="hidden" name="email" value="{{ $contact->email }}">
        <input id="department_id" type="hidden" name="department_id" value="{{ $contact->department_id }}">
        <input id="content" type="hidden" name="content" value="{{ $contact->content }}">
        <button type="submit" name="back" value="back" class="form-btn-half mt-1">修正する</button>
        <button type="submit" class="form-btn-half mt-1">送信する</button>
    </form>
</div>
@endsection
