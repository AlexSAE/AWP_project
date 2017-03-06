<head>
    <link rel="stylesheet" href="css/create.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css"></head>
<br />
<div class="inner contact"><!-- Form Area -->
    <div class="contact-form">
        <!-- Form -->
        <form  method="post" action="/posts">
            <div class="col-xs-6 wow animated slideInLeft" data-wow-delay=".5s"><!-- Left Inputs -->
                <input type="text" name="name" id="user" required="required" class="form" placeholder="Name" /><!-- Name -->

                <input type="email" name="email" id="email" required="required" class="form" placeholder="Email" /><!-- Email -->

                <input type="text" name="title" id="title" required="required" class="form" placeholder="Subject" /><!-- Subject -->
            </div><!-- End Left Inputs -->
            <!-- Right Inputs -->
            <div class="col-xs-6 wow animated slideInRight" data-wow-delay=".5s">
                <!-- Message -->
                <textarea name="description" id="description" class="form textarea"  placeholder="Message"></textarea>
            </div><!-- End Right Inputs -->
            <!-- Bottom Submit -->
            <div class="relative fullwidth col-xs-12">
                <!-- Send Button -->
                <button type="submit" id="submit" name="submit" class="form-btn semibold">Send Message</button>
            </div><!-- End Bottom Submit -->
            <!-- Clear -->
            <div class="clear"></div>
        </form>

        <!-- Your Mail Message -->
        <div class="mail-message-area">
            <!-- Message -->
            <div class="alert gray-bg mail-message not-visible-message">
                <strong>Thank You !</strong> Your email has been delivered.
            </div>
        </div>

    </div><!-- End Contact Form Area -->
</div><!-- End Inner -->


