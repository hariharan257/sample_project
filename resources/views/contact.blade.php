@extends('layouts.app')

@section('title') Contact @endsection

@section('content')
<div id="main-hero" class="hero-body">
    <div class="container has-text-centered">
        <div class="columns is-vcentered">
            <div class="column is-6 is-offset-3 has-text-centered is-subheader-caption">
                <h1 class="title is-2">
                    Contact
                </h1>
                <h2 class="subtitle">Lorem ipsum dolor sit amet consectetur elit.</h2>
            </div>
        </div>
    </div>
</div>
</div>

<div class="section">
    <div class="container">

        <!--Contact Page 1-->
        <div class="contact-page-1">
            <div class="columns">
                <div class="column is-5">
                    <div class="contact-page-form flex-card">

                        <h3>Contact Us</h3>
                        <p>Use the form below to send us a message.</p>

                        <div class="columns is-multiline">
                            <div class="column is-12">
                                <div class="field">
                                    <label>Full Name</label>
                                    <div class="control has-icons-left">
                                        <input type="text" class="input is-medium" placeholder="Your name">
                                        <span class="icon is-left is-small">
                                            <i class="sl sl-icon-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-12">

                                <div class="field">
                                    <label>Email Address</label>
                                    <div class="control has-icons-left">
                                        <input type="text" class="input is-medium" placeholder="Your email">
                                        <span class="icon is-left is-small">
                                            <i class="sl sl-icon-envelope-open"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <label>Message</label>
                                    <div class="control">
                                        <textarea class="textarea" rows="4" placeholder="Write your message"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="column is-12">
                                <div class="field">
                                    <div class="control">
                                        <button type="button" class="button button-cta primary-btn no-lh is-bold raised is-fullwidth">Send
                                            Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column is-7">
                    <div id="mapbox-1" class="mapbox-map map-1"></div>
                </div>
            </div>

            <div class="columns has-text-centered pt-80 pb-80">
                <div class="column is-hidden-mobile"></div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box rounded">
                        <span><i class="fa fa-map fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Address
                    </div>
                    <div class="description shadow-description">
                        48, Church Street, First district
                        <br>59852 New York, USA
                    </div>
                </div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box rounded">
                        <span><i class="fa fa-envelope fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Email
                    </div>
                    <div class="description shadow-description">
                        hello@bulkit.io
                    </div>
                </div>
                <!-- Icon box -->
                <div class="column is-3">
                    <div class="shadow-icon-box rounded">
                        <span><i class="fa fa-phone-square fa-lg"></i></span>
                    </div>
                    <div class="shadow-title dark-text">
                        Phone
                    </div>
                    <div class="description shadow-description">
                        +1 555 306 87
                    </div>
                </div>
                <div class="column is-hidden-mobile"></div>
            </div>
        </div>

    </div>
</div>

@endsection