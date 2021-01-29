<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }



                @import url('https://fonts.googleapis.com/css?family=Montserrat');

                * {
                    box-sizing: border-box;
                }

                body {
                    background-color: #28223F;
                    font-family: Montserrat, sans-serif;
                    

                    min-height: 100vh;
                    margin: 0;
                }

                .h3 {
                    font-size: 18px;
                    margin: 10px 0;
                }

                .h6 {
                    font-size: 14px;
                    margin: 5px 0;
                }

                .p {
                    font-size: 14px;
                    line-height: 21px;
                }

                .card-container {
                    background-color: #231E39;
                    border-radius: 5px;
                    box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                    color: #B3B8CD;
                    padding-top: 30px;
                    margin-left:30px;
                    position: relative;
                    width:28%;
                    max-width: 100%;
                    text-align: center;
                    height:300px;
                }

                .card-container-mini {
                    background-color: #231E39;
                    border-radius: 5px;
                    box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                    color: #B3B8CD;
                    padding-top: 30px;
                    margin-left:30px;
                    position: relative;
                    width:14%;
                    max-width: 100%;
                    text-align: center;
                    height:300px;
                }

                .card-container .pro {
                    color: #231E39;
                    background-color: #FEBB0B;
                    border-radius: 3px;
                    font-size: 14px;
                    font-weight: bold;
                    padding: 3px 7px;
                    position: absolute;
                    top: 0px;
                    left: 0px;
                }
                .card-container-mini .pro {
                    color: #231E39;
                    background-color: #FEBB0B;
                    border-radius: 3px;
                    font-size: 12px;
                    font-weight: bold;
                    padding: 3px 3px;
                    position: absolute;
                    top: 0px;
                    left: 0px;
                }

                .card-container .round {
                    border: 1px solid #03BFCB;
                    border-radius: 50%;
                    padding: 7px;
                    width:50%;
                }
                .card-container-mini .round {
                    border: 1px solid #03BFCB;
                    border-radius: 50%;
                    padding: 7px;
                    width:50%;
                }

                button.primary {
                    background-color: #03BFCB;
                    border: 1px solid #03BFCB;
                    border-radius: 3px;
                    color: #231E39;
                    font-family: Montserrat, sans-serif;
                    font-weight: 500;
                    padding: 10px 25px;
                }

                button.primary.ghost {
                    background-color: transparent;
                    color: #02899C;
                }

                .skills {
                    background-color: #1F1A36;
                    text-align: left;
                    padding: 15px;
                    margin-top: 30px;
                }

                .skills ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                }

                .skills ul li {
                    border: 1px solid #2D2747;
                    border-radius: 2px;
                    display: inline-block;
                    font-size: 12px;
                    margin: 0 7px 7px 0;
                    padding: 7px;
                }

                footer {
                    background-color: #222;
                    color: #fff;
                    font-size: 14px;
                    bottom: 0;
                    position: fixed;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 999;
                }

                footer p {
                    margin: 10px 0;
                }

                footer i {
                    color: red;
                }

                footer a {
                    color: #3c97bf;
                    text-decoration: none;
                }
                @media (max-width: 1000px) {
                    .card-container {
                        background-color: #231E39;
                        border-radius: 5px;
                        box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                        color: #B3B8CD;
                        padding-top: 30px;
                        margin-left:30px;
                        margin-top:30px;
                        position: relative;
                        width: 40%;
                        max-width: 100%;
                        text-align: center;
                    }

                    .card-container-mini {
                        background-color: #231E39;
                        border-radius: 5px;
                        box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                        color: #B3B8CD;
                        padding-top: 30px;
                        margin-left:30px;
                        position: relative;
                        width:90%;
                        max-width: 100%;
                        text-align: center;
                        
                    }
                }
                @media (max-width: 550px) {
                    .card-container {
                        background-color: #231E39;
                        border-radius: 5px;
                        box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                        color: #B3B8CD;
                        padding-top: 30px;
                        margin-left:30px;
                        margin-top:30px;
                        position: relative;
                        width: 90%;
                        max-width: 100%;
                        text-align: center;
                    }

                    .card-container-mini {
                        background-color: #231E39;
                        border-radius: 5px;
                        box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
                        color: #B3B8CD;
                        padding-top: 30px;
                        margin-left:30px;
                        position: relative;
                        width:90%;
                        max-width: 100%;
                        text-align: center;
                    
                    }
                }
                
        </style>

        <link rel="stylesheet" href="{{ asset('css/stylenav.css') }}">



    </head>
    <body >

    <!-- Nav -->
    <!-- Options -->

