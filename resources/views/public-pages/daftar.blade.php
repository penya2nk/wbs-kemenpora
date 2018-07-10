@extends('public-pages.template')

@section('title')
	Register
@stop

@section('content')
	@inject('global_service','rni\Services\GlobalServices')
	
	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xs-12">

					<div class="row">
						<div class="col-md-4">
							@include('public-pages.sidebar-privacy-policy')
						</div>

						<div class="col-md-8">
							<div class="row text-center">
								<h2 class="title">
									<span class="title-head">Pendaftaran </span>
								</h2>
							</div>

							<p class="main-text" style="text-align: center;">Silahkan isi data diri anda dibawah. Field dengan icon merah harus diisi.</p>

						    <div class="gap-20">&nbsp;</div>

							{!! Form::open(['method'=>'POST', 'action'=>'Auth\RegisterController@register']) !!}

						    @include('partials.userData.default',['buttonText'=>'Kirim Pendaftaran','mode'=>'register'])

						    <div class="form-group text-center">
	                            <div class="col-12">
	                                <a class="main-text" href="{{ url('/lapor/login-page') }}">
	                                    Kembali ke halaman masuk (Login)
	                                </a>
	                            </div>
	                        </div>

						    {!! Form::close() !!}
						</div>

					</div>

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop

@section('javascript')
	<script type="text/javascript">
	    $(document).ready(function(){
	        // alert(document.getElementById('nonMemberForm').style.display);
	        // if($('#btnNonMember').css('disabled') == true)
	        // {
	        //     alert('true');
	        // }else{
	        //     alert('false');
	        // }
	        if( $.trim(document.getElementById('errorEmail').innerHTML) == "" ) {
	            // alert("Error kosong");            
	            nonMember();
	        }else{
	            // alert("Error isi");
	            member();            
	        }
	        // alert(document.getElementById('errorEmail').innerHTML);
	    });

    	/** Setting Date Time Picker **/

         $.datetimepicker.setLocale('en');

         $('#datetimepicker').datetimepicker({
            dayOfWeekStart : 1,
            lang:'en',
            startDate:  '{{ $global_service->getNow() }}',
            maxDate: '{{ $global_service->getNow() }}',             

            onChangeDateTime:function(ct,$i){

                var x = new Date();
                var y= '{{ $global_service->getNowTm() }}';

                if(ct > x){

                    document.getElementById("datetimepicker").value = y;

                }

            }
            
        });
        
        /** Setting Date Time Picker **/


	    /** Function button **/

	    function member() {
	        document.getElementById("btnMember").disabled = true;
	        document.getElementById("btnNonMember").disabled = false;

	        document.getElementById('memberForm').style.display = 'inline';
	        document.getElementById('nonMemberForm').style.display = 'none';

	        document.getElementById("modeMember").value = 2;

	        // if( $.trim(document.getElementById('errorEmail').innerHTML) != "" ) {
	        //     clearNonMember();
	        // }
	    }

	    function nonMember() {
	        document.getElementById("btnMember").disabled = false;
	        document.getElementById("btnNonMember").disabled = true;

	        document.getElementById('memberForm').style.display = 'none';
	        document.getElementById('nonMemberForm').style.display = 'inline';

	        document.getElementById("modeMember").value = 1;

	        // if( $.trim(document.getElementById('errorEmail').innerHTML) != "" ) {
	        //     clearMember();
	        // }
	    }

	    function clearMember(){    
	        document.getElementById("email2").value = "";
	        document.getElementById("password2").value = "";
	    }

	    function clearNonMember(){
	        document.getElementById("email").value = "";
	        document.getElementById("fullname").value = "";
	        document.getElementById("address").value = "";
	        document.getElementById("phoneNumber").value = "";
	        document.getElementById("handphoneNumber").value = "";
	        document.getElementById("identityNumber").value = "";
	    }

   		/** Function button **/   		
	</script>
@stop