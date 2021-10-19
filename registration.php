<?php include "process.php"; ?>
<DOCTYPE html>
    <html>
        <head>

        </head>
        <body>
            <h1>
                Please fill up the form
            </h1>
            <hr>
            <form action="" method="POST">
                <table>
                    <tr>
                        <td><label for="fname">First Name:</label></td>                       
                        <td><input type="text" id="fname" name="fname"></td>
                                                        
                    </tr>
                    <tr>
                        <td><label for="lname">Last Name:</label></td>                       
                        <td><input type="text" id="lname" name="lname" ></td>                                     
                    </tr>
                    <tr>
                        <td><label for="email">Email:</label></td>                       
                        <td><input type="email" id="email" name="email"></td>                                  
                    </tr>
                    <tr>
                        <td><label for="gender">Gender:</label></td>                       
                        <td>
                            <input type="radio" id="m" name="r1" value="Male">
                            <label for="m">Male</label>
                            <input type="radio" id="Fm" name="r1" value="Female">
                            <label for="fm">Female</label>
                        </td>                                                                                                           
                    </tr>
                    <tr>
                        <td><label for="mobile">Mobile Number:</label></td>                       
                        <td><input type="tel" id="mobile" name="mobile"></td>                                  
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth:</label></td>                       
                        <td><input type="date" id="dob" name="dob"></td>                                  
                    </tr>
                    <tr>
                        <td><label for="hsc">HSC Result:</label></td>                       
                        <td><input type="text" id="hsc" name="hsc"></td>                                  
                    </tr>
                    <tr>
                        <td><label for="ssc">SSC Result:</label></td>                       
                        <td><input type="text" id="ssc" name="ssc"></td>                                  
                    </tr>
                    <tr>
                        <td><label for="course">Select a course you want to enroll:</label></td>                       
                        <td>
                            <select name="course" id="course">
                                <option value="cse">CSE</option>
                                <option value="eee">EEE</option>
                                <option value="bba">BBA</option>
                            </select>
                        </td>                                  
                    </tr>
                    <tr>
                        <td><label for="year">Choose a year you want to enroll:</label></td>                       
                        <td>
                            <select name="year" id="year">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                        </td>                                  
                    </tr>
                    <tr>
                        <td><label for="semester">Choose a Semester you want to enroll:</label></td>                       
                        <td>
                            <select name="semester" id="semester">
                                <option value="summer">Summer</option>
                                <option value="fall">Fall</option>
                                <option value="spring">Spring</option>
                            </select>
                        </td>                                  
                    </tr>
                    <tr>
                        <td><input name="submit" type="submit" value="Insert Data"></td>
                    </tr>
                </table>           
            </form>
        </body>
    </html>