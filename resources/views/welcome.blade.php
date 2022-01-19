@extends('layouts.app')

@section('content')
    <section id="landing">
        <div class="jumbotron-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-4 py-1"><span style="color: crimson">Houston...</span><br> we have a contact!</h1>
                        <p class="lead py-1">MyCoinsUnderControl is a web application that will allow you to control your cryptocurrency wallet in a simple and transparent way.</p>
                        <a class="btn btn-outline-danger btn-lg" href="{{ route('register') }}">LET'S START</a>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="">
            <div class="jumbotron first-jumbotron">
                <div class="narrow">
                    <div class="col-12 text-center about-title">
                        <h1 class="about-heading text-uppercase">about us</h1>
                        <div class="about-heading-underline"></div>
                    </div>
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-4" data-aos-duration="800" data-aos="fade-up">
                                <div class="about-item aos-init aos-animate">
                                    <i class="fas fa-user-friends about-icon"></i>
                                    <h3 class="text-uppercase">BY TRADERS</h3>
                                    <p>Our product was created by cryptocurrency enthusiasts for traders at all levels of advancement.</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos-duration="1600" data-aos="fade-up">
                                <div class="about-item aos-init aos-animate">
                                    <i class="fas fa-shield-alt about-icon"></i>
                                    <h3 class="text-uppercase">STAY SAFE</h3>
                                    <p>Thanks to our service, you do not have to be afraid that any unauthorized person will use your funds on your account!</p>
                                </div>
                            </div>
                            <div class="col-md-4" data-aos-duration="1200" data-aos="fade-up">
                                <div class="about-item aos-init aos-animate">
                                    <i class="fas fa-coins about-icon"></i>
                                    <h3 class="text-uppercase">FOR YOUR PROFIT</h3>
                                    <p>Our product will allow you to optimize the profits of your portfolio!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <img class="col-img" src="{{asset('storage/images/astronaut2.png')}}" alt="PEPE" />
                </div>
                <div class="col-4 offset-1">
                    <div class="card contact-card">
                        <h3>Let's make contact</h3>
                        <form>
                            <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Full Name</span> </div>
                            <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Email</span> </div>
                            <div class="inputbox"> <input type="text" name="name" class="form-control" required="required"> <span>Message</span> </div>
                            <button class="btn btn-danger btn-block" style="min-width: 10rem">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