<nav class="navbar">
	<div class="container-fluid">
		<!-- Nav Header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><span class="fa fa-home"></span><span class="link"> Home</span></a>
			<a class="navbar-brand" href=""><span class="fa fa-home"></span><span class="link"> Add Bookings</span></a>
		</div>
		<!-- Nav Collapse -->
		<div class="navbar-collapse collapse" id="collapse-1">
			<!-- Nav Left -->
			<ul class="nav navbar-nav">
				<!-- Products -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-tags"></span><span class="link"> Products</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 1</a></li>
						<li><a href="#"><span class="fa fa-tag"></span> Catalogue 2</a></li>
					</ul>
				</li>
				<!-- Services -->
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
						<span class="fa fa-gears"></span><span class="link"> Services</span> <span class="fa fa-caret-down"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#"><span class="fa fa-gear"/></span> Service 1</a></li>
						<li><a href="#"><span class="fa fa-gear"/></span> Service 2</a></li>
						<li><a href="#"><span class="fa fa-gear"/></span> Service 3</a></li>
					</ul>
				</li>
				<!-- About -->
				<li><a href="#"><span class="fa fa-info-circle"></span><span class="link"> About</span></a></li>
				<!-- Contact -->
				<li><a href="#"><span class="fa fa-phone"></span><span class="link"> Contact</span></a></li>
			</ul>
			<!-- Nav Right -->
			<form class="navbar-form navbar-right">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn"><span class="fa fa-search"></span></button>
			</form>
		</div>
	</div>
