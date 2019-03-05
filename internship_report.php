<?php

include("includes/server.php");

//if user is not logged in, they cannot access this page
if (empty($_SESSION["username"])) {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Internship Report Form</title>

		<link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Archivo:400,700' rel='stylesheet'>

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="js/script.js"></script>

</head>
<body style="background-color:#efefef;">

<!-- top nav bar -->
<div class="top-nav">
    <?php include("includes/top-nav.php"); ?>
</div>

<!-- max width 760px -->
<div class="container">

    <div class="internship">
        <h1>Internship Report</h1>

        <div class="internship-report">
            <form method="post" action="send_supervisor_email.php" enctype="multipart/form-data">
                <div id="form1">
                    <h3>1/4</h3>

                    <br>

                    <h3>Company Information</h3>

                    <br>

                    <label> Name of Company <br>
                        <input class="internship_report" type="text" name="intern1_1_company">
                    </label><br>

                    <label>Address of Main Office<br>
                        <input class="internship_report" type="text" name="intern1_2_address"><br/>
                    </label>

                    <br>
                    Type/Sector of CGT Industry - select all that apply
                    <br/>
                    <label><input type="checkbox" name="intern1_3_cgt" value="animation" style="margin-top:4px;">Animation<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="construction"> Construction<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="dataviz"> Data Visualization<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="game"> Game<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="ux"> User Experience Design<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="vpi"> Virtual Product
                        Integration<br></label>
                    <label><input type="checkbox" name="intern1_3_cgt" value="visefx"> Visual Effects<br></label>
                    <label><input class="internship_report" type="checkbox" name="intern1_3_cgt" value="web"> Web
                        Programming
                        and Design<br></label>


                    Supervisor<br/>

                    <label>Name of Supervisor<br>
                        <input class="internship_report" type="text" name="intern1_4_supervisor_name"><br></label>

                    <label>Supervisor email<br>
                        <input class="internship_report" type="email" name="intern1_5_supervisor_email"><br></label>

                    <label>Supervisor phone<br>
                        <input class="internship_report" type="text" name="intern1_6_supervisor_phone"><br></label>

                    <label>Select file to upload:<br />
                        <input class="internship_report" type="file" name="fileToUpload" id="fileToUpload"><br /></label>

                    <button type="button" id="next1" style="float:right;">Next</button>

                    <br />
                    <br />
                    <br />

                </div>

                <div id="form2" style="display:none;">
                    <h3>2/4</h3>

                    <br>

                    <h3>Job Information</h3>

                    <br>

                    Start Date<br>
                    <label><input class="internship_report" type="date" name="intern2_1_startdate"><br></label>

                    End Date<br>
                    <label><input class="internship_report" type="date" name="intern2_2_enddate"><br></label>

                    Total Hours Worked<br>
                    <label><input class="internship_report" type="text" name="intern2_3_totalhours"><br></label>

                    <label>Did you work in an office or on site?

                        <br>

                        <input type="radio" name="intern2_4_office" value="yes" style="margin-top:4px;"> Yes<br>
                        <input class="internship_report" type="radio" name="intern2_4_office" value="no"> No<br></label>


                    List 5 activities that you regularly performed during your internship.
                    <br/>
                    <br/>
                    <label>Activity 1<br>
                        <input type="text" name="intern2_5_activity_1" style="margin-top:4px;"><br></label>
                    <br>
                    Activity 2<br>
                    <label><input type="text" name="intern2_6_activity_2" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 3<br>
                        <input type="text" name="intern2_7_activity_3" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 4<br>
                        <input type="text" name="intern2_8_activity_4" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 5<br>
                        <input class="internship_report" type="text" name="intern2_9_activity_5"><br></label>

                    <button type="button" id="next2" style="float:right;">Next</button>

                    <button type="button" id="back1">Back</button>


                </div>

                <div id="form3" style="display:none;">
                    <h3>3/4</h3>

                    <br>

                    <h3>Job Information cont.</h3>

                    <br>

                    <label>Did your supervisor give you relevant work to accomplish - specify!<br>
                        <input class="internship_report" type="text" name="intern2_10_relevant_work"><br></label>

                    <label>Difficulties or problem areas encountered during internship<br>
                        <input class="internship_report" type="text" name="intern2_11_problems"><br></label>

                    <label>Explain how work experience related to your major<br>
                        <input class="internship_report" type="text" name="intern2_12_workexperience"><br></label>

                    <label>Is there anything you wanted to learn during your internship that you were not able to?<br>
                        <input class="internship_report" type="text" name="intern2_13_learn"><br></label>

                    <label>Has this work experience changed your mind about which sector of CGT you might be most
                        interested in
                        pursuing?<br>
                        <input class="internship_report" type="text" name="intern2_14_cgt_sector_change"><br></label>

                    <label>Internship provided me with contacts which may lead to future employment<br>
                        <input type="radio" name="intern2_15_future_employment" value="yes" style="margin-top:4px;"> Yes<br>
                        <input class="internship_report" type="radio" name="intern2_15_future_employment" value="no"> No<br></label>

                    Considering your overall experience - how would you rate this internship?<br>
                    <label><input type="radio" name="intern2_16_rate_experience" value="0" style="margin-top:4px;"> Very
                        Dissatisfied<br></label>
                    <label><input type="radio" name="intern2_16_rate_experience" value="1"> Dissatisfied<br></label>
                    <label><input type="radio" name="intern2_16_rate_experience" value="2"> Neutral<br></label>
                    <label><input type="radio" name="intern2_16_rate_experience" value="3"> Satisfied<br></label>
                    <label><input class="internship_report" type="radio" name="intern2_16_rate_experience" value="4">
                        Very
                        Satisfied<br></label>

                    <button type="button" id="next3" style="float:right;">Next</button>

                    <button type="button" id="back2">Back</button>
                </div>

                <div id="form4" style="display:none;">
                    <h3>4/4</h3>

                    <br>

                    <h3>Salary/Hourly Rate</h3>

                    <br>

                    Were you paid?<br>
                    <label><input type="radio" name="intern3_1_paid" value="yes" style="margin-top:4px;">
                        Yes<br></label>
                    <label><input class="internship_report" type="radio" name="intern3_1_paid" value="no">
                        No<br></label>

                    If so, how much?<br>
                    <label><input class="internship_report" type="text" name="intern3_2_salary"><br></label>

                    Did you receive a housing stipend?<br>
                    <label><input type="radio" name="intern3_3_stipend" value="yes" style="margin-top:4px;">
                        Yes<br></label>
                    <label><input class="internship_report" type="radio" name="intern3_3_stipend" value="no">
                        No<br></label>

                    Did you receive any other financial assistance from the company for your internship? Please select
                    all that apply<br>
                    <label><input type="checkbox" name="intern3_4_assist" value="perdiem" style="margin-top:4px;"> Per
                        Diem
                        Allowance<br></label>
                    <label><input type="checkbox" name="intern3_4_assist" value="gas"> Gas Reimbursement<br></label>
                    <label><input type="checkbox" name="intern3_4_assist" value="vehicle"> Company Vehicle<br></label>
                    <label><input type="checkbox" name="intern3_4_assist" value="travel"> Paid Airfare or travel to/from
                        internship
                        location<br></label>
                    <label><input class="internship_report" type="checkbox" name="intern3_4_assist" value="other">
                        Other<br></label>

                    <button type="button" id="back3">Back</button>

                    <input style="float:right;" type="submit" name="intern_report" value="Submit"
                           id="internship-report-submit">

                </div>
            </form>
        </div>

</body>
</html>
