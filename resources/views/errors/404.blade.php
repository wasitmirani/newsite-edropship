@extends('layouts.frontend.master')

@section('content')
@component('frontend.components.breadcrumb',['title'=>'404'])

@endcomponent
  <!--====== Start 404 Error Page Area ======-->
  <section class="error-page pt-130 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="error-page-content-wrapper text-center">
                    <div class="error-image animate-float-bob-x wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                        <img src="{{asset('assets/img/404.gif')}}" alt="error 404">
                    </div>
                    <div class="error-page-content wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <h2>OPPS!</h2>
                        <p>This Page Are Can’t Be Found</p>
                        <a href="{{route('home')}}" class="filled-btn">
                            Back To Home <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.error-page -->
<!--====== End 404 Error Page Area ======-->
@endsection
