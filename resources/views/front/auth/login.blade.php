@extends('front.layouts.app')

@section('content')
    <!-- Banner Area -->


    <!--================Contact Us Area =================-->
    <section class="contact_us_area" style="background-image:url(' ')">
        <div class="container">
            <div class="row" style="padding: 35px">
				<div class="col-xl-12">
					<div class="tittle la">
						<h2 style="text-align: ">Entrez vos informations pour vous connectez</span></h2>
					</div>
                    <div class="row wrap" style="padding-left:30%">
                        <div class="col-md-10">
                            <form class="contact_us_form" action="{{ route('front.login.post') }}" method="post">
                                @if($errors->all())
                                    <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px"> Vos identifiants sont incorrects</strong>
                                @endif
                                @csrf
                                <fieldset style="margin-top: 10px">
                                    <div class="form-group col-md-10">
                                        <label for="nom">Entrez votre email</label>
                                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                        @if($errors->has('email'))
                                            <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-10">
                                        <label for="nom">Entrez votre mot de passe</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        @if($errors->has('password'))
                                            <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>
                                    <div class="form-group col-md-10">
                                        <button type="submit" style="background-color:orange"  class="btn btn btn-success form-control" name="submit">Envoyez</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
