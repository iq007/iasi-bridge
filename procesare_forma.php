<?php
    /**
 * Created by PhpStorm.
 * User: stefan
 * Date: 10/03/15
 * Time: 19:31
 */
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    require_once('ext/sendgrid-php/sendgrid-php.php');
    require_once('ext/db/db.php');

    $api_user   =  getenv("SENDGRIDUSER") ? getenv("SENDGRIDUSER") : 'test';
    $api_key =  getenv("SENDGRIDAPIKEY") ? getenv("SENDGRIDAPIKEY") : 'test';

    $sendgrid = new SendGrid($api_user, $api_key, array('turn_off_ssl_verification'=>true));
    $email    = new SendGrid\Email();


    $myemail = "istefan81@gmail.com";
    $subject = "Memorial Emil Alexandrescu -";

    if($_GET['action'] == 'cazare') {

        $subject .= "Rezervare cazare";

        $nume = strip_tags($_POST['name']) ? strip_tags($_POST['name']) : "necunoscut";
        $fromemail = strip_tags($_POST['email']) ? strip_tags($_POST['email']) : "necunoscut@necunoscut.ro";
        $telefon = strip_tags($_POST['telefon']) ? strip_tags($_POST['telefon']) : "necunoscut";
        $start = strip_tags($_POST['start']) ? strip_tags($_POST['start']) : "01/01/2015";
        $stop = strip_tags($_POST['stop']) ? strip_tags($_POST['stop']) : "01/01/2015";
        $optiunecazare = isset($_POST['optiunecazare']) ? strip_tags($_POST['optiunecazare']) : 0;


        $datas = $database->select("optiunicazare", "*", ["ID[=]" => $optiunecazare]);
        foreach ($datas as $data) {
            $descriereCazare = $data['Hotel'] . " - " . $data['Camera'];
        }

        $mailbody = "Nume: " . $nume . "\n" .
            "E-mail: " . $fromemail . "\n" .
            "Telefon: " . $telefon . "\n" .
            "Optiune cazare: " . $descriereCazare . "\n" .
            "Start: " . $start . "\n" .
            "Stop:" . $stop;

        $last_id = $database->insert("cazari",
            [
                "Nume" => $nume,
                "Telefon" => $telefon,
                "Email" => $fromemail,
                "OptiuneID" => $optiunecazare,
                "Start" => date("Y-m-d", strtotime($start)),
                "Stop" => date("Y-m-d", strtotime($stop))
            ]);
    }
    elseif($_GET['action'] == 'perechi'){
        $subject .= "Inscriere pereche";

        $jucator1 = strip_tags($_POST['jucator1']) ? strip_tags($_POST['jucator1']) : "necunoscut";
        $jucator2 = strip_tags($_POST['jucator2']) ? strip_tags($_POST['jucator2']) : "necunoscut";
        $fromemail = strip_tags($_POST['email']) ? strip_tags($_POST['email']) : "necunoscut@necunoscut.ro";


        $mailbody = $jucator1 . " - " . $jucator2 .
            "\nE-mail: " . $fromemail . "\n";

        $jucator1ID = $database->insert("jucator",
            [
                "Nume" => $jucator1,
                "Email" => $fromemail
            ]);

        $jucator2ID = $database->insert("jucator",
            [
                "Nume" => $jucator2,
                "Email" => $fromemail
            ]);

        $last_id = $database->insert("pereche",
            [
                "IDJucator1" => $jucator1ID,
                "IDJucator2" => $jucator2ID
            ]);

    }
    elseif($_GET['action'] == 'echipe'){
        $subject .= "Inscriere echipa";

        $jucator1 = strip_tags($_POST['jucator1']) ? strip_tags($_POST['jucator1']) : "necunoscut";
        $jucator2 = strip_tags($_POST['jucator2']) ? strip_tags($_POST['jucator2']) : "necunoscut";
        $jucator3 = strip_tags($_POST['jucator3']) ? strip_tags($_POST['jucator3']) : "necunoscut";
        $jucator4 = strip_tags($_POST['jucator4']) ? strip_tags($_POST['jucator4']) : "necunoscut";
        $fromemail = strip_tags($_POST['email']) ? strip_tags($_POST['email']) : "necunoscut@necunoscut.ro";


        $mailbody = $jucator1 . " - " . $jucator2 . " - " . $jucator3 . " - " . $jucator4 .
            "\nE-mail: " . $fromemail . "\n";


        $jucator1ID = $database->insert("jucator",
            [
                "Nume" => $jucator1,
                "Email" => $fromemail
            ]);

        $jucator2ID = $database->insert("jucator",
            [
                "Nume" => $jucator2,
                "Email" => $fromemail
            ]);

        $jucator3ID = $database->insert("jucator",
            [
                "Nume" => $jucator3,
                "Email" => $fromemail
            ]);

        $jucator4ID = $database->insert("jucator",
            [
                "Nume" => $jucator4,
                "Email" => $fromemail
            ]);

        $last_id = $database->insert("echipa",
            [
                "IDJucator1" => $jucator1ID,
                "IDJucator2" => $jucator2ID,
                "IDJucator3" => $jucator3ID,
                "IDJucator4" => $jucator4ID,
            ]);

    }


    if($last_id == 0){
        echo "<div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Rezervarea nu s-a putut efectua. Va rugam incercati mai tarziu.
        ". var_dump($database->error()) ."</div>";
    }
    else {

        $email->addTo($myemail)
            ->setFrom($api_user)
            ->setSubject($subject)
            ->setHtml($mailbody

            );

        $sendgrid->send($email);

        echo "<div class=\"alert alert-success alert-dismissible\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        Inregistrarea s-a efectuat cu succes. </div>";
    }




