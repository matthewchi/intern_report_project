<!DOCTYPE html>
<html>
<head>
    <title>Internship Report Form</title>

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
            <form action="/action_page.php">

                <div id="form1">
                    <h3>1/2</h3>

                    <br>

                    <h3>Company Information</h3>

                    <br>

                    <label> Name of Company <br>
                        <input class="internship_report" type="text" name="company">
                    </label><br>

                    <label>Address of Main Office<br>
                        <input class="internship_report" type="text" name="address"><br/>
                    </label>

                    <br>
                    Type/Sector of CGT Industry - select all that apply
                    <br/>
                    <label><input type="checkbox" name="cgtindustry1" value="animation" style="margin-top:4px;">
                        Animation<br></label>
                    <label><input type="checkbox" name="cgtindustry2" value="construction"> Construction<br></label>
                    <label><input type="checkbox" name="cgtindustry3" value="dataviz"> Data Visualization<br></label>
                    <label><input type="checkbox" name="cgtindustry4" value="game"> Game<br></label>
                    <label><input type="checkbox" name="cgtindustry5" value="ux"> User Experience Design<br></label>
                    <label><input type="checkbox" name="cgtindustry6" value="vpi"> Virtual Product
                        Integration<br></label>
                    <label><input type="checkbox" name="cgtindustry7" value="visefx"> Visual Effects<br></label>
                    <label><input class="internship_report" type="checkbox" name="cgtindustry8" value="web"> Web
                        Programming
                        and Design<br></label>


                    Supervisor

                    <label>Name of Supervisor<br>
                        <input class="internship_report" type="text" name="supervisorname"><br></label>

                    <label>Supervisor email<br>
                        <input class="internship_report" type="email" name="supervisoremail"><br></label>

                    <label>Supervisor phone<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <button type="button" id="next" style="float:right;">Next</button>

                </div>

                <div id="form2" style="display:none;">
                    <h3>2/2</h3>

                    <br>

                    <h3>Job Information</h3>

                    <br>

                    <label>Did you work in an office or on site?

                    <br>

                    <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br>
                    <input class="internship_report" type="radio" name="paid" value="no"> No<br></label>


                    List 5 activities that you regularly performed during your internship.
                    <br/>
                    <br/>
                    <label>Activity 1<br>
                        <input type="text" name="supervisor phone" style="margin-top:4px;"><br></label>
                    <br>
                    Activity 2<br>
                    <label><input type="text" name="supervisor phone" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 3<br>
                        <input type="text" name="supervisor phone" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 4<br>
                        <input type="text" name="supervisor phone" style="margin-top:4px;"><br></label>
                    <br>
                    <label>Activity 5<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Did your supervisor give you relevant work to accomplish - specify!<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Difficulties or problem areas encountered during internship<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Explain how work experience related to your major<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Is there anything you wanted to learn during your internship that you were not able to?<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Has this work experience changed your mind about which sector of CGT you might be most
                        interested in
                        pursuing?<br>
                        <input class="internship_report" type="text" name="supervisor phone"><br></label>

                    <label>Internship provided me with contacts which may lead to future employment<br>
                        <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br>
                        <input class="internship_report" type="radio" name="paid" value="no"> No<br></label>

                    Considering your overall experience - how would you rate this internship?<br>
                    <label><input type="radio" name="paid" value="yes" style="margin-top:4px;"> Very
                        Dissatisfied<br></label>
                    <label><input type="radio" name="paid" value="no"> Dissatisfied<br></label>
                    <label><input type="radio" name="paid" value="yes"> Neutral<br></label>
                    <label><input type="radio" name="paid" value="no"> Satisfied<br></label>
                    <label><input class="internship_report" type="radio" name="paid" value="yes"> Very
                        Satisfied<br></label>
                    <h3>Salary/Hourly Rate</h3>

                    <br>

                    Were you paid?<br>
                    <label><input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br></label>
                    <label><input class="internship_report" type="radio" name="paid" value="no"> No<br></label>

                    If so, how much?<br>
                    <label><input class="internship_report" type="text" name="salary"><br></label>

                    Did you receive a housing stipend?<br>
                    <label><input type="radio" name="stipend" value="yes" style="margin-top:4px;"> Yes<br></label>
                    <label><input class="internship_report" type="radio" name="stipend" value="no"> No<br></label>

                    Did you receive any other financial assistance from the company for your internship? Please select
                    all that apply<br>
                    <label><input type="checkbox" name="assist1" value="perdiem" style="margin-top:4px;"> Per Diem
                        Allowance<br></label>
                    <label><input type="checkbox" name="assist2" value="gas"> Gas Reimbursement<br></label>
                    <label><input type="checkbox" name="assist3" value="vehicle"> Company Vehicle<br></label>
                    <label><input type="checkbox" name="assist4" value="travel"> Paid Airfare or travel to/from
                        internship
                        location<br></label>
                    <label><input class="internship_report" type="checkbox" name="assist5" value="other">
                        Other<br></label>

                    <input type="submit" value="Submit" id="internship-report-submit">
                    <button type="button" id="back">Back</button>

                </div>
            </form>
        </div>

</body>
</html>
