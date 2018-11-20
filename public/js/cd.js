/*
Get all the elements with the attribute data-action = 'countdown' in the document. Using the data- attribute makes it possible to
*have more than one countdown on the same document (or a webpage) counting down at the same time with different time counting down.
*But it is important to note that data-action attribute must be set to 'countdown' and the attribute data-days, data-hours, data-minutes and data-seconds can be set to any 
value. Each of this attribute is optional
*/
var countdown = function(container, param = {days: 0, hours: 0, minutes: 0, seconds: 0, timeRunningNote: "Still counting down", timeUpNote: 'Time is up!',criticalTimesStart: 0, criticalTimesColor : '', criticalTimesNote: 'It\'s almost time!'})
{
	//create some parent elements	
	container.innerHTML += "<div class=\"countdown-content\"></div>";
	container.innerHTML += "<div class=\"countdown-status\"></div>";
	
	//calculate the countdown in seconds
	var secondsToCountdown = (param.days*24*60*60) + (param.hours*60*60) + (param.minutes*60) + param.seconds;

	if(secondsToCountdown > 0){
		countDown(secondsToCountdown);
	}
	else if(secondsToCountdown == 0){
		displayTimer(0);
		status(param.timeUpNote);
		}
		

	 function countDown(sec){
		var counter = setInterval(function(){
			if(sec==0){
				clearInterval(counter);
				status(param.timeUpNote);
			}
			else{
				sec--;
				displayTimer(sec);
					}
				},1000);	
	}
	
	
	function displayTimer(timestamp){
		var dhmsFormat = "<div class=\"countdown-container\"><div class=\"day-countdown\"></div><span class=\"animated  infinite\">d</span></div>";
		dhmsFormat += "<div class=\"countdown-container\"><div class=\"hr-countdown\"></div><span class=\"animated  infinite\">h</span></div>";
		dhmsFormat += "<div class=\"countdown-container\"><div class=\"min-countdown\"></div><span class=\"animated  infinite\">m</span></div>";
		dhmsFormat += "<div class=\"countdown-container\"><div class=\"sec-countdown\"></div><span class=\"animated hinge infinite\">s</span></div>";
		
		container.querySelector('div.countdown-content').innerHTML = dhmsFormat;
		container.querySelector('div.countdown-content').setAttribute('style','display: flex');

		var day = container.querySelector("div.countdown-content .day-countdown");
		var hour = container.querySelector("div.countdown-content .hr-countdown");
		var min = container.querySelector("div.countdown-content .min-countdown");
		var sec = container.querySelector("div.countdown-content .sec-countdown");

		var d = parseInt(timestamp/86400);
		var h = parseInt((timestamp%86400)/3600);
		var m =  parseInt((timestamp%3600)/60);
		var s = timestamp%60;
		
		
		if((timestamp/3600) <= param.criticalTimesStart){
			status(param.criticalTimesNote);
			day.style.color = param.criticalTimesColor;
			hour.style.color = param.criticalTimesColor;
			min.style.color = param.criticalTimesColor;
			sec.style.color = param.criticalTimesColor;
		}else{
			status(param.timeRunningNote);
		}

		if(timestamp==0){
			day.innerHTML = '00';
			hour.innerHTML = '00';
			min.innerHTML = '00';
			sec.innerHTML = '00';
			day.style.color= param.criticalTimesColor;
			hour.style.color = param.criticalTimesColor;
			min.style.color= param.criticalTimesColor;
			sec.style.color = param.criticalTimesColor;
			}
		else{	
			day.innerHTML = (d<10 ? '0'+d : d);
			hour.innerHTML = (h<10 ? '0'+h : h);	
			min.innerHTML = (m<10 ? '0'+m : m);	
			sec.innerHTML = (s<10 ? '0'+s : s);	
				}
			}
			
		function status(stat){
				container.querySelector('.countdown-status').innerHTML = stat;
			}
		}

