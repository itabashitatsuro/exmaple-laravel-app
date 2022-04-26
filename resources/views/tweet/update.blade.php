{{-- <!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweet/index</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>

   <div>
        <a href="{{ route('tweet.index') }}">戻る</a>

        <p>編集する</p>

        @if (session('feedback.success'))
            <P style="color:blue;"> {{ session('feedback.success') }}</P>
        @endif

        <form action="{{ route('tweet.update.put', ['tweetId' => $tweet->id]) }}" method="post">
            @method('PUT')
            @csrf
            <label for="tweet-content">つぶやき</label>
            <span>140文字まで</span>
            <textarea type="text" placeholder="つぶやきを入力" name="tweet" id="tweet-content" cols="100" rows="10">{{ $tweet->content }}</textarea>
            @error('tweet')
                <p style="color:red;">{{ $message }}</p>
            @enderror
            <button type="submit">編集</button>
       </form>
   </div>

</body>
</html> --}}


<x-layout title="編集 | つぶやきアプリ">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            つぶやき
        </h2>
        @php
            $breadcrumbs = [
                ['href' => route('tweet.index'), 'label' => 'TOP'],
                ['href' => '#', 'label' => '編集'],
            ];
        @endphp
        <x-element.breadcrumbs : breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
        <x-tweet.form.put :tweet="$tweet"></x-tweet.form.put>
    </x-layout.single>

</x-layout>
