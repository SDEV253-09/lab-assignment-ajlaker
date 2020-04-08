<?php

/*
* Author: Andrew Laker
* Class: SDEV253
* Date: April 5, 2020
* Assignment: M03 Lab Assignment - Accessing Data on a Webpage
* Notes: IMPORTANT! the use of eregi was throwing a fatal error because it is deprecated.
*        Also, the regular expression provided in the assignment would not validate valid emails.
*        I've changed the regular expression using one found on http://regexlib.com/
*/

        // Function used to check email syntax
    function validate_email($email)
           {
        
            // Create the syntactical validation regular expression
            $regexp = "^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$";

               // Validate the syntax
           if (mb_ereg($regexp, $email)) return 1;
                  else return 0;
                }

             // Has the form been submitted?
          if (isset($_POST['submit']))
               {
                  echo "Hi ".$_POST['name']." ".$_POST['lastname']. "!<br />";
           if (validate_email($_POST['email']))
                  echo "<p>The address ".$_POST['email']." is valid!</p><p style='color:red;'>Also, I discoved that 'eregi' was deprecated in PHP 5.3 and REMOVED in PHP 7. I needed to change it to mb_ereg for this script to work correctly.<br> There was also a problem with the provided regular expression in that it would not validate a valid email.<br>
                  A working alternative regular expression for this is ^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$</p><p style='color:red;'>Lastly, you guys might want to go through all of these assignments and vet them. The code in this assignment points to page 306. Not only is it not on page 306, I couldn't find the code in the book at all. The problem is that the assignment references the second edition of the book. The current book is in its Fifth Edition.</p>";
              else
                  echo "The address <strong>".$_POST['email']."</strong> is invalid!";
               }
    ?>

      <form action="subscribe.php" method="post">
              <p>
                  First Name:<br />
                 <input type="text" name="name" size="20" maxlength="40" value="" />
             </p>
          
          <p>
                  Last Name:<br />
                 <input type="text" name="lastname" size="20" maxlength="40" value="" />
             </p>

              <p>
                   Email Address:<br />
                  <input type="text" name="email" size="20" maxlength="40" value="" />
              </p>

             <input type="submit" name = "submit" value="Go!" />
      </form>
