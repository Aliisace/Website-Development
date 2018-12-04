<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- i hate js-->
        <title>Alestorm</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="index.png" />
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css">
    </head>
    <body class="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php include 'nav.php'; ?>
        <br><br>
        <div class="table-responsive-md">
            <table class="table table-sm">
                <tr>
                    <td>
                        <table class="table table-striped table-light table-bordered table-sm">
                            <tr class="text-center thead-light">
                                <th scope="col">Requirement</th>
                                <th scope="col">Application</th>
                            </tr>
                            <tr>
                                <td>A Clear use of HTML5</td>
                                <td>
                                    <ul>
                                        <li>File: music.php</li>
                                        <li>Lines: entire file</li>
                                        <li>
                                            How: HTML5 table tags are used to build a table containing the artist's discography, with a column of embeded spotify players
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of the Bootstrap framework providing a responsive layout</td>
                                <td>
                                    <ul>
                                        <li>File: index.php</li>
                                        <li>Lines: entire file, specifically lines 26-65.</li>
                                        <li>
                                            How: Bootstrap 4's grid system is used to provide an attractive layout of the information on the artist that adapts to the size of the user's browser.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of JavaScript to manipulate the DOM based on an event</td>
                                <td>
                                    <ul>
                                        <li>File: logoSwitch.js</li>
                                        <li>Lines: 74-96</li>
                                        <li>
                                            How: Function to change the src variable of the image tag in logo.php which changes the logo on aMember.php/welcome.php to the one the user has chosen using buttons.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>JavaScript loading of dynamically changing information</td>
                                <td>
                                    <ul>
                                        <li>File: tour.php/timerTest.js</li>
                                        <li>Lines: 39-46/entire file, specifically lines 6-23</li>
                                        <li>
                                            How: A set of &lt;div id="countup"&gt; tags containing a clock displaying the time from the start of the first show on the tour./Line 3 sets the date that the upTime function counts from. The upTime function (lines 6-23) calculates the days, hours, minutes and seconds from the intial date and then displays it in the &lt;div id="countup"&gt; tags in tour.php
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of jQuery in conjunction with the DOM</td>
                                <td>
                                    <ul>
                                        <li>Files: photos.php/test.js</li>
                                        <li>Lines: 126/25-29</li>
                                        <li>
                                            How: Script tags for test.js/jQuery function to toggle paragraphs on photos.php.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of a jQuery plugin to enhance your application</td>
                                <td>
                                    <ul>
                                        <li>Files: photos.php/test.js/slick.min.js</li>
                                        <li>Lines: 43-113, 123&124/1-14/entire file</li>
                                        <li>
                                            How: Section containg the image tags for the carousel, script tags for test.js and slick.min.js./Calls the jQuery plugin slick with custom settings/A carousel jQuery plugin - downloaded from <a href="https://kenwheeler.github.io/slick/">https://kenwheeler.github.io/slick/</a>.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td>
                                <td>
                                    <ul>
                                        <li>File: ajax.js</li>
                                        <li>Lines: entire file</li>
                                        <li>
                                            How: Ajax function to add information to the webpage photos.php from the text file file.txt.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of the jQuery AJAX function</td>
                                <td>
                                    <ul>
                                        <li>Files: even.js/photos.php</li>
                                        <li>Lines: entire file/119</li>
                                        <li>
                                            How: jQuery function that uses the ajax load() method to load data from a text file./Button that calls the jQuery on click.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Use of cookies</td>
                                <td>
                                    <ul>
                                        <li>File: logoSwitch.js</li>
                                        <li>Lines: 20-72</li>
                                        <li>
                                            How: Several functions used to create, get and check cookies for the users preference of logo on welcome.php/aMember.php
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>User login functionality (PHP/MySQL)</td>
                                <td>
                                    <ul>
                                        <li>File: login.php</li>
                                        <li>Lines: 34-109, 135-139</li>
                                        <li>
                                            How: Select statement (line 53) to select data from a table to compare to the user input (lines 135-139). If the hashed password matches the hash of the user input (line 72), the user is redirected to their account page (lines 82-87).
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Admin section of the website (PHP/MySQL)</td>
                                <td>
                                    <ul>
                                        <li>Files: aMember.php/changeStatus.php/changeBack.php/delete.php</li>
                                        <li>Lines: Entire file, specifically lines: 53-57/entire file/entire file/entire file</li>
                                        <li>
                                            How: Admin account page of the site that links to pages where the admin can give/remove the admin status of an user and delete an account./Combination of PHP & MySQL to change the admin status of a user (gives)/Combination of PHP & MySQL to change the admin status of a user (removes)/Combination of PHP & MySQL to delete other accounts on the site.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Ability to select, add, edit and delete information from a database (PHP/MySQL)</td>
                                <td>
                                    <ul>
                                        <li>Files: login.php/register.php/reset-password.php/deleteAc.php/delete.php</li>
                                        <li>
                                            Lines: Select statement on line 53/Insert statement on line 59/Update statement on line 43/Select statement on line 53 and delete statement on line 119/Select statement on line 37 and delete statement on line 88
                                        </li>
                                        <li>
                                            How: SELECT statement used to get data from a table in a MySQL database to log in/INSERT statement used to add a row to a table in a MySQL database/UPDATE statement to update the password of the account/SELECT statement used to get data from a table in a MySQL database to log in and a DELETE statement to delete the account of the user.
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Appropriate consideration of relevant laws</td>
                                <td>
                                    <ul>
                                        <li>File: </li>
                                        <li>Line/s: </li>
                                        <li>
                                            How: 
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-light">
                                            <tr class="text-center thead-light">
                                                <th scope="col" colspan="2">Security:</th>
                                            </tr>
                                            <tr class="text-center thead-light">
                                                <th scope="col">Requirement</th>
                                                <th scope="col">Application</th>
                                            </tr>
                                            <tr>
                                                <td>SQL queries should be written as prepared statements</td>
                                                <td>
                                                    <ul>
                                                        <li>Files: changeBack.php</li>
                                                        <li>Lines: 36-60, 85-118</li>
                                                        <li>
                                                            How: Statements written on lines 36 and 85 have "?" as placeholders for the username variable and the id variable. The mysqli_stmt_bind_param() function (lines 40 & 89), binds the variables to the placeholders in the statement templates. THe placeholders are set to the value of the variables and the code then attempts to execute the statements.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Passwords should be salted and hashed</td>
                                                <td>
                                                    <ul>
                                                        <li>Files: login.php/register.php</li>
                                                        <li>Lines: 72/67</li>
                                                        <li>
                                                            How: The PHP password_verify function is used to hash and salt the user inputed password/The PHP password_hash function is used to hash and salt the user inputed password
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Validation of user input</td>
                                                <td>
                                                    <ul>
                                                        <li>File: changeBack.php</li>
                                                        <li>Lines: 126-131</li>
                                                        <li>
                                                            How: Function test_input is called everytime data is submitted into the form stripping unnecessary characters from the user input data, removing any backslashes (\) and converting special characters into html entities using the htmlspecialcharacters function.
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Any other relevant security features</td>
                                                <td>
                                                    <ul>
                                                        <li>File: </li>
                                                        <li>Line/s: </li>
                                                        <li>
                                                            How: 
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </table> <!-- table 3 -->
                                    </div>
                                </td>
                            </tr>
                        </table> <!-- table 2 -->
                    </td>
                </tr>
            </table> <!--- table 1 -->
        </div>
        <?php include 'foot.php'; ?>
    </body>
</html>