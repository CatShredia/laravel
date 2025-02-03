@extends('layouts.default')
@section('content')
@endsection
<div class="container">
    <div class="row">
        <div class="create-button-div">
            <a href="#">Create Venicle</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <!-- From Uiverse.io by MuhammadHasann -->
            <div class="cards">
                @foreach ($venicles as $venicle)
                    <div class="card card-venich">
                        <div class="image_container">
                            <img src="http://images.unsplash.com/photo-{{ $venicle->image }}" alt=""
                                srcset="">
                        </div>
                        <div class="title">
                            <span>{{ $venicle->model }}</span>
                            <span>{{ $venicle->make }}</span>
                        </div>
                        <div class="size">
                            <span>{{ $venicle->year }} year</span>
                            {{-- <ul class="list-size">
                                <li class="item-list"><button class="item-list-button">37</button></li>
                                <li class="item-list"><button class="item-list-button">38</button></li>
                                <li class="item-list"><button class="item-list-button">39</button></li>
                                <li class="item-list"><button class="item-list-button">40</button></li>
                                <li class="item-list"><button class="item-list-button">41</button></li>
                            </ul> --}}
                        </div>
                        <div class="description">
                            <p class="article">{{ $venicle->desription }}</p>
                        </div>
                        <div class="action">
                            <div class="price">
                                <span>{{ $venicle->price / 100 }}$</span>
                            </div>
                            <button class="cart-button">
                                <svg class="cart-icon" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z"
                                        stroke-linejoin="round" stroke-linecap="round"></path>
                                </svg>
                                <span>Add to cart</span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>
