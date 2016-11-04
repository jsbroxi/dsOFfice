<?php

  use App\Employee; 
  $emps = Employee::all();
?>


@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-13" id="main_contentDiv">
			@foreach($emps as $emp)
				 <div class="col-md-3"  >
        			<div class="well well-white mini-profile-widget" id="myBox" onclick="location.href='fulldetails/{{$emp->id}}'"> 
            		<div class="image-container">
               			 <img src="img/empimages/{{$emp->imgurl}}" class="avatar img-responsive" alt="avatar">
           			 </div>   
            		<div class="details">
		                <h4>{{$emp->first_name}} {{$emp->last_name}}</h4>
		                <hr> 
		                <div>Works at Bootdey.com</div>
		                <div>Attended University of Bootdey.com</div>
		                <div>Lives in Miami, Florida</div>
		                <div class="mg-top-10">32 Followers | 120 Following | 18 Posts</div>
		                <p class="mg-top-20"> 
		                    <a href="javascript:void(0);" class="btn btn-blue">
		                        <i class="fa fa-facebook fa-fw"></i>
		                    </a>
		                    <a href="javascript:void(0);" class="btn btn-info">
		                        <i class="fa fa-twitter fa-fw"></i>
		                    </a>
		                    <a href="javascript:void(0);" class="btn btn-red">
		                        <i class="fa fa-google-plus fa-fw"></i>
		                    </a>
		                </p>
		            </div> 
       			 </div>
   				 </div>
   				@endforeach
			</div>
		</div>
	</div>
@endsection
<script>
	$("#myBox").click(function() {
	  window.location = $(this).find("a").attr("href"); 
	  return false;
	});
</script>

<style type="text/css">
	body{margin-top:20px;}


/* Component: Well */
.well {
  overflow: hidden;
  border-radius: 0;
  margin-bottom: 30px;
}
.well .well-heading .controls {
  position: absolute;
  top: 10px;
  right: 30px;
}
.well .well-body {
  margin-top: 20px;
  position: relative;
  z-index: 3;
}
.well .well-image {
  font-size: 90px;
  line-height: 90px;
  position: absolute;
  top: 20px;
  right: 30px;
  z-index: 1;
  color: rgba(0, 0, 0, 0.15);
  -webkit-transition: all 0.2s ease-in;
  -moz-transition: all 0.2s ease-in;
  -ms-transition: all 0.2s ease-in;
  -o-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}
.well.well-solid {
  color: white;
}
.well:hover .well-image {
  font-size: 60px;
}
.well-white {
  background-color: white;
  color: #454545;
}
.well-blue {
  background-color: #2980b9;
  color: white;
}
.well-light-blue {
  background-color: #3498db;
  color: white;
}
.well-green {
  background-color: #27ae60;
  color: white;
}
.well-light-green {
  background-color: #2ecc71;
  color: white;
}
.well-orange {
  background-color: #e82c0c;
  color: white;
}
.well-light-orange {
  background-color: #ff530d;
  color: white;
}
.well-red {
  background-color: #d40d12;
  color: white;
}
.well-light-red {
  background-color: #ff1d23;
  color: white;
}
.well-purple {
  background-color: #8e44ad;
  color: white;
}
.well-light-purple {
  background-color: #9b59b6;
  color: white;
}
.well-pink {
  background-color: #fe31ab;
  color: white;
}
.well-light-pink {
  background-color: #fd32c0;
  color: white;
}

.mini-profile-widget .image-container .avatar {
    width: 180px;
    height: 180px;
    display: block;
    margin: 0 auto;
    border-radius: 50%;
    background: white;
    padding: 4px;
    border: 1px solid #dddddd;
}

.btn-blue {
  background-color: #3498db;
  border-color: #3498db;
  color: white;
}
.btn-blue:hover,
.btn-blue:visited {
  background-color: #2980b9;
  color: white;
}
.btn-green {
  background-color: #2ecc71;
  border-color: #27ae60;
  color: white;
}
.btn-green:hover,
.btn-green:visited {
  background-color: #27ae60;
  color: white;
}
.btn-orange {
  background-color: #ff530d;
  border-color: #e82c0c;
  color: white;
}
.btn-orange:hover,
.btn-orange:visited {
  background-color: #e82c0c;
  color: white;
}
.btn-red {
  background-color: #ff1d23;
  border-color: #d40d12;
  color: white;
}
.btn-red:hover,
.btn-red:visited {
  background-color: #d40d12;
  color: white;
}
.btn-purple {
  background-color: #9b59b6;
  border-color: #8e44ad;
  color: white;
}
.btn-purple:hover,
.btn-purple:visited {
  background-color: #8e44ad;
  color: white;
}
.btn-pink {
  background-color: #fd32c0;
  border-color: #fe31ab;
  color: white;
}
.btn-pink:hover,
.btn-pink:visited {
  background-color: #fe31ab;
  color: white;
}

.mini-profile-widget .details {
    text-align: center;
}


#myBox:hover{
	background-color: #7f848c;
  color: white;
  cursor: pointer;

}

</style>