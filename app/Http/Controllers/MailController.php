<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact; // Import the Service model
use App\Models\aqppointment;


class MailController extends Controller
{

    public function send_contact_email($email,$first_name) {
        $data = array('first_name'=>$first_name);
        Mail::send('mails.contact_mail', $data, function($message) use ($email) {
            $message->to($email)->subject
                ('Thanks for Contacting!');
            $message->from(config('mail.from.address'));
        });
    }

    public function send_appointment_email($email,$first_name) {
        $data = array('first_name'=>$first_name);
        Mail::send('mails.appointment_mail', $data, function($message) use ($email) {
            $message->to($email)->subject
                ('Thanks for Contacting!');
            $message->from(config('mail.from.address'));
        });
    }

    // public function send_appointment_email($email, $name, $service, $appointment_time,$appointment_date,$doctor) {

    //     $service=Service::find($service);
    //     $serviceTitle = $service->title;
    //     $doctor=DoctorManagement::find($doctor);
    //     $doctorTitle = $doctor->drname;
    //     $data = [
    //         'name' => $name,
    //         'service' => $serviceTitle,
    //         'appointment_time' => $appointment_time,
    //         'appointment_date' => $appointment_date,
    //         'doctor' => $doctorTitle,

    //     ];
    //     Mail::send('mails.appointment_mail', $data, function($message) use ($email) {
    //         $message->to($email)->subject
    //             ('Appointment details!');
    //         $message->from(config('mail.from.address'));
    //     });
    // }


    // // home page
    // public function send_home_email($email, $name, $phone,$doctor,$appointment_date) {


    //     $doctor=DoctorManagement::find($doctor);
    //     $doctorTitle = $doctor->drname;
    //     $data = [
    //         'name' => $name,
    //         'phone' => $phone,
    //         'doctor' => $doctorTitle,
    //         'appointment_date' => $appointment_date,


    //     ];
    //     Mail::send('mails.appointment_mail', $data, function($message) use ($email) {
    //         $message->to($email)->subject
    //             ('Appointment details!');
    //         $message->from(config('mail.from.address'));
    //     });
    // }


    // public function send_about_email($email, $name, $phone,$doctor,$appointment_date) {


    //     $doctor=DoctorManagement::find($doctor);
    //     $doctorTitle = $doctor->drname;
    //     $data = [
    //         'name' => $name,
    //         'phone' => $phone,
    //         'doctor' => $doctorTitle,
    //         'appointment_date' => $appointment_date,


    //     ];
    //     Mail::send('mails.appointment_mail', $data, function($message) use ($email) {
    //         $message->to($email)->subject
    //             ('Appointment details!');
    //         $message->from(config('mail.from.address'));
    //     });
    // }

    // // test email
    // public function send_email($email,$name) {
    //     $data = array('name'=>$name);
    //     Mail::send('mails.mail', $data, function($message) use ($email) {
    //         $message->to($email)->subject
    //             ('Laravel HTML Testing Mail');
    //         $message->from(config('mail.from.address'));
    //     });
    //     echo "HTML Email Sent. Check your inbox.";
    // }
}
