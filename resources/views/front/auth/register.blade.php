@extends('front.layouts.app')

@section('stylesheets')
    <style type="text/css">
        .contact_us_form .form-group input{
          height: 40px;
        }

        #step1Prev, #step2Prev {
            background: #333;
            border-color: #333;
            color: #fff;
            line-height: 25px;
            width: 90px;
            border-radius: 0px;
            margin-right: 20px;
        }

        #step1Next, #step0Next {
            background: #449d44;
            border-color: #449d44;
            line-height: 25px;
            width: 90px;
            border-radius: 0px;
            margin-right: 20px;
        }

        #SaveAccount {
            background: #369c15;
            border-color: #369c15;
            line-height: 25px;
            border-radius: 0px;
            margin-right: 20px;
        }
        .invalid-feedback{
            color: red;
        }
    </style>
@endsection

@section('content')
    <!-- Banner Area -->

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="row" style="padding: 35px">
				<div class="col-xl-12">
					<div class="tittle la">
						<h2>Créer un compte</span></h2>
					</div>
                    <div class="row wrap">
                        <div class="col-md-12">
                            <form id="SignupForm" action="{{ route('front.register.post') }}" method="post" enctype="multipart/form-data" style="margin-bottom: 20px" class="contact_us_form">
                                @csrf
                                @if($errors->all())
                                    <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Erreur dans les informations</strong>
                                @endif
                                @if(Session::has('success'))
                                    <strong style="color: ##02b320; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Votre compte est activé</strong>
                                @endif
                                <fieldset style="margin-top: 10px">
                                    <legend>1. Informations Personnelles</legend>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="nom">Nom</label>
                                            <input id="nom" name="nom" type="text" class="form-control" required value="{{ old('nom') }}" />
                                            @if($errors->has('nom'))
                                                <div class="invalid-feedback">{{ $errors->first('nom') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="prenom">Prénom</label>
                                            <input id="prenom" name="prenom" type="text" class="form-control" value="{{ old('prenom') }}" required />
                                            @if($errors->has('prenom'))
                                                <div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="telephone">Téléphone</label>
                                            <input id="telephone" name="telephone" type="text" class="form-control"  value="{{ old('telephone') }}" required />
                                            @if($errors->has('telephone'))
                                                <div class="invalid-feedback">{{ $errors->first('telephone') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email">Email</label>
                                            <input id="email" name="email" type="text" class="form-control"  value="{{ old('email') }}" required />
                                            @if($errors->has('email'))
                                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="adresse">Adresse</label>
                                            <input id="adresse" name="adresse" type="text" class="form-control"  value="{{ old('adresse') }}" required />
                                            @if($errors->has('adresse'))
                                                <div class="invalid-feedback">{{ $errors->first('adresse') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date_naissance">Date de naissance</label>
                                            <input id="date_naissance" name="date_naissance" type="date" class="form-control"  value="{{ old('date_naissance') }}" required />
                                            @if($errors->has('date_naissance'))
                                                <div class="invalid-feedback">{{ $errors->first('date_naissance') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="pays">Pays</label>
                                            <input id="pays" name="pays" type="text" class="form-control"  value="{{ old('pays') }}" required />
                                            @if($errors->has('pays'))
                                                <div class="invalid-feedback">{{ $errors->first('pays') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="codePostal">Code Postal</label>
                                            <input id="codePostal" name="codePostal" type="text" class="form-control"  value="{{ old('codePostal') }}" required />
                                            @if($errors->has('codePostal'))
                                                <div class="invalid-feedback">{{ $errors->first('codePostal') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>

                                <fieldset >
                                    <legend>2. Activer son compte</legend>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <label for="password">Mot de Passe</label>
                                            <input id="password" name="password" type="password" class="form-control" value="{{ old('password') }}" />
                                            @if($errors->has('password'))
                                                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password_confirmation">Confirmez votre mot de passe</label>
                                            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" required value="{{ old('password_confirmation') }}" />
                                            @if($errors->has('password_confirmation'))
                                                <div class="invalid-feedback">{{ $errors->first('password_confirmation') }}</div>
                                            @endif
                                        </div>
                                    </div>
                                </fieldset>
                                <p>
                                    <input id="SaveAccount" type="submit" style="background-color:orange"  class="btn btn-success" name="SaveAccount" value="Créer votre compte">
                                </p>
                            </form>
                            <p>Vous avez deja un compte? <a  href="{{ route('front.login') }}">Connectez-vous</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/front/js/jquery.formtowizard.js') }}"></script>
    <script>
        $( function() {
            var $signupForm = $( '#SignupForm' );

            $signupForm.validate({errorElement: 'em'});

            $signupForm.formToWizard({
                submitButton: 'SaveAccount',
                nextBtnClass: 'btn btn-primary next',
                prevBtnClass: 'btn btn-default prev',
                buttonTag:    'button',
                validateBeforeNext: function(form, step) {
                    var stepIsValid = true;
                    var validator = form.validate();
                    $(':input', step).each( function(index) {
                        var xy = validator.element(this);
                        stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
                    });
                    return stepIsValid;
                },
                progress: function (i, count) {
                    $('#progress-complete').width(''+(i/count*100)+'%');
                }
            });
        });
    </script>
@endsection
