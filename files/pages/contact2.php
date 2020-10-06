<?php
if (!session_id())
    session_start();
// require '..\includes\root.php';
// require __DIR__ . '/../includes/root.php';
$_SESSION['pagename'] = "contact";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require '../includes/globalSiteTag.html';
    ?>
    <title>Alchemy Web Designs | Contact Us</title>
    <meta name="description" content="">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/contact2.css" media="screen" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon-16x16.png">

</head>

<body>

    <header class="header">

        <?php
        // require '../inc/menu.php';
        ?>

        <br><br>

        <div class="magic-block">
            <?php
            require '../includes/magic.php';
            ?>
        </div>

    </header>
    <div class="header1">

<div class="logo1">
    <span class="logo1__title1">AlchemY</span><span class="logo1__sub-title1"> WEB&nbsp;DESIGNS</span>
</div>


<div class="nav">
    <div class="nav__wide">
        <ul>
            <li class="menu-item">serving midcoast maine - and beyond!</li>
            <li class="menu-item"><a href="home.php">Home</a></li>
            <li class="menu-item"><a href="portfolio3.php">Portfolio</a></li>
            <li class="menu-item"><a href="about3.php">About</a></li>
            <li class="menu-item"><a href="contact.php" target="_blank">Contact</a></li>
        </ul>
    </div>

    <div class="nav__narrow">
        <div class="menu-item">serving midcoast maine - and beyond!</div>
        <ul>
            <!-- <li class="dropdown"> -->
            <a href="javascript:void(0)" class="dropbtn">
                <div class="hamburger"></div>
                <div class="hamburger"></div>
                <div class="hamburger"></div>
            </a>
            <!-- <div class="dropdown-content">
                    <a href="home.php">Home</a>
                    <a href="portfolio3.php">Portfolio</a>
                    <a href="about3.php">About</a>
                    <a href="contact.php" target="_blank">Contact</a>
                </div> -->
            <!-- </li> -->
        </ul>

    </div>
</div>

</div>


    <main class="main">
        <img src="../images/girl-listening-seashelljpg.jpg" alt="Lucy sitting at desk with mobile phone, pen & notebook plus old-fashioned phone, lamp and bouquet of flowers">
        <div class="form-container">

            <div class="text-block">
                <div class="spacer10"></div>
                Let’s get started on your project.<br>
                Please send me an email at lucy@theredecorator.com<br>
                or use the form below.
            </div><br>
            <form method="post" class="contactform" action="https://www1.domain.com/scripts/formemail.bml" name="contactform">
                <!-- <form method="post" class="contactform" action="response.php" name="contactform"> -->

                <!--A hidden tag. This tag means it cannot be seen by your customers and tells the 
form where to e-mail the contents of the form. -->
                <input type="hidden" name="my_email" value="lucy@theredecorator.com">

                <!--How to create an input field
    Create an input field for each piece of data you wish to collect
    To create an input field you can use a tag such as this: -->
                <!--<input type="text" name="fieldname" size="25">-->

                <!--For example if you wanted to create a input field called fullname it would look like this: -->
                <label for="first_name">Name:&nbsp;</label>
                <div class="field-block">
                    <input type="text" name="fullname" size="25">
                </div>
                <!-- <label for="first_name">First Name *</label> 
    <input maxlength="50" name="first_name" size="40" type="text">
    <label for="last_name">Last Name *</label>
    <input maxlength="50" name="last_name" size="40" type="text">   -->
                <label for="email">Contact Information:&nbsp;</label>
                <div class="field-block contact-field">
                    <input maxlength="80" name="email" size="40" type="text">
                </div>
                <!-- <label for="subject">Subject</label>
                <input maxlength="80" name="subject" size="40" type="text"> -->
                <!-- <label for="telephone">Telephone Number</label> 
    <input maxlength="40" name="telephone" size="40" type="text">  -->

                <label for="message">Describe your project or question:</label>
                <div class="field-block description-field">
                    <textarea cols="40" maxlength="1000" name="message" rows="10" wrap="hard"></textarea>
                </div>
                <!-- <br>
                <label for="message">Describe your project of question:</label>
                    <br>
                <div class="field-block question-field">
                    <input type="text" name="row1" size="25" wrap="hard">
                </div>
                <div class="field-block question-field">
                    <input type="text" name="row2" size="25" wrap="hard">
                </div>
                <div class="field-block question-field">
                    <input type="text" name="row3" size="25" wrap="hard">
                </div>
                <div class="field-block question-field">
                    <input type="text" name="row4" size="25" wrap="hard">
                </div> -->

                <!--Customizing the default subject line 
You can customize the default subject line by using this hidden tag and replacing 
subject with what you want the subject to be -->
                <!--<input type="hidden" name="subject" value="subject">-->

                <!--Including an input field into the e-mail subject line
If you want to include one of the input fields in the return e-mail's subject field, 
all you need to do is replace "Subject" in your code with the NAME of the field surrounded by %%. 
For example, if your form contains a field named firstname, it would look like this-->
                <!-- <input type="hidden" name="subject" value="form submission from %%first_name%%"> -->

                <!-- Making an input field required
If you want to make a certain input field required in your form. Use the following tag
-->
                <input type="hidden" name="required" value="email,message">
                <!-- For example, if you were making the field named emailadress and firstname, your tag would look like this 
Note: "required" must be in lower-case letters to be recognized by our processor; name="REQUIRED" may not work. <input type="hidden" name="required" value="emailaddress, firstname">
-->
                <!--
Customizing the pages seen after form completion
You can send your visitors to various URLs after they have completed the form.
To send them to a specific page after they have completed the form successfully by using the tag below and replacing "yoururl" with the page name. The URL does not have to be on your site or even hosted with Domain.com. It is best to use full path names (http://www.yoursite.com/page.html) and not local paths (/page/html).
-->
                <!-- <input type="hidden" name="thankyou_url" value="https://www.mainevillageweaver.com/thankyou.html"> -->
                <!-- <input type="hidden" name="thankyou_url" value="https://www.mainevillageweaver.com/thankyou.html"> -->

                <!-- If a customer fills out your form incorrectly, you can customize the "error" page by they see inserting the following line of code in your form:
-->
                <!--<input type="hidden" name="error_url" value="yoururl">-->

                <!-- Changing the order of your form results
By default, the results of your form are displayed alphabetically by field name
To change this order,you will need to use the following syntax.
-->
                <!-- <input type="hidden" name="order" value="email,subject,message"> -->
                <!-- Adding a blind carbon copy (bcc) e-mail address
You can have an e-mail address as an blind carbon copy to the results of your form.
Use the following syntax to add a bcc e-mail address:
-->
                <!--<input type ="hidden" name ="bcc" value="bbcemailaddress">-->

                <!-- Specifying a return e-mail address
Have your customers insert their e-mail address into your form.
Use the following syntax to have your customers add their e-mail address:
-->
                <!--<input type="text" name="email">-->

                <!-- Adding Submit and Reset buttons
Include buttons to submit your customer's data or reset values. You can change the text 
that appears on the button by editing the value field.
Use the following syntax to include submit and reset buttons:
-->
                <!-- <label for="submit"></label> -->
                <!-- <input type="submit" name="submit" value="Send"> -->
                <div class="button-block">
                    <button class="button1" href="contact.php">Contact Lucy</button>
                </div>
                <!--<input type="reset" name="reset" value="Reset" >-->

            </form>


        </div>

    </main>
    <?php
    //  require '../inc/footer.php' 
     ?>

</body>

</html>