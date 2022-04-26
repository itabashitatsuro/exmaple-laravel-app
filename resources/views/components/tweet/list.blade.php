@props([
    'tweets' => []
])
<div class="bg-white rounded-md shadow-lg mt--5 mb-5">
    <ul>
        @foreach($tweets as $tweet)
        <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
            <div>
                <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    {{ $tweet->user->name }}
                </span>
                <P class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</P>
                <x-tweet.images :images="$tweet->images"/>
                <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                    {{ $tweet->created_at }}
                </span>
            </div>
            <div>
                <!-- ToDo 編集と削除 -->
                <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id">
                </x-tweet.options>
            </div>
        </li>
        @endforeach
    </ul>
</div>

