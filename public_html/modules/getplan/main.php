<!-- PAGE TITLE -->
<?php    
if(isset($_POST['SubmitButton'])){ //check if form was submitted
  sendtojoy($_POST);
  autoresponse($_POST['email']);
  $message = '<div class="alert alert-success"><strong>Thank you for your inquiry, we will get back to you as soon as possible</strong></div>';
}else{
    $message = '';
}
function sendtojoy($plan){
    $accom = implode(', ', $plan['accomodation']);
    $special = implode(', ', $plan['specialinterests']);
    $to      = 'info@afrikansafaris.com';
    $subject = 'New inquiry from Afrikan safaris';
    $message = '<p>Dear Admin,</p>';
    $message .= '<p>There is a new inquiry from a client</p>';
    $message .= '<p><u>Plan information</u></p>';
    $message .= '<br>';
    $message .= '<p>Trip duration in days: '.$plan['durationindays'].'</p>';
    $message .= '<p>Accomodation: '.$accom.'</p>';
    $message .= '<p>Special interests: '.$special.'</p>';
    $message .= '<p>Number of adults: '.$plan['noadults'].'</p>';
    $message .= '<p>Number of kids below 12 years: '.$plan['kidsbelow12'].'</p>';
    $message .= '<p>Age of kids below 12 years: '.$plan['ageofkidsbelow12'].'</p>';
    $message .= '<p>Budget perperson per day : '.$plan['budgetperperson'].'</p>';
    $message .= '<br>';
    $message .= '<p><u>Customer information</u></p>';
    $message .= '<p>Name: '.$plan['name'].'</p>';
    $message .= '<p>Email address: '.$plan['email'].'</p>';
    $message .= '<p>Phone number: '.$plan['phone'].'</p>';
    $message .= '<p>Country: '.$plan['country'].'</p>';
    $headers = 'From: info@afrikansafaris.com' . "\r\n" .
        'Reply-To: info@afrikansafaris.com' . "\r\n" .
        'Content-Type: text/html; charset=UTF-8' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    /* $fp = fopen('lidn.txt', 'w');
    fwrite($fp, $message);
    fclose($fp); */

    mail($to, $subject, $message, $headers);
}

function autoresponse($email){
    $to      = $email;
    $subject = 'Thank you for your inquiry';
    $message = '<p>Dear Customer,</p>';
    $message .= '<p>Thank you for choosing Afrikan Safaris to be your travel partner. We will plan the most amazing safari for you. The safari will be customized to your interests and budget.</p>';
    $message .= '<p>We promise to give you an experience that you will never forget. We will send you your travel itinerary soon. Do not hesitate to give us your opinion, suggestions, and/ or ask questions.</p>';
    $message .= '<p>We are glad to be of service to you. Thank You.</p>';
    $message .= '<br>';
    $message .= '<p>Kind Regards,</p>';
    $message .= '<p>Joy Wangui.</p>';
    $message .= '<p>Afrikan Safaris Travel Organizer.</p>';
    $headers = 'From: info@afrikansafaris.com' . "\r\n" .
        'Reply-To: info@afrikansafaris.com' . "\r\n" .
        'Content-Type: text/html; charset=UTF-8' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);    
}

?>
<!-- PAGE CONTENT -->
<section class="mainContentSection">
    <div style="padding-top: 50px;" class="container">
        <div class="row">
            <div class="col-sm-2 col-xs-12"></div>
            <div  class="col-sm-8 col-xs-12">
                <div class="sectionTitle">
                <?php  echo $message; ?>                
                <h1><span class="lightBg">Get a plan</span></h1>
                <p>Fill the form below to help us customize a safari for you</p>
                </div>
                <div class="bookingForm">
                    <form method="POST" role="form" class="form" action="<?php $_SERVER['PHP_SELF']; ?>">
                        <div class="row">
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Trip duration in days</label>
                                <input type="text" class="form-control col-md-6" required name="durationindays">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Accomodation (Pick more than one)</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="accomodation[]" value="Budget">Budget</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="accomodation[]" value="Comfort">Comfort</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="accomodation[]" value="Luxury">Luxury</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="accomodation[]" value="Camping">Camping</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Special interests (Pick more than one)</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialinterests[]" value="Adventure">Adventure</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialinterests[]" value="Culture">Culture</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialinterests[]" value="Luxury">Mountain climbing &amp; Hiking</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialinterests[]" value="Camping">Wildlife safari</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="specialinterests[]" value="Camping">Beach safari</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Number of adults</label>
                                <input type="text" name="noadults" class="form-control col-md-6" id="" required>
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Number of kids below 12 years</label>
                                <input type="text" name="kidsbelow12" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Age of kids below 12 years</label>
                                <input type="text" name="ageofkidsbelow12" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Budget perperson per day(starting $250)</label>
                                <input type="text" name="budgetperperson" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Your name</label>
                                <input type="text" name="name" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Your email</label>
                                <input type="email" name="email" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Your phone number</label>
                                <input type="text" name="phone" class="form-control col-md-6" id="">
                            </div>
                            <div class="form-group col-sm-12 col-xs-12">
                                <label for="">Country</label>
                                <input type="text" name="country" class="form-control col-md-6" id="">
                            </div>
                            <div class="col-xs-12">
                                <div class="buttonArea galleryBtnArea">
                                    <ul class="list-inline">
                                        <li>
                                            <button type="submit" name="SubmitButton" class="btn btn-block buttonTransparent">Get plan</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-2 col-xs-12"></div>
        </div>
    </div>
</section>