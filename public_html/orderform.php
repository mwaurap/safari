<?php

function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
//$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".getRealIpAddr());

$xml = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=".getRealIpAddr());
echo $xml->geoplugin_countryName ;


echo "<pre>";
foreach ($xml as $key => $value)
{
    echo $key , "= " , $value ,  " \n" ;
}
echo "</pre>";


$orderdata = [
	'baseprice' => 10,
	'main_domain' => 'http://writersbay.com/',
	'website_domain' => 'http://order.com/',
	'client_id' => 2,
	'client_secret' => 'LKmP3qfpNarqWXJWkvu9QZ5Ia70KBtwoLr1gRBSv',
	'doctype' => 
        [
		    [
				'value' => 'Admission essay',
				'lable' => 'Admission essay'
			],[
				'value' => 'Analytical essay',
				'lable' => 'Analytical essay'
			],[
				'value' => 'Annotated bibliography',
				'lable' => 'Annotated bibliography'
			],[
				'value' => 'Argumentative essay',
				'lable' => 'Argumentative essay'
			],[
				'value' => 'Article review',
				'lable' => 'Article review'
			],[
				'value' => 'Assessment',
				'lable' => 'Assessment'
			],
			[
				'value' => 'Biographies',
				'lable' => 'Biographies'
			],
			[
				'value' => 'Book review',
				'lable' => 'Book review'
			],
			[
				'value' => 'Business plan',
				'lable' => 'Business plan'
			],
			[
				'value' => 'Capstone project',
				'lable' => 'Capstone project'
			],
			[
				'value' => 'Other',
				'lable' => 'Other'
		    ]
		],
	'subject' => 
	        [
			    [
					'value' => 'Accounting',
					'lable' => 'Accounting'
				],
				[
					'value' => 'Anthropology',
					'lable' => 'Anthropology'
				],
				[
					'value' => 'Architecture',
					'lable' => 'Architecture'
				],
				[
					'value' => 'Art',
					'lable' => 'Art'
				],
				[
					'value' => 'Astronomy',
					'lable' => 'Astronomy'
				],
				[
					'value' => 'Aviation',
					'lable' => 'Aviation'
				],
				[
					'value' => 'Biology',
					'lable' => 'Biology'
				],
				[
					'value' => 'Business',
					'lable' => 'Business'
				],
				[
					'value' => 'Chemistry',
					'lable' => 'Chemistry'
				],
				[
					'value' => 'Classic English Literature',
					'lable' => 'Classic English Literature'
				],
				[
					'value' => 'Computer science',
					'lable' => 'Computer science'
				],
				[
					'value' => 'Criminal lawCulture',
					'lable' => 'Criminal lawCulture'
				],
				[
					'value' => 'Culture',
					'lable' => 'Culture'
				],
				[
					'value' => 'Ecology',
					'lable' => 'Ecology'
				],
				[
					'value' => 'Economics',
					'lable' => 'Economics'
				],
				[
					'value' => 'Education',
					'lable' => 'Education'
				],
				[
					'value' => 'Engineering',
					'lable' => 'Engineering'
				],
				[
					'value' => 'English',
					'lable' => 'English'
				]
			],
	'urgency' => 0.02,
	'academic_level' => 
	        [

			    [
					'value' => 1,
					'lable' => 'High school'
				],
				[
					'value' => 1.2,
					'lable' => 'College'
				],
				[
					'value' => 1.4,
					'lable' => 'Undergraduate (yrs. 1-2)'
				],
				[
					'value' => 1.6,
					'lable' => 'Undergraduate (yrs. 3-4)'
				],
				[
					'value' => 1.8,
					'lable' => 'Master\'s'
				],
				[
					'value' => 2.3,
					'lable' => 'PHD'
				],
				[
					'value' => '5',
					'lable' => 'Admission'
				]
			],
		'preferredwriter' => [
			[
				'value' => 5.1,
				'lable' => 'Top writer'
			],
			[
				'value' => 4.25,
				'lable' => 'Advanced'
			],
			[
				'value' => 0.1, //Do not change this
				'lable' => 'Previous'
			],
			[
				'value' => 0.01,
				'lable' => 'Regular'
			]
		],
		'powerpoint' => [
			'enabled' => true,
			'divideamountby' => 2,
			'lable' => 'PowerPoint slides (1/2 page fee)'
		],
		'plagiarismreport' => [
			'enabled' => true,
			'lable' => 'Plagiarism report',
			'addamount' => 5.1
		],
		'abstractpage' => [
			'enabled' => true,
			'lable' => 'Abstract page (1 page fee)',
			'addamount' => 9.99
		],
		'vipsupport' => [
			'enabled' => true,
			'lable' => 'VIP support',
			'addamount' => 14.99
		],
		'myip' => strtolower($xml->geoplugin_countryCode)

];

//echo $orderdata['baseprice'];

//echo ip_info($ip = '41.90.146.150', $purpose = "location", $deep_detect = TRUE);

?>