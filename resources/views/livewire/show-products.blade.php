@extends('layouts.app')

@section('content')
<div>
    <template x-for="(prod, index) in {{ json_encode($products->toArray()['data']) }}" :key="index">
        <div class="p-5 border-b border-gray-100 cursor-pointer" {{--x-on:click="current = prod; showModal = true"--}}>
            <h2 class="text-xl font-medium" x-text="index.name"></h2>
            <p x-text="index.price"></p>
        </div>
    </template >
</div>
@endsection
