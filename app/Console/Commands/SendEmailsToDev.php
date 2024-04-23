<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Mail;
use App\Mail\MailSendToDev;

use App\Models\User;

class SendEmailsToDev extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendMailToDev:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'it will run on:users based on status 0 and send email to developer';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $sendMailToDev = User::where('mail_status', 0)
                            ->orderBy('id', 'desc') 
                            ->take(10)
                            ->get();

        if ( $sendMailToDev ) {
            foreach ($sendMailToDev as $data) {
                
                $details = [
                    'email' => $data->email,
                    'subject' => 'bdapps Android Academy',
                    'name' => $data->full_name,
                ];

                try {
                    $sendMail = new MailSendToDev($details);
                    $res = Mail::to($details['email'])->send($sendMail);

                    $data->mail_status = 1;
                    $data->mail_response = $res;
                } catch ( \Exception $e ) {
                    $data->mail_status = -1;
                    $data->mail_response = $e->getMessage();
                }
                $data->save();

            }
        }
        return;
    }
}
