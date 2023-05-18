@extends('layouts.master')

@section('content')
    <style>
        .card{
            margin-top: 8rem;
            margin-bottom: 8rem;
            height: 60vh;
            width: 30vw;
            box-shadow: 0 0 3px black;
            justify-content: center;
            align-items: center;
        }

        .container{
            display: flex;
            justify-content: center;
            align-content: center;
        }

        .profile-pic {
            width: 117px; /* adjust to desired size */
            height: 117px; /* adjust to desired size */
            border-radius: 50%; /* creates a circle */
            overflow: hidden; /* clips the image to the circle */
            border: 2px solid #ee0f0f; /* add border with color */
            overflow: hidden; /* hide overflowing parts of the image */
        }

        .profile-pic img {
            background-color: black;
            width: 100%;
            height: 100%;
            object-fit: cover; /* maintains aspect ratio while filling the circle */
        }

        .username {
            font-size: 18px;
            font-weight: 600;
        }
    </style>

    <!-- page title -->
    <section class="page-title bg-primary position-relative">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h1 class="text-white font-tertiary">Profile</h1>
            </div>
          </div>
        </div>
        <!-- background shapes -->
        <img src="{{ asset('landpage/images/illustrations/page-title.png') }}" alt="illustrations" class="bg-shape-1 w-100">
        <img src="{{ asset('landpage/images/illustrations/leaf-pink-round.png') }}" alt="illustrations" class="bg-shape-2">
        <img src="{{ asset('landpage/images/illustrations/dots-cyan.png') }}" alt="illustrations" class="bg-shape-3">
        <img src="{{ asset('landpage/images/illustrations/leaf-orange.png" alt="illustrations') }}" class="bg-shape-4">
        <img src="{{ asset('landpage/images/illustrations/leaf-yellow.png') }}" alt="illustrations" class="bg-shape-5">
        <img src="{{ asset('landpage/images/illustrations/dots-group-cyan.png') }}" alt="illustrations" class="bg-shape-6">
        <img src="{{ asset('landpage/images/illustrations/leaf-cyan-lg.png') }}" alt="illustrations" class="bg-shape-7">
      </section>
      <!-- /page title -->

      {{-- User Profile --}}
      <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="profile-pic">
                        <img src="landpage/images/testimonial/client-1.png" alt="Profile photo">
                      </div>
                </div>
                <div class="row">
                    <p class="username">username</p>
                </div>
            </div>
        </div>
      </div>

@endsection