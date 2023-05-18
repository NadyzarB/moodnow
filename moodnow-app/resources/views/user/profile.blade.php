@extends('layouts.master')

@section('content')
<style>
    .card{
        margin-top: 4rem;
        margin-bottom: 8rem;
        height: 45vh;
        width: 30vw;
        box-shadow: 0 0 3px black;
    }

    .row {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .container{
        display: flex;
        justify-content: center;
        align-content: center;
    }
    
    .username {
        font-size: 18px;
        font-weight: 600;
    }

    .username-control.form-control {
        display: flex;
        background: rgb(84, 44, 183);
        background: linear-gradient(50deg, rgba(84, 44, 183, 1) 32%, rgba(98, 47, 223, 1) 100%);
        color: #FFFFFF; /* Replace with your desired text color */
        text-align: center;
        border-radius: 4px;
        border: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 1px 1px rgba(0, 0, 0, 0.15);
        padding: 1rem;
        width: 80%;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.199);
    }

    .username-control.form-control::placeholder {
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bolder;
    }

    .password {
        font-size: 18px;
        font-weight: 600;
    }

    .password-control.form-control {
        display: flex;
        background: rgb(84, 44, 183);
        background: linear-gradient(50deg, rgba(84, 44, 183, 1) 32%, rgba(98, 47, 223, 1) 100%);
        color: #FFFFFF; /* Replace with your desired text color */
        text-align: center;
        border-radius: 4px;
        border: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 1px 1px rgba(0, 0, 0, 0.15);
        padding: 1rem;
        width: 80%;
        box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.199);
    }

    .password-control.form-control::placeholder {
        color: #ffffff;
        text-transform: uppercase;
        font-weight: bolder;
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
    <img src="{{ asset('kroos/images/illustrations/page-title.png') }}" alt="illustrations" class="bg-shape-1 w-100">
    <img src="{{ asset('kroos/images/illustrations/leaf-pink-round.png') }}" alt="illustrations" class="bg-shape-2">
    <img src="{{ asset('kroos/images/illustrations/dots-cyan.png') }}" alt="illustrations" class="bg-shape-3">
    <img src="{{ asset('kroos/images/illustrations/leaf-orange.png" alt="illustrations') }}" class="bg-shape-4">
    <img src="{{ asset('kroos/images/illustrations/leaf-yellow.png') }}" alt="illustrations" class="bg-shape-5">
    <img src="{{ asset('kroos/images/illustrations/dots-group-cyan.png') }}" alt="illustrations" class="bg-shape-6">
    <img src="{{ asset('kroos/images/illustrations/leaf-cyan-lg.png') }}" alt="illustrations" class="bg-shape-7">
  </section>
  <!-- /page title -->

      {{-- User Profile --}}
      <div class="container">
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <p class="username">username</p>
                </div>
                <div class="row">
                    <input type="text" class="form-control username-control" placeholder="name/example" disabled>
                </div>
                <div class="row">
                    <p class="password">password</p>
                </div>
                <div class="row mb-4">
                    <input type="text" class="form-control password-control" placeholder="name/example" disabled>
                </div>
                <div class="row">
                    <a class="btn btn-primary" type="submit">EDIT</a>
                </div>
            </div>
        </div>
      </div>

@endsection