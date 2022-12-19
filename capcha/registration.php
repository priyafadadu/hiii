
<form action="" name="contactForm" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="row">
        <div class="form-group col-6">
            <label>Enter Captcha</label>
            <input type="text" class="form-control" name="captcha" id="captcha">
        </div>
        <div class="form-group col-6">
            <label>Captcha Code</label>
            <img src="scripts/captcha.php" alt="PHP Captcha">
        </div>
    </div>
    <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
</form>