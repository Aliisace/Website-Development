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
        <div class="table-responsive">
            <table class="table table-light table-bordered table-sm">
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
                                How: HTML5 table tags are used to build a table containing the artist's discography.
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Use of the Bootstrap framework providing a responsive layout</td>
                    <td>
                        <ul>
                            <li>File: index.php</li>
                            <li>Lines: entire file, specifically lines 26-65</li>
                            <li>
                                How: Bootstrap 4's grid system is used to provide an attractive layout of the information on the artist that adapts to the size of the user's browser
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
                                How: Function to change the logo on aMember.php/welcome.php to the one the user has chosen using buttons.
                            </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>JavaScript loading of dynamically changing information</td>
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
                    <td>Use of jQuery in conjunction with the DOM</td>
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
                    <td>Use of a jQuery plugin to enhance your application</td>
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
                    <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td>
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
                    <td>Use of the jQuery AJAX function</td>
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
                            <li>File: aMember.php/changeStatus.php/changeBack.php/delete.php</li>
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
                            <li>File: login.php/register.php/reset-password.php/deleteAc.php/delete.php</li>
                            <li>Lines: Select statement on line 53/Insert statement on line 59/Update statement on line 43/Select statement on line 53 and delete statement on line 119/Select statement on line 37 and delete statement on line 88</li>
                            <li>
                                How: Select statement used to get data from a table in a MySQL database to log in/Insert statement used to add a row to a table in a MySQL database/Update statement to update the password of the account/Select statement used to get data from a table in a MySQL database to log in and a delete statement to delete the account of the user.
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
                                            <li>File: </li>
                                            <li>Line/s: </li>
                                            <li>
                                                How: 
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Passwords should be salted and hashed</td>
                                    <td>
                                        <ul>
                                            <li>File: login.php/register.php</li>
                                            <li>Lines: 72/67/50/72</li>
                                            <li>
                                                How: The PHP password_verify function is used to hash and salt the user inputed password/The PHP password_hash fucntion is used to hash and salt the user inputed password
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Validation of user input</td>
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
                            </table> <!-- table 2 -->
                        </div>
                    </td>
                </tr>
            </table> <!-- table 1 -->
        </div>
        <?php include 'foot.php'; ?>
    </body>
</html>