<!DOCTYPE html>
<html>
	<?php include_once "header.php";?>
	
	  	<div id="content">
	  		<div id="accordion">
	  			<h2>iPhone scanner app</h2>
	  			<div class="inner">
	  				An iPhone app which will take a photo of any regular paper and generate a PDF file like a scanner.
	  				<h4>Highlights</h4>
	  				<ol>
	  					<li>Images can either be captured using the camera or picked from the photo gallery using UIImagePickerController.</li>
						<li>The corners of the paper sheet is detected using the Harris corner detection filter, 
							which is adapted from BradLarson&prime;s <a href="https://github.com/BradLarson/GPUImage">GPUImage framework</a>.</li>
						<li>After the corners was found and selected, the CIPerspectiveTransform from iOS&prime;s
							 embedded Core Image Library was used to transform the image to correct the distortion.</li>
						<li>The transformed image was then write to a PDF context in the UIGraphics library.</li>
						<li>The PDF context was finally saved to a PDF file, which is displayed using the UIWebView.</li>
						<li>The PDF file can be sent out via Email by using the iOS&prime;s MFMailComposeViewController service.</li>
	  				</ol>
	  			</div>
	  			<h2>Android stock quotation app</h2>
	  			<div class="inner">
	  				A stock quotation app was designed in Android platform. The app mimics stock app on the iPhone with almost
	  				the same features, including portfolio selection, realtime stock info, detailed company info, real news, 
	  				stock chart, as well as link to Yahoo! Finance.
	  				<ol>
	  					<li>The realtime stock information was drawn from Yahoo Finance using their public API&prime;s.</li>
	  					<li>The http query result will be parsed by ExpatPullParser XML parser</li>
	  					<li>A version with JSON format query return was also implemented. JSONObject is used to parse
	  						the JSON data.</li>
	  					<li>Multi-threading was used for http queries via AsynchTask.</li>
	  					<li>The user can select his/her portfolio using a modal view window.</li>
	  					<li>Real time quote information of every stock in the portfolio will be displayed in a 
	  						scroll view.</li>
	  					<li>Stock chart, detailed stock inforamtion, and latest news are displayed under the scroll view.</li>
	  				</ol>
	  				
	  			</div>
	  			<h2>jQuery Mobile based RSS reader app</h2>
	  			<div class="inner">
	  				
	  			</div>
	  			<h2>Nachos operating system design and synthesis</h2>
	  			<div class="inner">
	  				System software design tasks were implemented on the famous instructing Nachos operating system developed 
	  				by Thomas Anderson. Various aspects of the Nachos operating system archetecture was studied, including 
	  				multi-treading, file, I/O and mem systems. 
	  				<h4>Highlights</h4>
	  				<ol>
	  					<li>The famous producer-comsumer problem and the dining philosophers problem were implemented in the
	  						Nachos system. OS multi-threading mechanisms including locks, semaphores and mutexes were used in 
	  						the design and implementation.</li>
	  					<li>A simple console with basic operators including "ls", "cp", "mv" are implemented through Unix C++ APIs.</li>
	  					<li>Basic memery system protections were implemented using IO exceptions in C++.</li>
	  					<li>Learned the basic rules of Makefile and gmake tools under Unix environment.</li>
	  				</ol>
	  			</div>
				<h2>Raspberry Pi based morning bedtime terminator</h2>
				<div class="inner">
					Everybody loves the warm blanket in the morning and can't stop sleeping longer. You can miss important things
					just because of this. You will never have to worry about this now with the morning bedtime terminator. 
					<h4>Highlights</h4>
					<ol>
						<li>This hobby system was extremely cheap and only took the cheap $35 Raspberry PI, a several dollars pully, a rope, a relay 
							and a electric fan.</li>
						<li>When the set time reached in the morning, the GPIO pins activate the relay and start the electric fan. The
							fan then pulls the pully to hang you blanket up to the ceiling. And you HAVE to get up now without the 
							warm blanket <img width="20px" height="20px" src="img/giggling.gif" /></li>
						<li>The Raspberry Pi host a mini webserver using the Python-based Flask framework. We can set the 
							alarm time through a web browser from a computer or smart phone.</li>
					</ol> 
				</div>
				<h2>Raspberry Pi based door bell system</h2>
				<div class="inner">
					This is another hobby project when I was playing with the Raspberry Pi. The system can be combined with the door
					bell to include web camera and microphone. The implementation and details are listed in the Highlights.
					<h4>Highlights</h4>
					<ol>
						<li>When the door bell pulse signal triggered the Raspberry Pi through GPIO, the web camera will be 
							started to capture video. iHome webcamera was used in the system. The video was captured using
							the Python simpleCV module, which is a taylared version of the python-opencv module. </li>
						<li>The microphone was also incoparate into the system to enable conversation. However, a seperate 
							power amplifier was needed.</li>
					</ol>
				</div>
				<h2>Arduino UNO based iced/hot water maker</h2>
				<div class="inner">
					This is my other hobby project using Arduino UNO to make a iced water maker on desktop. The application
					make use of Peltier device to cool the water. PWM signal from Arduino UNO's GPIO pin was used to control
					the cooling process.
					<h4>Highlights</h4>
					<ol>
						<li>Peltier device based on the thermoelectric effect in semidcondutor was used to cool the water.</li>
						<li>The pulse-width-modulated signal from the GPIO of Arduino UNO was used to control the positive and 
							negative cycle of the Peltier device in order to reach the proper temperature.</li>
						<li>Thermosistor was used to monitor the temperature and feedback to the Arduino UNO to adjust the
							duty cycle of the PWM pulse.</li>
						<li>The target temperature can also be set in the UNO. The system can even be used to heat
							water (e.g. coffee) by switch the polarity of current to the Peltier device. </li>
						<li>All the programing was done using C++ in Arduino UNO through the Wiring library. </li>
					</ol>
				</div>
	  		</div>  <!-- end of accordion -->
	  	</div>  <!-- end of content -->
	  		  		
	<?php include_once "footer.php" ?>

</html>