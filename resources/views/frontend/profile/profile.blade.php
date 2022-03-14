@extends('layouts.frontendapp')

@section('content')
    <h4 class="text-light">Student / profile</h4>
    <div class="row">

        <div class="col-5">
            <div class="card">
                <img class="card-img-top" src="{{ asset('frontend_assets/images/profile/profile.png') }}" alt="">
                <div class="card-body bg-dark">
                    <h4 class="card-title">Asmaul Sarder</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-7">
            <form action="" method="post">
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="first_name">First Name</label>
                            <input class="w-100" type="text" name="first_name" id="first_name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="last_name">Last Name</label>
                            <input class="w-100" type="text" name="last_name" id="first_name">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="roll">Roll No.</label>
                            <input class="w-100" type="text" name="roll" id="roll">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="shift">Shift</label>
                            <input class="w-100" type="text" name="shift" id="shift">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
