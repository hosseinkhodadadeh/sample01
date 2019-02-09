<?php
namespace App\Controllers;

use App\Components\DB;
use App\Components\Response;

class SaveController extends BaseController
{
    /**
     * Save the given data in mysql
     * @return Response
     */
    function execute(): Response
    {
        //we are saving the file in this manner because we are saving the file in our website. NOT secure
        //we have to change the file names in order to make in impossible for attackers to abuse our service
        $cv = $_FILES['cv'];
        $newName = md5(mt_rand(1, 1000000) . microtime() . $_SERVER['REMOTE_ADDR']);
        move_uploaded_file(
            $cv['tmp_name'],
            ROOT . DS . 'App/Files/' . $newName
        );
        //we are preparing data to be inserted into database
        $data = [
            'email' => $_REQUEST['email'],
            'education' => $_REQUEST['education'],
            'experience' => $_REQUEST['experience'],
            'mobile' => $_REQUEST['mobile'],
            'city' => $_REQUEST['city'],
            'state' => $_REQUEST['state'],
            'created_at' => date('Y-m-d H:i:s'),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'filename' =>$newName,
        ];
        //we save our data into database - without any SQL injection
        DB::execute(
            "INSERT INTO `resume` (`id`, `email`, `education`, `experience`, `mobile`, `city`, `state`, `created_at`, `ip`, `filename`) VALUES 
            (NULL, :email, :education, :experience, :mobile, :city, :state, :created_at , :ip, :filename);",
            $data
        );


        $mail = new Response(
            'App/Templates/mail/ours.php',
            $data
        );
        mail(
            'ourmail@domain.com',
            'Resume received',
            $mail->sendResponse()
        );

        $mail = new Response(
            'App/Templates/mail/user.php',
            $data
        );
        mail(
            $data['email'],
            'Resume received',
            $mail->sendResponse()
        );

        //Send the data to user
        return new Response(
            'App/Templates/save/save.php',
            []
        );
    }
}