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
		    background: #fc0134bf;
		    border-color: #fc0134bf;
		    line-height: 25px;
		    width: 90px;
		    border-radius: 0px;
		    margin-right: 20px;
		}

		#SaveAccount {
		    background: #fc0134bf;
		    border-color: #fc0134bf;
		    line-height: 25px;
		    /*width: 90px;*/
		    border-radius: 0px;
		    margin-right: 20px;
		}
	</style>
@endsection

@section('content')
	<!-- Banner Area --> 
    <section class="banner_area">
    	<div class="container">
    		<h2>Faire un virement</h2>
    		<ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Accueil</a></li>     
                <li><a href="#" class="active">Virement</a></li> 
            </ol>
    	</div>
    </section>

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div style="display: none;">
                <input type="number" value="{{$percent}}" id="percent"/>
            </div>
            <div class="contact_us_inner">
                <div class="section_title">
	                {{-- <h2>Entrez vos informations pour bénéficier d'un prêt</h2> --}}
                </div>
                <div class="row">
					<div class="row wrap">
						<div class="col-md-offset-2 col-md-8">
                            @if (!isset($finish))
                                <form id="SignupForm" action="{{ route('front.virement.post3') }}" method="post" class="contact_us_form">
                                    @csrf
                                    @if($errors->all())
                                        <strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Le code entré est incorrecte</strong>
                                    @endif
                                    <legend>EVOLUTION DU VIREMENT</legend>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-bottom: 15px">
                                                <label for="code3">Entrer le code d'Homologation</label>
                                                <input id="code3" name="code3" type="password" class="form-control" required value="" />
                                            </div>
                                        </div>
                                        {{-- <p> --}}
                                            <input type="submit" name="send" class="btn btn-danger" value="Continuer">
                                        {{-- </p> --}}

                                </form>
                            @endif

                            <div class="row col-md-12" style="margin-bottom: 15px">
                                @if (isset($finish))
                                   Virement en cours ...
                                @endif
                                @if (!isset($finish))
                                    Virement en cours ...
                                @endif
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"   style="width: 200px;" aria-valuenow="40" aria-valuemin="" aria-valuemax="100">87%</div>
                                </div>
                            </div>

                            @if (isset($finish))
				    		    <center><h3 style="margin-top: 20px;"><a href="{{ url('/account') }}">Aller sur mon compte</a></h3></center>
                            @endif
					    </div>
					</div>
				</div>
			</div>
        </div>

        <script type="text/javascript">
            var percent = document.getElementById("percent");
            $(document).ready(function(){
                var tim = 5000;
                $(".progress-bar").animate({
                    width: parseFloat(percent.value) + "%"
                }, tim);

                width = percent.value ;
                tim2 = (tim-800) /width ;
                setInterval(function() {
                    var pVal = parseInt($('.progress-bar').text());
                    var pCnt = pVal + 1;
                    if (pCnt > width) {
                        clearInterval(pCnt);
                    } else {
                        $('.progress-bar').text(pCnt + '%');
                    }
                }
                ,tim2);
            });
        </script>
	</section>

@endsection
