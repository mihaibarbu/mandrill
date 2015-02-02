<?php
require 'vendor/autoload.php';

$mandrill = new Mandrill('nnjqBTb8BBM5-q8A74PHEA');
    $message = array(
        'text' => 'Body

You know how important it is to meet the right people at the right time, and how hard it is to attend the right event and not spend precious time listening to boring presentations and networking with the wrong people.

When it comes to tech start-ups, San Francisco is the best place to be; to meet smart, like-minded people, and if you have the chance to be in San Fran in March, then you can meet the creme de la creme from the tech start-ups world.

We are happy to announce that we have partnered with Launch festival, probably the best event for start-ups in the world, hosted between March 2-3 this year in San Fran, and we can offer 50 invitations, for free, for our beloved customers.


Here is the link where you can find your invitation:

http://goo.gl/JiodaE





Remember there are only 50 invitations, so first in, first served. Hurry up.

Hope to see you at Launch this year!',
        'subject' => 'Invitation to Launch in San Fran',
        'from_email' => 'vlad@startupkit.io',
        'from_name' => 'Vlad Stan',
        'to' => array(
            array(
                //'email' => $_POST['email'],
                'email' => 'xwave21@gmail.com',
                'type' => 'to'
            )
        ),
    );
    $result = $mandrill->messages->send($message);
    print_r($result);
