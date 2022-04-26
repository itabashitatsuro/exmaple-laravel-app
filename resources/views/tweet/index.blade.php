<x-layout title="TOP | つぶやきアプリ">
    <x-layout.single>
        <h2 class="text-center text-blue-500">
            つぶやきアプリ
        </h2>
         <x-tweet.form.post></x-tweet.form.post>
    </x-layout.single>
    <x-tweet.list :tweets="$tweets"></x-tweet.list>
</x-layout>
