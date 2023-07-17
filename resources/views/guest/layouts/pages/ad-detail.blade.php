@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')
    <div class="modal fade" id="exampleModalCenter" tabindex="-1">
        @include('guest.includes.modal')
    </div>

    <div class="single-product-area ptb-100" x-data="commentView" x-init ="fetchComment()">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-single-img">
                        <div class="product-active owl-carousel">
                            <div class="item">
                                <img src="{{ $ad->image_path }}" alt="">
                            </div>
                            @foreach ($ad->files_path as $files_path)
                                <div class="item">
                                    <img src="{{ $files_path->path }}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="product-thumbnil-active  owl-carousel">
                            <div class="item">
                                <img src="{{ $ad->image_path }}" alt="">
                            </div>
                            @foreach ($ad->files_path as $files_path)
                                <div class="item">
                                    <img src="{{ $files_path->path }}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <br>
                    <div class="comment-form">
                        <form method="post" action="{{ route('comments.store', ['ad' => $ad->id]) }}" id="comment-form" >
                            @csrf
                            <div class="form-group">
                                <h5>Leave a comment</h5>
                                <textarea class="contact-textarea" id="comment" name="comment" cols="30" rows="5" placeholder="Votre commentaire"></textarea>
                            </div>
                            <button type="submit" id="btnform" x-on:click="submitComment()">Soumettre</button>
                            @if(session('successCommentaire'))
                                <script>
                                    toastr.success("{{ session('successCommentaire') }}");
                                </script>
                            @endif
                        </form>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="product-single-content">


                        <h3>{{ $ad->name }}</h3>
                        <div class="rating-wrap fix">
                            <span class="pull-left" id="pull-left">{{ toMoney($ad->price) }}</span>
                        </div>
                        <p>{{ $ad->description }}</p>
                        <ul class="input-style">
                            <li class="contact-seller"><a href="https://wa.me/691586487" target="_blank">Contact seller</a>  </li>
                            <li class="signal-ad">
                            <button type="button" @click="open = true" id="btnform" data-toggle="modal" data-target="#exampleModalCenter">
							  signal
							</button>
                            </li>
                            <li>
                            @if(session('successSignal'))
                                <div class="alert alert-success">
                                    {{ session('successSignal') }}
                                </div>
                            @endif
                            </li>
                        </ul>
                        <ul class="cetagory">
                            <li>Category: {{ $ad->category->name }}</li>
                        </ul>


                        <ul class="socil-icon">
                            <li>Share :</li>
                            <li><a href="https://facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                        <div class="d-flex flex-column">
                            <h4>Informations on seller</h4>
                            <ul class="d-flex flex-column">
                                <li>Name : {{ $ad->user->name }}</li>
                                <li>Email : {{ $ad->user->email }}</li>
                            </ul>
                        </div>
                        @include('guest.includes.commentlist')

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
    <script src="{{ asset('assets/js/signaler.js') }}"></script>

    @include('guest.includes.best-ad')
@endsection
