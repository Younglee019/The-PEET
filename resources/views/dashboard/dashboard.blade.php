@extends('dashboard.layouts.master')
@section('dashboard-main-content')
    <div class="allContent">
        <div class="main-content">
            <script>
                @if (Session::has('success'))
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "{{ Session::get('success') }}",
                        showConfirmButton: false,
                        timer: 3000
                    });
                @endif
            </script>

            @if ($errors->any())
                <script>
                    let errorMessages = `
    <div style="text-align: left;">
        <ul style="list-style-type: none; padding: 0;">
            @foreach ($errors->all() as $error)
                <li style="margin-bottom: 10px;">
                    <i class="fa fa-exclamation-circle" style="color: #e74c3c; margin-right: 8px;"></i>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
`;

                    Swal.fire({
                        title: "{{ __('login_signup.error_title') }}",
                        html: errorMessages, // use `html` to support HTML content
                        icon: "error", // "error" icon for validation errors
                        confirmButtonText: "{{ __('login_signup.error_confirm_button') }}",
                        confirmButtonColor: "#e74c3c", // Set the button color to match the error theme
                    });
                </script>
            @endif

            <aside id="statistics" class="sectioncontent">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'users')">{{ __('statistics.dashboard') }}</button>
                    <button class="tablinks" onclick="openCity(event, 'jobs')">{{ __('statistics.profile') }}</button>
                    <button class="tablinks" onclick="openCity(event, 'progress')">{{ __('statistics.wishlist') }}</button>
                </div>

                <div id="users" class="tabcontent">
                    <div class="update">
                        <h4>{{ __('statistics.new_lecture') }} <strong>23-09-2024</strong></h4>
                    </div>
                    <div class="result">
                        <h1>{{ __('statistics.your_process') }}</h1>
                        <div class="row d-flex">
                            <div class="col-1 center box">
                                <i class="fa-solid fa-book-open-reader"></i>
                                <h2>0</h2>
                                <p>{{ __('statistics.courses_taken') }}</p>
                            </div>
                            <div class="col-1 center box">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <h2>0</h2>
                                <p>{{ __('statistics.active_courses') }}</p>
                            </div>
                            <div class="col-1 center box">
                                <i class="fa-solid fa-award"></i>
                                <h2>0</h2>
                                <p>{{ __('statistics.courses_completed') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                @php
                    $user = auth()->user();
                @endphp

                <div id="jobs" class="tabcontent">
                    <div class="updatePhoto d-flex align-center justify-between">
                        <p>{{ __('statistics.update_profile_photo') }}</p>
                        <div class="box">
                            <!-- Custom file input with label -->
                            <label for="photo" class="custom-file-upload">{{ __('statistics.click_here') }}</label>
                            <form id="avatarForm" action="{{ url('/update-avatar') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="photo" id="photo">
                            </form>
                        </div>
                    </div>

                    <script>
                        document.getElementById('photo').addEventListener('change', function() {
                            if (this.files && this.files[0]) {
                                document.getElementById('avatarForm').submit();
                            }
                        });
                    </script>

                    <div class="information-detail">
                        <!-- Box 1 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.date_of_recording') }}</h5>
                                <p>July 25, 2024 8:10 AM</p>
                            </div>
                            <button class="edit" data-target="box1">{{ __('statistics.edit') }}</button>
                        </div>
                        <div class="overlaySide" id="box1">
                            <div class="box-content">
                                <input type="datetime-local">
                                <input type="submit" value="{{ __('statistics.update') }}">
                            </div>
                        </div>

                        <!-- Box 2 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.first_name') }}</h5>
                                <p>{{ $user->f_name }}</p>
                            </div>
                            <button class="edit" data-target="box2">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.fname') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box2">
                                <div class="box-content">
                                    <input type="text" name="f_name" value="{{ $user->f_name }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 3 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.surname') }}</h5>
                                <p>{{ $user->s_name }}</p>
                            </div>
                            <button class="edit" data-target="box3">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.sname') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box3">
                                <div class="box-content">
                                    <input type="text" name="s_name" value="{{ $user->s_name }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 4 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.identifier') }}</h5>
                                <p>{{ $user->u_name }}</p>
                            </div>
                            <button class="edit" data-target="box4">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.uname') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box4">
                                <div class="box-content">
                                    <input type="text" name="u_name" value="{{ $user->u_name }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 5 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.email') }}</h5>
                                <p>{{ $user->email }}</p>
                            </div>
                            <button class="edit" data-target="box5">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.email') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box5">
                                <div class="box-content">
                                    <input type="email" name="email" value="{{ $user->email }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 6 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.phone_number') }}</h5>
                                <p>{{ $user->phone ? $user->phone : __('statistics.add_phone_number') }}</p>
                            </div>
                            <button class="edit" data-target="box6">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.phone') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box6">
                                <div class="box-content">
                                    <input type="number" name="phone" value="{{ $user->phone }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 7 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.skill_profession') }}</h5>
                                <p>{{ $user->skill ? $user->skill : __('statistics.add_skill') }}</p>
                            </div>
                            <button class="edit" data-target="box7">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.skill') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box7">
                                <div class="box-content">
                                    <input type="text" name="skill"
                                        value="{{ $user->skill ? $user->skill : __('statistics.add_skill') }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>

                        <!-- Box 8 -->
                        <div class="box d-flex align-center justify-between">
                            <div class="subBox d-flex align-center">
                                <h5>{{ __('statistics.biography') }}</h5>
                                <p>{{ $user->bio ? $user->bio : __('statistics.add_biography') }}</p>
                            </div>
                            <button class="edit" data-target="box8">{{ __('statistics.edit') }}</button>
                        </div>
                        <form action="{{ route('update.bio') }}" method="post">
                            @csrf
                            <div class="overlaySide" id="box8">
                                <div class="box-content">
                                    <input type="text" name="bio"
                                        value="{{ $user->bio ? $user->bio : __('statistics.add_biography') }}">
                                    <input type="submit" value="{{ __('statistics.update') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="progress" class="tabcontent">
                    <div class="box d-flex align-center justify-center">
                        <i class="fa-solid fa-envelope-open"></i>
                        <h1>{{ __('statistics.no_data_available') }}</h1>
                    </div>
                </div>
            </aside>

        </div>
    </div>
@endsection
