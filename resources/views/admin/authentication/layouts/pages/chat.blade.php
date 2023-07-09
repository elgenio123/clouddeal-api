@extends('admin.authentication.layouts.pages.ads.default')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<style>
    .bold {
        font-weight: bold;
    }

    .large {
        font-size: 20px;
    }

    .normal {
        font-size: 14px;
    }

    .italic {
        font-style: italic;
    }

    <div class="row">.underline {
        text-decoration: underline;
    }

    .small {
        font-size: 12px;
    }

    .select-buttons {
        margin-top: 10px;
    }

    .submit-button {
        float: right;
    }

</style>
@endsection
@section('content')
<div class="row" x-data="chatComponent" x-init="fetchDiscussions()">
    <div class="col-lg-9 col-md-8">
        <div class="box direct-chat">
            <div class="box-header with-border">
                <h4 class="box-title">Chat Message</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- Conversations are loaded here -->
                <div id="chat-app" class="direct-chat-messages chat-app"><br><br><br><br><br><br>
                    <!-- Message. Default to the left -->
                    <template x-for="message in messages" :key="message.id">
                        <div class="direct-chat-msg mb-30">
                            <div class="clearfix mb-15">
                                <span class="direct-chat-name" x-text="discussionSlug"></span>
                                <span class="direct-chat-timestamp pull-right">April 14, 2017</span>
                            </div>
                            <!-- /.direct-chat-info -->
                            <img class="direct-chat-img avatar" src="../../images/user1-128x128.jpg" alt="message user image">
                            <!-- /.direct-chat-img -->

                            <div class="direct-chat-text">
                                <p x-text="message.content"></p>
                                <p class="direct-chat-timestamp"><time x-text="formatTimestamp(message.created_at)"></time></p>
                            </div>


                            <!-- /.direct-chat-text -->
                        </div>
                        <!-- /.direct-chat-msg -->
                    </template>

                </div>
                <!--/.direct-chat-messages-->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <form action="#" method="post">
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                        <div class="input-group-addon">
                            <div class="align-self-end gap-items">
                                <span class="publisher-btn file-group">
                                    <i class="fa fa-paperclip file-browser"></i>
                                    <input type="file">
                                </span>
                                <a class="publisher-btn" href="#"><i class="fa fa-smile-o"></i></a>
                                <a class="publisher-btn" href="#"><i class="fa fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-footer-->
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="box">
            <div class="box-header with-border p-0 pt-10">
                <div class="form-element lookup">
                    <input class="form-control p-20 w-p100" type="text" x-model="searchQuery" x-on:input.debounce="searchDiscussions" placeholder="Search Contact">
                </div>
            </div>
            <div class="box-body p-0">
                <div id="chat-contact" class="media-list media-list-hover media-list-divided ">
                    <template x-for="discussion in filteredDiscussions" :key="discussion.id">
                        <div class="media media-single" x-on:click="selectDiscussion(discussion.id)">
                            <a href="#" class="avatar avatar-lg status-success">
                                <img src="../../images/avatar/2.jpg" alt="...">
                            </a>

                            <div class="media-body">
                                <h6 x-text="discussion.slug"></h6>
                                <small class="text-green">Online</small>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('admin-assets/custom/js/chat.js') }}"></script>
<script>
    function toggleBold(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.toggle('bold');
    }

    function increaseSize(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.remove('normal');
        textarea.classList.remove('small');
        textarea.classList.add('large');
    }

    function decreaseSize(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.remove('large');
        textarea.classList.remove('small');
        textarea.classList.add('normal');
    }

    function toggleItalic(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.toggle('italic');
    }

    function toggleUnderline(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.toggle('underline');
    }

    function toggleSmall(event) {
        event.preventDefault();
        var textarea = document.getElementById('myTextarea');
        textarea.classList.remove('normal');
        textarea.classList.remove('large');
        textarea.classList.add('small');
    }

</script>
@endsection

