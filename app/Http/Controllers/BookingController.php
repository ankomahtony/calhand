<?php

namespace App\Http\Controllers;

use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;


use Zenoph\Notify\Enums\AuthModel;
use Zenoph\Notify\Enums\TextMessageType;
use Zenoph\Notify\Request\SMSRequest;
use Zenoph\Notify\Request\AuthRequest;
use Zenoph\Notify\Compose\SMSComposer;
use Zenoph\Notify\Response\MessageResponse;
use Zenoph\Notify\Request\Request as SRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_details = Event::get();
        $now = Carbon::now();
        $now->setTime(0,0);
        foreach($event_details as $event_det){
            $minDate = $event_det->startDateTime->diffInMinutes();
            $eventDes = $event_det->description;
        
            if($minDate==1440){
                $phone_number = $event_det->location;
                if(!$phone_number){
                    $output = $event_det->name;
                    preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                    if($matches){
                        $phone_number=$matches[0];
                    }
                }
                
                $this->sendMessage("Hello,a reminder that you have an appointment with Dr. Marbell Tomorrow (".$event_det->startDateTime->format('D M j, Y, g:i a').") You can whatsapp. https://wa.me/message/LRBNMX5HPDIFI1 or call 0247241447 for any information. Thank you.",$phone_number);
            }
            $phone_number = $event_det->location;
            if(!$phone_number){
                $output = $event_det->name;
                preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
                if($matches){
                    $phone_number=$matches[0];
                    // dd(var_dump($phone_number));
                }
            }
            if($eventDes=='' and $minDate > 1440 and $phone_number != ""){

                    $event_det->description = "Message Sent";
                    $event_det->save();
                    $this->sendMessage("Hello, your appointment with Dr. Marbell has been booked successfully on ".$event_det->startDateTime->format('D M j, Y, g:i a')." to ".$event_det->endDateTime->format('g:i a')." You can whatsapp https://wa.me/message/LRBNMX5HPDIFI1 or call 0247241447 for any information. Thank you for working with us.",$phone_number);
                    
            }
           
        }
    
        return view('welcome',['event_details'=>$event_details,'now'=>$now]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('booking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startTime = Carbon::parse($request->input('meeting_date').' '.$request->input('meeting_time'),'GMT');
        $endTime = (clone $startTime)->addHour();
        Event::create([
            'name'=>$request->input('name'),
            'startDateTime'=> $startTime,
            'endDateTime'=>$endTime,
            'description'=>"Message Sent",
            'location'=>$request->input('location')
        ]);
        $this->sendMessage("Hello, your appointment with Dr. Marbell has been booked successfully on ".$startTime->format('D M j, Y, g:i a')." You can whatsapp https://wa.me/message/LRBNMX5HPDIFI1 or call 0247241447 for any information. Thank you for working with us.",$request->input('location'));
        return redirect('/bookings')->withMessage('You Have Booked'.$request->input('name').' Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event_selected = Event::find($id);
        return response()->json($event_selected);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    public function update_cal(Request $request)
    {
        $event_to_update = Event::find($request->event_id);
        $startTime = Carbon::parse($request->input('meeting_date').' '.$request->input('meeting_time'),'GMT');
        $endTime = (clone $startTime)->addHour();
        $event_to_update->startDateTime = $startTime;
        $event_to_update->endDateTime = $endTime;
        $event_to_update->save();

        $phone_number = $event_to_update->location;

        if(!$phone_number){
            $output = $event_to_update->name;
            preg_match('/\b[0][0-9]{9}\b/',$output,$matches); 
            if($matches){
                $phone_number=$matches[0];
            }
        }
        $this->sendMessage("Hello, your appointment with Dr. Marbell has been rescheduled to ".$startTime->format('D M j, Y, g:i a')." You can whatsapp https://wa.me/message/LRBNMX5HPDIFI1 or call 0247241447 for any information. Thank you.",$phone_number);
        return redirect()->back()->withMessage('Appointment Rescheduled Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event_to_delete = Event::find($id);
        $event_to_delete->delete();
        return redirect()->back()->withMessage('Appointment Deleted Successfully');
    }
    protected function sendMessage($message,$destination)
    {
        $sr = new SMSRequest();
        // set Host
        SRequest::setHost("smsonlinegh.com");
  
    
        $sr->setAuthModel(AuthModel::API_KEY);
        $sr->setAuthApiKey("56ec5995eee45f4737971c99f28482ba9d5890d32897f3122025c5ab361143af");
    
        $sr->setMessage($message);
        $sr->setSender("M.Pediatric"); 
        $sr->setMessageType(TextMessageType::TEXT);
        $sr->addDestination($destination);
        
        // submit the message
        $mResp = $sr->submit();

    }
}
