<?php

include("includes/server.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Intern Report Form</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>

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
        <h2>Intern Performance Evaluation</h2>

        <div class="internship-report">
            <form action="/action_page.php">

                <div id="intern-eval">

                    <br/>

                    Name of Intern

                    <br />

                    <table style="width:100%;">
                        <tr>
                            <th>
                                Behaviors
                            </th>
                            <th>
                                2
                            </th>
                            <th>
                                1
                            </th>
                            <th>
                                0
                            </th>
                            <th>
                                N/A
                            </th>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Performs in a dependable manner
                            </td>
                            <td>
                                <input type="radio" name="super1" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super1" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super1" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super1" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Cooperates with co-workers and supervisors
                            </td>
                            <td>
                                <input type="radio" name="super2" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super2" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super2" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super2" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Shows interest in work
                            </td>
                            <td>
                                <input type="radio" name="super3" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super3" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super3" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super3" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Learns quickly
                            </td>
                            <td>
                                <input type="radio" name="super4" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super4" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super4" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super4" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Shows initiative
                            </td>
                            <td>
                                <input type="radio" name="super5" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super5" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super5" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super5" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Produces high quality work
                            </td>
                            <td>
                                <input type="radio" name="super6" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super6" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super6" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super6" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Accepts responsibility
                            </td>
                            <td>
                                <input type="radio" name="super7" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super7" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super7" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super7" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Accepts criticism
                            </td>
                            <td>
                                <input type="radio" name="super8" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super8" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super8" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super8" value="na">
                            </td>
                        </tr>

                        <tr>
                            <
                            <td class="behaviors">
                                Demonstrates organizational skills
                            </td>
                            <td>
                                <input type="radio" name="super9" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super9" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super9" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super9" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Demonstrates technical knowledge and expertise
                            </td>
                            <td>
                                <input type="radio" name="super10" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super10" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super10" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super10" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Demonstrates technical knowledge and expertise
                            </td>
                            <td>
                                <input type="radio" name="super11" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super11" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super11" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super11" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Shows good judgement
                            </td>
                            <td>
                                <input type="radio" name="super12" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super12" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super12" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super12" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Demonstrates creativity/orgininality
                            </td>
                            <td>
                                <input type="radio" name="super13" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super13" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super13" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super13" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Analyzes problems effectively
                            </td>
                            <td>
                                <input type="radio" name="super14" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super14" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super14" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super14" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Is self-reliant
                            </td>
                            <td>
                                <input type="radio" name="super15" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super15" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super15" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super15" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Communicates well
                            </td>
                            <td>
                                <input type="radio" name="super16" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super16" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super16" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super16" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Writes effectively
                            </td>
                            <td>
                                <input type="radio" name="super17" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super17" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super17" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super17" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Has a professional attitude
                            </td>
                            <td>
                                <input type="radio" name="super18" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super18" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super18" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super18" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Gives a professional appearance
                            </td>
                            <td>
                                <input type="radio" name="super19" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super19" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super19" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super19" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Is punctual
                            </td>
                            <td>
                                <input type="radio" name="super20" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super20" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super20" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super20" value="na">
                            </td>
                        </tr>

                        <tr>
                            <td class="behaviors">
                                Uses time effectively
                            </td>
                            <td>
                                <input type="radio" name="super30" value="2">
                            </td>
                            <td>
                                <input type="radio" name="super30" value="1">
                            </td>
                            <td>
                                <input type="radio" name="super30" value="0">
                            </td>
                            <td>
                                <input type="radio" name="super30" value="na">
                            </td>
                        </tr>

                    </table>

                    <input type="submit" value="Submit" style="float:right;">
                </div>
            </form>
        </div>

</body>
</html>