</nav>
<!-- end nav -->
   
   
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    @php 
        $url1=$_SERVER['REQUEST_URI'];
        header("Refresh: 61; URL=$url1");

        $day = $now;
    @endphp
    <div >
    <h2 align="center"> {{$day->format('l jS \\of F, Y') }} </h2>
    <hr>
    @foreach($event_details as $event)
               
            @php
                $minDate = $event->startDateTime->format('h:i a');
                $endTime = $event->endDateTime->format('h:i a');
                $timePeriod = Carbon\Carbon::parse($event->endDateTime)->diffInMinutes(Carbon\Carbon::parse($event->startDateTime));    
                if($timePeriod==60){
                    $period_disp = "1 Hour";
                }else{
                    $period_disp = $timePeriod." Minutes";
                }         
            @endphp
            <!-- @if($minDate > 0) -->
            @if($event->startDateTime->diffInDays() > $day->diffInDays())
            @php $day = $event->startDateTime; @endphp
            <h2 align="center"> {{$day->format('l jS \\of F, Y') }} </h2>
                <hr>
                @if($timePeriod==30)
                    <div class="card-container-mini" style="display:inline-block;">
                        <span class="pro">Time: {{$minDate}} TO {{$endTime}} Period: {{$period_disp}}</span>
                        <!-- <span class="pro">Time: </span> -->
                        <img class="round" src="/computer-icons-portable-network-graphics-user-profile-avatar-png-favpng-L1ihcbxsHbnBKBvjjfBMFGbb7.jpg" alt="user" />
                        <h6 class="h6">{{$event->name}}</h6>
                        <h6 class="h6">{{$event->location}}</h6>
                        @php 
                            $output = $event->name;
                            preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                            if($matches){
                                $tel_number=$matches[0];
                            }
                        @endphp
                        <h6 class="h6 btn-success">{{$tel_number ?? 'No phone number'}}</h6>
                        <div class="buttons ">
                            <button type="button" class="btn-sm primary " id="resch_btn" onclick="myFunction('{{$event->id}}')">
                                Reschedule
                            </button>
                            <button type="button" class="btn-sm primary ghost " id="delete_btn" onclick="deleteFunction('{{$event->id}}')">
                                Cancel
                            </button>
                        </div>
                    </div>

                @else
                    <div class="card-container" style="display:inline-block;">
                        <span class="pro">Time: {{$minDate}} TO {{$endTime}} Period: {{$period_disp}}</span>
                        <!-- <span class="pro">Time: </span> -->
                        <img class="round" src="/computer-icons-portable-network-graphics-user-profile-avatar-png-favpng-L1ihcbxsHbnBKBvjjfBMFGbb7.jpg" alt="user" />
                        <h6 class="h6">{{$event->name}}</h3>
                        <h6 class="h6">{{$event->location}}</h6>
                        @php 
                            $output = $event->name;
                            preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                            if($matches){
                                $tel_number=$matches[0];
                            }
                        @endphp
                        <h6 class="h6 btn-success">{{$tel_number ?? 'No phone number'}}</h6>
                        <div class="buttons ">
                            <button type="button" class="btn-sm primary " id="resch_btn" onclick="myFunction('{{$event->id}}')">
                                Reschedule
                            </button>
                            <button type="button" class="btn-sm primary ghost " id="delete_btn" onclick="deleteFunction('{{$event->id}}')">
                                Cancel
                            </button>
                        </div>
                    </div>

                @endif
                   
            @else
                @if($timePeriod==30)
                    <div class="card-container-mini" style="display:inline-block;">
                        <span class="pro">Time: {{$minDate}} TO {{$endTime}}</span>
                        <img class="round" src="/computer-icons-portable-network-graphics-user-profile-avatar-png-favpng-L1ihcbxsHbnBKBvjjfBMFGbb7.jpg" alt="user" />
                        <h6 class="h6">{{$event->name}}</h6>
                        <h6 class="h6">{{$event->location}}</h6>
                        @php 
                            $output = $event->name;
                            preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                            if($matches){
                                $tel_number=$matches[0];
                            }
                        @endphp
                        <h6 class="h6 btn-success">{{$tel_number ?? 'No phone number'}}</h6>
                        <div class="buttons ">
                            <button type="button" class="btn-sm primary " id="resch_btn" onclick="myFunction('{{$event->id}}')">
                                Reschedule
                            </button>
                            <button type="button" class="btn-sm primary ghost " id="delete_btn" onclick="deleteFunction('{{$event->id}}')">
                                Cancel
                            </button>
                        </div>
                    </div>
                @else
                    <div class="card-container" style="display:inline-block;">
                        <span class="pro">Time: {{$minDate}} TO {{$endTime}}</span>
                        <img class="round" src="/computer-icons-portable-network-graphics-user-profile-avatar-png-favpng-L1ihcbxsHbnBKBvjjfBMFGbb7.jpg" alt="user" />
                        <h3 class="h6">{{$event->name}}</h6>
                        <h6 class="h6">{{$event->location}}</h6>
                        @php 
                            $output = $event->name;
                            preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                            if($matches){
                                $tel_number=$matches[0];
                            }
                        @endphp
                        <h6 class="h6 btn-success">{{$tel_number ?? 'No phone number'}}</h6>
                        <div class="buttons ">
                            <button type="button" class="btn-sm primary " id="resch_btn" onclick="myFunction('{{$event->id}}')">
                                Reschedule
                            </button>
                            <button type="button" class="btn-sm primary ghost " id="delete_btn" onclick="deleteFunction('{{$event->id}}')">
                                Cancel
                            </button>
                        </div>
                    </div>
                @endif

            @endif

            <!-- @endif -->

            <!-- <H1>{{$event->name}}</H1>
            <H2>{{$event->startDateTime}}</H1>
            <H3>{{$event->location}}</H1> -->
       @endforeach
    </div>
       
<br><br><br>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="/">Tony</a>
		</p>
