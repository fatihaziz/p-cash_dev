@extends('layout.app')

@section('title', 'Form')
@section('head')
<script>
    $(document).ready(function()
    {
        $('input:not(#image)').each(function()
        {
            $(this).attr('required','required');
            $(this).attr('autocomplete','off');
        });
    });
</script>
@if($msg = Session::get('error'))
    <style>
        .notif{
            background: #f44336;
            padding: 1em;
            text-align: center;
            font-weight: 600;
        }

    </style>
    <div class="notif">
        {{ $msg }}
    </div>
@endif
@stop
@section('main')
<main id="form">
        <form enctype="multipart/form-data" action="{{ route('post.store') }}" method="POST">     
             <h2>Registration Form</h2>
            {{ csrf_field() }}
            
            <input type="email" name="email" id="mail" placeholder="Email" value="{{ old('email') }}">
            <input type="text" name="fname" id="fname" placeholder="First Name" value="{{ old('fname') }}">
            <input type="text" name="lname" id="lname" placeholder="Last Name" value="{{ old('lname') }}">
            <input type="password" name="pass" id="pass" placeholder="Password" value="{{ old('pass') }}">
            <input type="password" name="cpass" id="cpass" placeholder="Retype Your Password" value="{{ old('cpass') }}">
            <input type="number" name="phone" id="" placeholder="Phone" value="{{ old('phone') }}">
            <div class="ktp-upload">
                <p>Identity Card (KTP)</p>
                <img src="{{ asset('/assets/icons8-google-images-100.png') }}" alt="">
                <input type="file" accept="image/*,application/pdf" name="image" id="image">
            </div>
            <div class="wraper">
                    <input type="checkbox" name="acc1" @if(old('acc1')){{ 'checked' }}@endif>
                        <div>
                             I hereby acknowledge and decleare that i have read and understood the <a target="_blank" href="{{ url('term') }}">term and condition</a> and <a target="_blank" href="{{ url('privacy') }}">privacy policy</a>, including confidentiality of my information, and accept it tobe given to P-Cash provider for broker registration purposes
                        </div>
                </div>
                <div class="wraper">
                                <input type="checkbox" name="acc2" @if(old('acc2')){{ 'checked' }}@endif>
                                    <div>
                                        I understand the risk in the future and accept the penalties if i break the <a target="_blank" href="{{ url('term') }}">term and condition</a> after give this information
                                    </div>
                            </div>
            <div class="wrapper">
                    <p>By clicking Sign up, you agree to <a target="_blank" href="{{ url('term') }}">P-Cash's term and conditions</a> and <a target="_blank" href="{{ url('privacy') }}">privacy policy</a></p>
            </div>
            <button type="submit" class="btn-grad">Sign Up</button>
        </form>
</main>
<script>
    $(document).on('keyup',function(evt) {
        if (evt.keyCode == 27) {
            history.back();
        }
    });
</script>
@stop