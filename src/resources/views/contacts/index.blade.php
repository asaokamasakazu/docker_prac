@extends('layouts.application')

@section('content')
<div class="container">
    <h1>お問い合わせ一覧</h1>
    <table class="top-table mt-1">
        <thead>
            <tr>
                <th>id</th>
                <th>お問い合わせ先</th>
                <th>ユーザー名</th>
                <th>email</th>
                <th>内容</th>
                <th>日時</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contacts as $contact)
                <tr>
                    <td>{{ $contact->contact_id }}</td>
                    <td>{{ $contact->department->name }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->content }}</td>
                    <td>{{ $contact->created_at }}</td>
                </tr>
            @empty
                <tr><td colspan="6">※NO CONTACT!</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
