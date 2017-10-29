<!DOCTYPE HTML>
<html lang="en">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Contact Form</title>
    <!-- Bootstrap -->
  <link href="twitter-bootstrap-dev/docs/assets/css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="twitter-bootstrap-dev/docs/assets/css/docs.css" rel="stylesheet" media="screen">
  <link href="twitter-bootstrap-dev/docs/assets/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
    <style>
      .contact-us {
        max-width: 800px;
        padding: 20px 30px;
        margin: 0 auto 20px;
        background-color: #fff;
    border-radius: 8px;
      } 
  </style>
  </head>
  <body>

  
    <div class="container">
      <form class="contact-us form-horizontal" method="post">
    <legend>Contact Form</legend>   
    <div class="control-group">
          <label class="control-label">Name</label>
      <div class="controls">
          <div class="input-prepend">
        <span class="add-on"><i class="icon-user"></i></span>
          <input type="text" class="input-xlarge" name="name" placeholder="Name">
        </div>
      </div>
    </div>
    <div class="control-group">
          <label class="control-label">Email</label>
      <div class="controls">
          <div class="input-prepend">
        <span class="add-on"><i class="icon-envelope"></i></span>
          <input type="text" class="input-xlarge" name="email" placeholder="Email">
        </div>
      </div>  
    </div>
    <div class="control-group">
          <label class="control-label">Url</label>
      <div class="controls">
          <div class="input-prepend">
        <span class="add-on"><i class="icon-globe"></i></span>
          <input type="text" id="url" class="input-xlarge" name="url" placeholder="Url">
        </div>
      </div>
    </div>
    <div class="control-group">
          <label class="control-label">Comment</label>
      <div class="controls">
          <div class="input-prepend">
        <span class="add-on"><i class="icon-pencil"></i></span>
          <textarea name="comment" class="span4" rows="4" cols="80" placeholder="Comment (Max 200 characters)"></textarea>
        </div>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
      <button type="submit" class="btn btn-primary">Submit</button>
      <button type="button" class="btn">Cancel</button>
        </div>  
    </div>
    </form>

    <div class="modal hide fade">
      <div class="modal-body">
    <p>Thank for contacting us.</p>
    <p class="ajax_data"></p>
      </div>
    <div class="modal-footer">
    <a href="#" class="btn btn-primary" id="done">Done</a>
    <a href="#" class="btn" id="close">Close</a>
    </div>
    </div>

    </div> <!-- /container -->
  <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="twitter-bootstrap-dev/docs/assets/js/bootstrap.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>