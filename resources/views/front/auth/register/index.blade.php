@extends('front.layout.app')

@section('content')
    <!-- ====== Register Start ====== -->
    <section class="ud-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ud-login-wrapper">
                        <div class="ud-login-logo">
                            <img src="assets/images/logo/logo-2.svg" alt="logo" />
                        </div>
                        <form class="ud-login-form" method="POST" action="{{ route('auth.register.store')}}">
                            @csrf
                            @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'name',
                                'name' => 'name',
                                'placeholder' => __('name'),
                            ])
                            @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'email',
                                'name' => 'email',
                                'id' => '',
                                'placeholder' => __('email'),
                            ])
                            @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'select',
                                'name' => 'gender',
                                'option' => ['male' => __('Male'), 'female'=> __('Female')],
                                'placeholder' => __('gender'),
                            ])


                            @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'text',
                                'name' => 'job_title',
                                'placeholder' => __('Job Title'),
                            ])


                            @include('front.components.field', [
                                'class' => 'col-md-12',
                                'type' => 'textarea',
                                'name' => 'bio',
                                'placeholder' => __('Bio'),
                            ])

                            @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'password',
                                'name' => 'password',
                                'placeholder' => __('Password'),
                            ])
                             @include('front.components.field', [
                                'class' => 'col-md-6',
                                'type' => 'password',
                                'name' => 'password_confirmation',
                                'placeholder' => __('Password Confirmation'),
                            ])


                            <div class="ud-form-group">
                                <button type="submit" class="ud-main-btn w-100">{{ __('Register') }}</button>
                            </div>
                        </form>

                      
                        <p class="signup-option">
                            {{ __('Not a member yet?') }} <a href="{{ route('auth.register.index') }}"> {{ __('Sign Up') }} </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Register End ====== -->
@endsection
