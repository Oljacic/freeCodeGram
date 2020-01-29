@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/v/t51.2885-19/s150x150/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net&_nc_ohc=I4amkmjG6VUAX9zbXjc&oh=5126319d5fb620b2a6ae2b47b29d6ff5&oe=5ECEBCBA" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/80822732_136158880746098_6415996104684412231_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=JhdDstf7fuwAX_fF65G&amp;oh=2c60a1cf179a3e4ccc650083c9f0ccc6&amp;oe=5EDB9375" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c1.0.748.748a/s640x640/72129638_1162089590650919_686521508869216152_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net&amp;_nc_cat=111&amp;_nc_ohc=O_LZGkT34WwAX-YNofy&amp;oh=9f6605a6dd403df7d7caadafed036a4a&amp;oe=5EBB50D7" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbeg1-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c4.0.741.741a/s640x640/81567746_484126129190751_5424132848294627773_n.jpg?_nc_ht=instagram.fbeg1-1.fna.fbcdn.net&_nc_cat=103&_nc_ohc=XSWzMWjXvJoAX8reiTd&oh=5cd630203c0857a416876f83728b2cf9&oe=5EC93307" class="w-100" alt="">
        </div>
    </div>
</div>
@endsection
