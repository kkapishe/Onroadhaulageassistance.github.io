<div class="side_dental">
		<script language="javascript" type="text/javascript">
			/* Visit http://www.yaldex.com/ for full source code
			and get more free JavaScript, CSS and DHTML scripts! */
			<!-- Begin
			var timerID = null;
			var timerRunning = false;
			function stopclock (){
			if(timerRunning)
			clearTimeout(timerID);
			timerRunning = false;
			}
			function showtime () {
			var now = new Date();
			var hours = now.getHours();
			var minutes = now.getMinutes();
			var seconds = now.getSeconds()
			var timeValue = "" + ((hours >12) ? hours -12 :hours)
			if (timeValue == "0") timeValue = 12;
			timeValue += ((minutes < 10) ? ":0" : ":") + minutes
			timeValue += ((seconds < 10) ? ":0" : ":") + seconds
			timeValue += (hours >= 12) ? " P.M." : " A.M."
			document.clock.face.value = timeValue;
			timerID = setTimeout("showtime()",1000);
			timerRunning = true;
			}
			function startclock() {
			stopclock();
			showtime();
			}
			window.onload=startclock;
			// End -->
		</SCRIPT>								      
<p>
		<form name="clock">
		Time is:&nbsp;<input type="submit" class="trans" name="face" value="">
			</form>
</p>	

							  <div class="alert alert-info">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date(' d/m/Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
						
								
												
										</div>
									</div>
								</div>
								<ul class="nav nav-tabs nav-stacked">
									<li class="active">
										<a href="oral_lesson.php"><i class="icon-home icon-large"></i>&nbsp;Home<i class="icon-arrow-right icon-large"></i></a>
									</li>
							
									<li><a href="safety.php"><i class="icon-list icon-large"></i>&nbsp;Vehicle Safety<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="good.php"><i class="icon-list	icon-large"></i>&nbsp;Good Driving Practice<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="signs.php"><i class="icon-list icon-large"></i>&nbsp;Traffic Signs And Road Markings<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="speed_limit.php"><i class="icon-list icon-large"></i>&nbsp;Speed Limits<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="round_about.php"><i class="icon-list icon-large"></i>&nbsp;Junctions And RoundAbout<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="parking.php"><i class="icon-list icon-large"></i>&nbsp;Parking<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="good_driving.php"><i class="icon-list icon-large"></i>&nbsp;Factors Affecting Good Driving<i class="icon-arrow-right icon-large"></i></a></li>
									<li><a href="accident.php"><i class="icon-medkit icon-large"></i>&nbsp;Correct behaviour at the scene of an accident<i class="icon-arrow-right icon-large"></i></a></li>
								</ul>
							</div>