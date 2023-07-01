@extends('guest.layouts.layout')

@section('style')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/chat.css') }}">
@endsection

@section('content')
    @include('guest.includes.navbanner')

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app" >
                    <div id="plist" class="people-list" x-data="chatComponent" x-init="fetchDiscussions()">
                        <div class="input-group">
                            <input type="text"  class="form-control" placeholder="Search...">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>

                        </div>
                        <ul class="list-unstyled chat-list mt-2 mb-0" >

                            <div class="list-discussion">
                                <template x-for="discussion in discussions" :key="discussion.id">
                                    <div class="list-item">
                                        <li class="clearfix" >
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">
                                                    <span x-text="discussion.slug" ></span>
                                                    <span x-text="discussion.messages.content" ></span>

                                                </div>
                                                <div class="status">
                                                    <span>Online</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>
                                </template>



                            </div>
                        </ul>
                    </div>
                    <div class="chat">
                        <div class="chat-header clearfix">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                    </a>
                                    <div class="chat-about">

                                        <small>
                                            JE dois gérer le status avec alpinejs
                                        </small>
                                    </div>
                                </div>

                            </div>
                        </div>

                            <div class="chat-history" x-data="chatComponent" x-init="fetchDiscussions()">
                                <ul class="m-b-0">
                                    <div class="list-message">
                                    <template  x-for="message in messages" :key="message.id">

                                            <li class="clearfix" :class="{'text-right': message.sender === 'user', 'text-left': message.sender === 'other'}">

                                                <div class="message-data text-right">
                                                    <span x-show="message.sender === 'user'" class="message-data-time">12:20</span>
                                                    <img x-show="message.sender === 'user'" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">

                                                </div>
                                                <div class="message-data text-left">
                                                    <img x-show="message.sender === 'other'"  src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                                    <span x-show="message.sender === 'other'" class="message-data-time">12:15</span>
                                                </div>
                                                <div class="message other-message">
                                                    <span x-text = "message.content"></span>
                                                </div>
                                            </li>


                                    </template>
                                </div>



                                        {{-- <li class="clearfix">
                                            <div class="message-data text-right">
                                                <span class="message-data-time"</span>
                                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            </div>
                                            <div class="message other-message">
                                                {{ $message->content }}
                                            </div>
                                        </li> --}}

                                </ul>
                            </div>
                            <div class="chat-message clearfix">
                                <div class="input-group mb-0">
                                    <form action="{{ route('messages.store') }}" method="POST">

                                        <div class="input-group-prepend">
                                            <input type="text" placeholder="Enter text here...">
                                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                                        </div>
                                        <input type="hidden" name="discussion_id" value="Entrez votre texte">
                                    </form>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
