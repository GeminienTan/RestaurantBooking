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
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Messages</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group input-group">
          <input type="text" class="form-control" placeholder="Search..">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
            </button>
          </span>        
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> My Account</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container text-center">    
  <div class="row">
    <div class="col-md-3 well">
      
      <div class="well ">
        <div class="text-right">
        <span class="btn btn-xs btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="inline-icon material-icons md-18">edit</span></span>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-primary">
            
            <button type="button" class="close btn-lg" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Edit Profile</h4>
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
                            <input type="datetime" class="form-control" id="booking_date" name="booking_date">
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
                You may contact us by phone 04-8296406.<p></div>
                </div>

                <div class="panel panel-primary">
                <div class="panel-heading">FEEDBACK</div>
                <div class="panel-body">
                    <form>
                    <div class="form-group">
                        <label for="name">Food</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="service" id="poorService" value="1">
                            <label class="form-check-label" for="inlineRadio1">Poor</label>
                            <input class="form-check-input" type="radio" name="service" id="goodService" value="2">
                            <label class="form-check-label" for="inlineRadio2">Okay, Not Bad</label>
                            <input class="form-check-input" type="radio" name="service" id="excellentService" value="3">
                            <label class="form-check-label" for="inlineRadio3">Excellent</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Service</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="service" id="poorService" value="1">
                            <label class="form-check-label" for="inlineRadio1">1</label>&nbsp
                            
                            <input class="form-check-input" type="radio" name="service" id="goodService" value="2">
                            <label class="form-check-label" for="inlineRadio2">2</label>&nbsp
                            <input class="form-check-input" type="radio" name="service" id="excellentService" value="3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                            <input class="form-check-input" type="radio" name="service" id="excellentService" value="3">
                            <label class="form-check-label" for="inlineRadio3">4</label>
                            <input class="form-check-input" type="radio" name="service" id="excellentService" value="3">
                            <label class="form-check-label" for="inlineRadio3">5</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Environment</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="service" id="poorService" value="1">
                            <label class="form-check-label" for="inlineRadio1">Poor</label>
                            <input class="form-check-input" type="radio" name="service" id="goodService" value="2">
                            <label class="form-check-label" for="inlineRadio2">Okay, Not Bad</label>
                            <input class="form-check-input" type="radio" name="service" id="excellentService" value="3">
                            <label class="form-check-label" for="inlineRadio3">Excellent</label>
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
      
      <div class="row">
      <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-food" role="tabpanel" aria-labelledby="nav-food-tab">
                <table class="table" cellspacing="0" width="80%">
                    <thead>
                        <tr>
                            <th>Food</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>ww</td>
                    <td>ww</td>
                    <td>ww</td>
                    <td><button type="submit" class="btn btn-primary">Submit</button></td>
                    </tr>
                    
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-beverage" role="tabpanel" aria-labelledby="nav-beverage-tab">
                <table class="table" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Beverage</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="nav-dessert" role="tabpanel" aria-labelledby="nav-dessert-tab">
                <table class="table" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Dessert</th>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
      </div>     
    </div>
    <div class="col-sm-3 well">
      <div class="thumbnail">
        <p>Upcoming Events:</p>
        <img src="paris.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Fri. 27 November 2015</p>
        <button class="btn btn-primary">Info</button>
      </div>      
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>
