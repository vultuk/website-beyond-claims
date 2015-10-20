@extends('themes.' . $theme . '.master')

@section('title', 'Thank You - Payment Complete')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="welcome">
                    <div class="page-name pull-left"><h3>Thank You: <i class="text-muted">Payment Complete</i></h3></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container marg50">
        <div class="row">
            <div class="col-lg-12">
                <p class="about_text">
                    Thank you for your payment. This has been received and your case will be closed in due course. If there have been any problems with this payment we will contact you before closing your case.
                </p>
            </div>
        </div>
    </div>

@stop