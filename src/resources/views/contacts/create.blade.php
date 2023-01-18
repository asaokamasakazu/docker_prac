@extends('layouts.application')

@section('content')
<div class="container">
    <h1>お問い合わせ</h1>
    <form method="POST" action="{{ route('contacts.confirm') }}">
        @csrf

        <div class="row mt-1">
            <label for="name" class="form-label">お名前</label>
            <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}" autofocus>
            @error('name')
                <span class="form-message" role="alert">
                    <p>{{ $message }}</p>
                </span>
            @enderror
        </div>

        <div class="row mt-1">
            <label for="email" class="form-label">メールアドレス</label>
            <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="form-message" role="alert">
                    <p>{{ $message }}</p>
                </span>
            @enderror
        </div>

        <div class="row mt-1">
            <label for="department_id" class="form-label">お問い合わせ先</label>
            <select name="department_id" id="department_id" class="form-select">
                <option value="" hidden>選択してください</option>
                @foreach ($departments as $department)
                    <option value="{{ $department->id }}" @if(old('department_id') == $department->id ) selected @endif>
                        {{ $department->name }}
                    </option>
                @endforeach
            </select>
            @error('department_id')
                <span class="form-message" role="alert">
                    <p>{{ $message }}</p>
                </span>
            @enderror
        </div>

        <div class="row mt-1">
            <label for="content" class="form-label">お問い合わせ内容</label>
            <textarea name="content" id="content" class="form-textarea" rows="7">{{ old('content') }}</textarea>
            @error('content')
                <span class="form-message" role="alert">
                    <p>{{ $message }}</p>
                </span>
            @enderror
        </div>

        <button type="submit" class="form-btn mt-1">確認画面へ進む</button>
    </form>
</div>
@endsection
