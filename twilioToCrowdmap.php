<?php
	//This app requires a Twilio account - http://twilio.com
	//once you have a twilio account set up add a number to you account. this will be the number to which messages are sent
	//in you twilio account settings for you new number add the url to THIS php page, hosted somewhere to the Settings for SMS
	//Email lpercifield@gmail.com for questions.
		$name = $_REQUEST['From'];
		$body = $_REQUEST['Body'];
		//CHANGE THIS URL TO THE FRONTLINE URL FROM YOUR CROWDMAP
		//This can be found here: https://[YOURDEPLOYMENT].crowdmap.com/admin/frontlinesms_settings
		//This app requires a Twilio account - http://twilio.com
		$url = "https://[YOURDEPLOYMENT].crowdmap.com/frontlinesms/?key=[YOURKEYHERE]&s=$name&m=$body";
		file_get_contents($url);

	// now greet the sender
	header("content-type: text/xml");
	echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
	<Sms>Thank you for your report. We approve and verify all texts that are posted.</Sms>
</Response>