</footer>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Reschedule Appointment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('bookings.update_cal')}}" method="post">
      @csrf
        <div class="modal-body">
          <div class="form-group">
        <input type="hidden" name="event_id" id="event_name" class="form-control"><br>
          <label for="meeting_line">Change a time for your appointment:</label>
             <br>
             <div class="row">
                <input type="date" name="meeting_date" id="" class="form-control col-6" style="margin:1%;">
                <input type="time" name="meeting_time" id="" class="form-control col-4" style="margin:1%;">
             </div>
            <br><br>
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<Script>
//     $('body').on('click', 'resch_btn', function () {
//       var event_id = $(this).data('name');
//       $.get("{{ route('bookings.index') }}" +'/' + dept_id +'/edit', function (data) {
//           $('#myModal').modal('show');
//           $('#event_name').val(data.name);
//       })
//    });


   function myFunction(a){
        var event_id = a;
        $('#myModal').modal('show');
        $('#event_name').val(event_id);
   }

   function deleteFunction(a){
     
       var event_id = a;
      var remove_save_status=confirm("Are You sure want to cancel this event !");
      
      if(remove_save_status==true){
        $.ajax({
            url: '/bookings/'+event_id,
            type: 'DELETE',
            dataType: 'JSON',
            data:{
                'id': event_id,
                '_token': '{{ csrf_token() }}',
            },
            success:function (data) {
                location.reload();
            },
            error: function (xhr) {
                console.log(xhr.responseText);
            }
        });
        }
   }
</Script>

<script>
// Open close dropdown on click
$("li.dropdown").click(function () {
	if ($(this).hasClass("open")) {
		$(this).find(".dropdown-menu").slideUp("fast");
		$(this).removeClass("open");
	} else {
		$(this).find(".dropdown-menu").slideDown("fast");
		$(this).toggleClass("open");
	}
});

// Close dropdown on mouseleave
$("li.dropdown").mouseleave(function () {
	$(this).find(".dropdown-menu").slideUp("fast");
	$(this).removeClass("open");
});

// Navbar toggle
$(".navbar-toggle").click(function () {
	$(".navbar-collapse").toggleClass("collapse").slideToggle("fast");
});

// Navbar colors
$("#nav-colors > .btn").click(function () {
	if ($(this).is("#pink")) {
		$(".navbar").css("background", "linear-gradient(to right, #ff5858, #f857a6)");
		$(".dropdown-menu").css("background", "#ff5858");
	} else if ($(this).is("#red")) {
		$(".navbar").css("background", "linear-gradient(to right, #d31027, #ea384d)");
		$(".dropdown-menu").css("background", "#d31027");
	} else if ($(this).is("#purple")) {
		$(".navbar").css("background", "linear-gradient(to right, #41295a, #2f0743)");
		$(".dropdown-menu").css("background", "#41295a");
	} else if ($(this).is("#blue")) {
		$(".navbar").css("background", "linear-gradient(to right, #396afc, #2948ff)");
		$(".dropdown-menu").css("background", "#396afc");
	} else if ($(this).is("#green")) {
		$(".navbar").css("background", "linear-gradient(to right, #add100, #7b920a)");
		$(".dropdown-menu").css("background", "#add100");
	} else if ($(this).is("#yellow")) {
		$(".navbar").css("background", "linear-gradient(to right, #f7971e, #ffd200)");
		$(".dropdown-menu").css("background", "#f7971e");
	} else if ($(this).is("#orange")) {
		$(".navbar").css("background", "linear-gradient(to right, #e43a15, #e65245)");
		$(".dropdown-menu").css("background", "#e43a15");
	}
});

// Font colors
$("#font-colors > .btn").click(function () {
	if ($(this).is("#white")) {
		$(".navbar .fa, .link, a").css("color", "white");
		$(".icon-bar").css("background", "white");
	} else if ($(this).is("#black")) {
		$(".navbar .fa, .link, a").css("color", "black");
		$(".icon-bar").css("background", "black");
	}
});

// edges
$("#edges > .btn").click(function () {
	if ($(this).is("#rounded")) {
		$(".navbar, .form-control").css("border-radius", "8px");
		if ($(window).width() > 768) {
			$(".dropdown-menu").css({
				"border-bottom-right-radius": "8px",
				"border-bottom-left-radius": "8px"
			});
		}
	} else if ($(this).is("#square")) {
		$(".navbar, .form-control").css("border-radius", "0");
		$(".dropdown-menu").css({
			"border-bottom-right-radius": "0",
			"border-bottom-left-radius": "0"
		});
	}
});

</script>
</body>

</html>
