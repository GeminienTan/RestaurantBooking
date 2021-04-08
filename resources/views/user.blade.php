<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nourriture Savoureuse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    body{
      background-color:#E5E8E1;
    }
    .inline-icon {
    vertical-align: bottom;
    }
    .material-icons.md-18 { font-size: 18px; }
    .material-icons.md-24 { font-size: 24px; }
    .material-icons.md-36 { font-size: 36px; }
    .material-icons.md-48 { font-size: 48px; }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Nourriture Savoureuse</a>
    </div> 
    <div class="navbar-right">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/logout') }}">Log Out</a></li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/restaurant') }}">Home</a></li>
        <li class="active"><a href="{{ url('/user') }}">User Dashboard</a></li>
      </ul>
    </div>
   
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-md-3 well">
      
      <div class="well">
        <div class="text-right">
        <span class="btn btn-xs btn-primary" data-toggle="modal" data-target="#profileModal"><span class="inline-icon material-icons md-18">edit</span></span>
        </div>
        <h4><b><span class="inline-icon material-icons md-24">account_circle</span> My Profile</b></h4>
        <hr>
        <div class="text-left">
        <p><span class="inline-icon material-icons md-18 ">face</span>  <b>Name</b> </p>
        <p><span class="inline-icon material-icons md-18 ">email</span> <b>Email</b></p>
        <p><span class="inline-icon material-icons md-18 ">phone</span> <b>Contact Number</b></p>
        </div>
       
      </div>
      <div class="well text-left">
        <h4><b><span class="inline-icon material-icons md-24">history</span> Reservation History</b></h4>
        <hr>
        <ul style="list-style-type:none;padding-left: 0;">
        <li>2021/4/8 12:00 <span class="label label-primary">Pending</span></li>
        <li>2021/4/8 12:00 <span class="label label-success">Confirmed</span></li>
        <li>2021/4/8 12:00 <span class="label label-warning">Cancel</span></li>
        <li>2021/4/8 12:00 <span class="label label-danger">Rejected</span></li>
       
        </ul>
      </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            
            <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="profileModalLabel">Edit Profile</h4>
        </div>
        <div class="modal-body text-left">
        <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="contact_no">Contact Number</label>
                <input type="text" class="form-control" id="contact_no" name="contact_no">
            </div>
            <div class="form-group">
                <label for="contact_no">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
        </div>
        </div>
    </div>
    </div>

    <div class="col-sm-6">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
                <div class="panel panel-primary">
                <div class="panel-heading">MAKE RESERVATION</div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label for="num_of_person">Number of Person</label>
                            <input type="number" class="form-control" id="num_of_person" name="num_of_person" aria-describedby="peopleHelp" >
                            <small id="peopleHelp" class="form-text text-muted">Total number of person (including adults and children)</small>
                        </div>
                        <div class="form-group">
                            <label for="datetime">Booking Date</label>
                            <input type="datetime-local" class="form-control" id="booking_date" name="booking_date">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" aria-describedby="messageHelp" rows="4"></textarea>
                            <small id="messageHelp" class="form-text text-muted">Any special requirements. For example: Please prepare a baby chair for me.</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="panel-footer"><p>We will cancel your reservation if you do not show up after 30 mins of the reservation time.
                You may contact us by phone 04-8296406.</p></div>
                </div>

                <div class="panel panel-primary">
                <div class="panel-heading">FEEDBACK</div>
                <div class="panel-body">
                <p>Please rate us where 1 is Poor and 5 is Excellent.</p>
                    <form>
                    <div class="form-group">
                        <label for="name">Food</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="food" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>&nbsp
                            <input class="form-check-input" type="radio" name="food" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>&nbsp
                            <input class="form-check-input" type="radio" name="food" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>&nbsp
                            <input class="form-check-input" type="radio" name="food" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>&nbsp
                            <input class="form-check-input" type="radio" name="food" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Service</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="service" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>&nbsp
                            <input class="form-check-input" type="radio" name="service" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>&nbsp
                            <input class="form-check-input" type="radio" name="service" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>&nbsp
                            <input class="form-check-input" type="radio" name="service" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>&nbsp
                            <input class="form-check-input" type="radio" name="service" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Environment</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="environment" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>&nbsp
                            <input class="form-check-input" type="radio" name="environment" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>&nbsp
                            <input class="form-check-input" type="radio" name="environment" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>&nbsp
                            <input class="form-check-input" type="radio" name="environment" value="4">
                            <label class="form-check-label" for="inlineRadio3">4</label>&nbsp
                            <input class="form-check-input" type="radio" name="environment" value="5">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Comment</label>
                        <textarea class="form-control" id="comment" name="comment" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="panel-footer"><p>Thank you for your feedback.<p></div>
                </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3 well">
      <div class="thumbnail">
        <p><strong> ~ Lunch Promotion ~ </strong></p>
        <img src="/img/coffee-cup.jpg" alt="coffee" width="400" height="300">
        <p> 1 main course + 1 beverage at only RM25.00!!</p>
        <p> Tuesday to Friday 12pm - 3pm ** Except for Public Holiday</p>
      </div>  
      <div class="thumbnail">
        <p><strong> ~ Party Time ~ </strong></p>
        <img src="/img/event.jpg" alt="party" width="400" height="300">
        <p>We offer full-service catering for any event, large or small. </p>
        <p>We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
      </div>
      <div class="thumbnail">
        <p><strong> ~ Get a Special Discount ~ </strong></p>
        <img src="/img/phone.jpg" alt="party" width="400" height="300">
        <p>Take a photo and upload to social medie, share the location with hashtag #Nourriture Savoureuse</p>
        <p>Show to our staff to get 10% discount</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
