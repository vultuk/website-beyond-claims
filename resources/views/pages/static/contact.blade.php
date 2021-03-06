<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="welcome">
                <div class="page-name pull-left"><h3>Contact Us: <i class="text-muted">We are here for you!</i></h3></div>
            </div>
        </div>
    </div>
</div>
<div class="container marg75">
    <div class="row">
        <div class="col-lg-12">
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/?ie=UTF8&amp;ll=53.4800295,-2.2962176&amp;spn=0.006967,0.016512&amp;t=m&amp;z=16&amp;output=embed"></iframe>
        </div>
    </div>
</div>
<div class="container marg50">
    <div class="row">
        <div class="col-lg-8">
            <h3 class="title"><span>Contact Form</span></h3>
            <p class="about_text" style="color:#777;"><i>If you can't find the answer to your question on our website, or you'd just like to ask us to call you back then please enter your details in the form below. We will get back in touch with you as soon as possible.</i></p>
            <form ng-submit="submit()" ng-controller="ContactController">
                <div class="alert alert-success" ng-class="{hidden:!done}">
                    <strong>Thank You:</strong> Thanks for sending us a message, we'll be in contact shortly.
                </div>
                <span class="input">
                    <p class="contact-width"><input type="text" ng-model="name" placeholder="Your name" class="form-control contact-width" size="40"></p>
                    <div class="alert alert-danger" ng-class="{error:!errors.name}" id="nameError"><i class="fa fa-times"></i> @{{ errors.name[0] }}</div>
                </span>
                <span class="input">
                    <p class="contact-width"><input type="text" ng-model="email" placeholder="Your e-mail" class="form-control contact-width" size="40"></p>
                    <div class="alert alert-danger" ng-class="{error:!errors.email}" id="emailError"><i class="fa fa-times"></i> @{{ errors.email[0] }}</div>
                </span>
                <span class="input">
                    <p class="contact-width"><input type="text" ng-model="subject" placeholder="Subject" class="form-control" size="40"></p>
                    <div class="alert alert-danger" ng-class="{error:!errors.subject}" id="subjectError"><i class="fa fa-times"></i> @{{ errors.subject[0] }}</div>
                </span>
                <span class="input">
                    <p class="contact-width"><textarea ng-model="message" placeholder="Your message" id="message" class="form-control"  cols="40" rows="10"></textarea></p>
                    <div class="alert alert-danger" ng-class="{error:!errors.message}" id="messageError"><i class="fa fa-times"></i> @{{ errors.message[0] }}</div>
                </span>
                <br>
                <div class="alert alert-success success" id="success">
                    <i class="fa fa-check"></i> Well done! You message is successfully sent.</div>
                <p>
                    <input type="submit" id="send" class="btn btn-default btn-small" value="Send message" ng-disabled="loading"/>
                </p>
            </form>
        </div>
        <div class="col-lg-4">
            <h3 class="title"><span>Information</span></h3>
            <p class="adress_cont">
                <i class="fa fa-building-o icon_foot"></i> Address: Unit 8 Quay Reach, Carolina Way, Salford, M50 2ZY.<br>
                <i class="fa fa-phone icon_foot"></i> Phone: 0161 396 6000<br>
                <i class="fa fa-envelope icon_foot"></i>  Email: <a href="mailto:admin@beyondcomparison.com" target="_blank" class="colorend">admin@beyondcomparison.com</a>
            </p>
            <h3 class="title"><span>Business Hours</span></h3>
            <p class="adress_cont">
                <i class="fa fa-unlock icon_foot"></i> Monday - Thursday: 10am to 7:00pm<br>
                <i class="fa fa-unlock icon_foot"></i> Friday: 10am to 2:00pm<br>
                <i class="fa fa-lock icon_foot"></i>  &nbsp;&nbsp;Weekends: closed
            </p>
            <h3 class="title"><span>Social Network</span></h3>
            <ul class="soc-contacts pull-left">
                <li class="facebook"><a href="#"><i class="fa fa-facebook ic_soc"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter ic_soc"></i></a></li>
            </ul>
        </div>
    </div>
</div>