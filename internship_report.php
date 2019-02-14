<!DOCTYPE html>
<html>
<head>
<title>Internship Report Form</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/script.js"></script>

</head>
<body style="background-color:#efefef;">

<!-- top nav bar -->
<div class="top-nav">
    <?php include("includes/top-nav.php");?>
</div>

<!-- max width 760px -->
<div class="container">

  <div class="internship">
    <h2>Internship Report</h2>

    <div class="internship-report">
        <form action="/action_page.php">

          <div id="form1">

            <fieldset>
              <legend>1/2</legend>

              <fieldset>
                <legend>Company Information</legend>

                Name of Company<br>
                <input class="internship_report" type="text" name="company"><br>

                Address of Main Office<br>
                <input class="internship_report" type="text" name="address"><br />

                Type/Sector of CGT Industry - select all that apply<br>
                <input type="checkbox" name="cgtindustry1" value="animation" style="margin-top:4px;"> Animation<br>
                <input type="checkbox" name="cgtindustry2" value="construction"> Construction<br>
                <input type="checkbox" name="cgtindustry3" value="dataviz"> Data Visualization<br>
                <input type="checkbox" name="cgtindustry4" value="game"> Game<br>
                <input type="checkbox" name="cgtindustry5" value="ux"> User Experience Design<br>
                <input type="checkbox" name="cgtindustry6" value="vpi"> Virtual Product Integration<br>
                <input type="checkbox" name="cgtindustry7" value="visefx"> Visual Effects<br>
                <input class="internship_report" type="checkbox" name="cgtindustry8" value="web"> Web Programming and Design<br>

                <fieldset>
                  <legend>Supervisor</legend>

                  Name of Supervisor<br>
                  <input class="internship_report" type="text" name="supervisorname"><br>

                  Supervisor email<br>
                  <input class="internship_report" type="email" name="supervisoremail"><br>

                  Supervisor phone<br>
                  <input class="internship_report" type="text" name="supervisor phone"><br>

                </fieldset>
              </fieldset>

            <button type="button" id="next" style="float:right;">Next</button>
            </fieldset>

        </div>

          <div id="form2" style="display:none;">

            <fieldset>
              <legend>2/2</legend>

              <fieldset>
                <legend>Job Information</legend>

                Did you work in an office or on site?<br>
                <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br>
                <input class="internship_report" type="radio" name="paid" value="no"> No<br>

                <fieldset>
                  <legend>List 5 activites that you regularly performed during your internship.</legend>
                  Activity 1<br>
                  <input type="text" name="supervisor phone" style="margin-top:4px;"><br>
                  Activity 2<br>
                  <input type="text" name="supervisor phone" style="margin-top:4px;"><br>
                  Activity 3<br>
                  <input type="text" name="supervisor phone" style="margin-top:4px;"><br>
                  Activity 4<br>
                  <input type="text" name="supervisor phone" style="margin-top:4px;"><br>
                  Activity 5<br>
                  <input class="internship_report" type="text" name="supervisor phone"><br>
                </fieldset>

                Did your supervisor give you relevant work to accomplish - specify!<br>
                <input class="internship_report" type="text" name="supervisor phone"><br>

                Difficulties or problem areas encountered during internship<br>
                <input class="internship_report" type="text" name="supervisor phone"><br>

                Explain how work experience related to your major<br>
                <input class="internship_report" type="text" name="supervisor phone"><br>

                Is there anything you wanted to learn during your internship that you were not able to?<br>
                <input class="internship_report" type="text" name="supervisor phone"><br>

                Has this work experience changed your mind about which sector of CGT you might be most interested in pursuing?<br>
                <input class="internship_report" type="text" name="supervisor phone"><br>

                Internship provided me with contacts which may lead to future employment<br>
                <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br>
                <input class="internship_report" type="radio" name="paid" value="no"> No<br>

                Considering your overall experience - how would you rate this internship?<br>
                <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Very Dissatisfied<br>
                <input type="radio" name="paid" value="no"> Dissatisfied<br>
                <input type="radio" name="paid" value="yes"> Neutral<br>
                <input type="radio" name="paid" value="no"> Satisfied<br>
                <input class="internship_report" type="radio" name="paid" value="yes"> Very Satisfied<br>

                <fieldset>
                  <legend>Salary/Hourly Rate</legend>

                  Were you paid?<br>
                  <input type="radio" name="paid" value="yes" style="margin-top:4px;"> Yes<br>
                  <input class="internship_report" type="radio" name="paid" value="no"> No<br>

                  If so, how much?<br>
                  <input class="internship_report" type="text" name="salary"><br>

                  Did you receive a housing stipend?<br>
                  <input type="radio" name="stipend" value="yes" style="margin-top:4px;"> Yes<br>
                  <input class="internship_report" type="radio" name="stipend" value="no"> No<br>

                  Did you receive any other financial assistance from the company for your internship? Please select all that apply<br>
                  <input type="checkbox" name="assist1" value="perdiem" style="margin-top:4px;"> Per Diem Allowance<br>
                  <input type="checkbox" name="assist2" value="gas"> Gas Reimbursement<br>
                  <input type="checkbox" name="assist3" value="vehicle"> Company Vehicle<br>
                  <input type="checkbox" name="assist4" value="travel"> Paid Airfare or travel to/from internship location<br>
                  <input class="internship_report" type="checkbox" name="assist5" value="other"> Other<br>

                </fieldset>
              </fieldset>

              <input type="submit" value="Submit">
              <button type="button" id="back">Back</button>

            </fieldset>

          </div>
        </form>
  </div>

</body>
</html>
