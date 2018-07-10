@extends('public-pages.template')

@section('title')
	FaQ
@stop

@section('content')

<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

					<h3 class="page-title">Pertanyaan yang sering diajukan (FAQ).</h2>

					<div class="panel-group" id="accordionA">
						
						@foreach ($recFaq as $element)
							<div class="panel panel-default">
				                <div class="panel-heading">
					                <h3 class="panel-title"> 
					                	<a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapse{{$element->id}}">
											{{$element->noUrut}}. {!!$element->question!!}</a> 
					                </h3>
				                </div>
				                <div id="collapse{{$element->id}}" class="panel-collapse collapse in">
				                  	<div class="panel-body">
				                    	<p class="main-text">{!!$element->answer!!}</p>
				                 	</div>
				                </div>
			              	</div>
						@endforeach
        		
        			</div><!-- Accordion end -->

				</div><!-- Content Col end -->

			</div><!-- Main row end -->

		</div><!-- Conatiner end -->
	</section><!-- Main container end -->
@stop
	
	