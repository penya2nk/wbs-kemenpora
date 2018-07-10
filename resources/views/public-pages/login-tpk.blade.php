@extends('public-pages.template')

@section('title')
	Login
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
									<span class="title-head">Masuk Aplikasi WBS </span>
								</h2>
							</div>

							<p class="main-text" style="text-align: center;">Silahkan anda login menggunakan akun yang sudah anda miliki</p>

						    <div class="gap-20">&nbsp;</div>

						    <div class="radio">
							  <label class="main-text">
							    <input type="radio" name="jalur" onclick="javascript:window.open('{{ url('/lapor/login-page') }}','_self')">
							    Laporan Pengaduan Masyarakat (pelapor dari masyarakat)
							  </label>
							</div>

							<div class="radio">
							  <label class="main-text">
							    <input type="radio" name="jalur" checked>
							    Laporan TPK (pelapor dari internal KEMENPORA)
							  </label>
							</div>
						    
						    {{-- <a href="{{ url('/lapor/login-page') }}" class="btn btn-primary" style="background: #111111;">Laporan Pengaduan Masyarakat</a>
						    
						    <a href="{{ url('/lapor/login-page/tpk') }}" class="btn btn-primary" style="background: #989898;">Laporan TPK</a> --}}
						    
						    <div class="gap-20">&nbsp;</div>
						    @if( !empty(Session::get('status')) )
								<div class="alert alert-danger" role="alert">
									{{ Session::get('msg') }}
								</div>
							@endif
							<form id="formLogin" class="form" data-toggle="validator" role="form" method="post" action="{{ url('/login-tpk') }}">
					        {{ csrf_field() }}
						        
						        @include('errors.list')

						        <div class="form-group">
						            <div class="input-group">

						                <span class="input-group-addon text-danger"><span class="fa fa-user-secret"></span></span>
						                {!! Form::text('nip',null,['class'=>'form-control only-numeric','placeholder'=>'NIP (Tanpa Spasi)']) !!}
						            </div>
						        </div>

						        <div class="form-group">
						            <div class="input-group">
						                <span class="input-group-addon text-danger"><span class="fa fa-circle"></span></span>
						                <input class="form-control" type="password" name="password" placeholder="Password">
						            </div>
						        </div>

						        <div class="gap-20">&nbsp;</div>
						        
						        <div class="form-group">
						            <div class="col-sm-12" style="text-align: center;">
						                <button type="submit" name="btn-login" class="btn btn-primary">Masuk</button>
						                <button type="reset" name="btn-reset" class="btn btn-dark">Ulang</button>
						                {{-- <br><br><a href="{{ url('/reset') }}" class="main-text">Lupa Password?</a> --}}
						            </div>
						        </div>
						    </form>
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
        
        $( "input.only-numeric" ).on( "blur", function() {
		  	$( this ).val(function( i, val ) {
		    	return val.replace(/[^0-9\s]/gi, '').replace(/[_\s]/g, '');
		  	});
		});
	       		
	</script>
@stop