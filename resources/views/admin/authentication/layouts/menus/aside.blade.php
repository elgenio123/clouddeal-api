<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
            <a href="{{ route('dashboard.index') }}">
                <!-- logo for regular state and mobile devices -->
                <h3><b>Dashboard <br><small>Cloud deal</small></b></h3>
            </a>
        </div>
        <div class="profile-pic">
            <img src='{{ Auth::user()->image_profile }}' class="rounded-circle" alt="user">

            <div class="profile-info">
                <h4>{{ $user->name }}</h4>
                <div>
                    <span>Online</span>
                </div>
            </div>
        </div>
    </div>


    <!-- sidebar menu-->
    @include('admin.authentication.layouts.menus.menu')
</section>
