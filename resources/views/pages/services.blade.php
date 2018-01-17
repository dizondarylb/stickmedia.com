@extends('layouts.master')

@section('title', 'Stick Media - The Business Of Play')

@section('content')
    <div class="parallax-services-banner"> 
        <div class="container-right">
        <div class="title-banner pull-right">
            <h1 class="no-margin">STICK TO WHAT WE KNOW</h1>
            <p class="description-banner">And we know change.</p>
        </div></div>
    </div>


    <div class="row">
        <div class="container">
            <div class="col-md-6 col-xs-12">
                <div class="align-center">
                    <h3>MARKETING</h3>
                    <p>We offer a range of services to expertly handle every facet of your business strategy, branding, execution and beyond. We stay ahead, and don’t chase after, developments and innovations in all aspects of digital marketing.</p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="align-center">
                    <h3>TECHNOLOGY</h3>
                    <p>The science behind front-end marketing and end-to-end product development is the engine that drives all of the flashy stuff. We provide proprietary technology solutions to meet our clients’ precise business goals.</p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-xs-12"><hr></div>
        <div class="col-md-12 col-xs-12">
            
            <div class="container align-center pad-b-20">
                <h3>SERVICES</h3>
                <p>With a full range of digital marketing services, we’re able to do whatever is takes - from building brand awareness to raising our client’s corporate profile.</p>
            </div>

            <div class="row"><div class="container">
                <div class="icon-div col-md-12">
                    <div class="col-md-6 col-xs-12">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/creative-design.png') }}">
                            <h4>Creative Design</h4>
                            <p>The visual impact of original and quality graphic design in every marketing resource is important to the success of any brand, business or organization.</p>
                        </div>
                        <hr class="mobile-hr"><br class="mobile-br">
                    </div>
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/branding.png') }}">
                            <h4>Branding</h4>
                            <p>Your brand should reflect who you are, what you do, and make a connection with your customers. Most importantly, it should be executed properly and delivered effectively throughout all of your communication efforts.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                </div>
                <div class="icon-div col-md-12">
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/digital.png') }}">
                            <h4>Digital</h4>
                            <p>Consumers have become sophisticated, and more than ever brands need cut through the noise and market in a way that hits home. We create authentic experiences tailored to consumers wants.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/social.png') }}">
                            <h4>Social</h4>
                            <p>We connect brands with consumers - where they are, with content that is relevant, authentic and shareable.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                </div>
                
                <div class="icon-div col-md-12">
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/ecommerce.png') }}">
                            <h4>Ecommerce Solutions</h4>
                            <p>We develop leading-edge ecommerce solutions customized for our clients and partners in the entertainment and gaming industry.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/web-design.png') }}">
                            <h4>Web Design</h4>
                            <p>Our team creates high-end, functional and attractive websites, effective at boosting business.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                </div>

                <div class="icon-div col-md-12">
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/development.png') }}">
                            <h4>Development</h4>
                            <p>Development is critical to the success of any project. We will wireframe, spec, build, test and optimise your marketing campaign as well as develop new market segments for current products.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                    <div class="col-md-6">
                        <div class="align-center">
                            <img src="{{ asset('/public/images/icons/development.png') }}">
                            <h4>Support</h4>
                            <p>We provide customer service requirements for our clients and partners, offering their consumers top-notch service.</p>
                        </div><hr class="mobile-hr"><br class="mobile-br">
                    </div>
                </div></div>
            </div>            
        </div>

    </div>

@endsection