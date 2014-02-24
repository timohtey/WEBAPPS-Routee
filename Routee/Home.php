<html lang = "en">

    <meta charset="utf-8">
    <title>Routee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/simple.css" rel="stylesheet">


<head>
    <meta charset="utf-8">
    <title>Routee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/simple.css" rel="stylesheet">
    <style>

    @font-face{
        font-family: Custom1;
        src: url(YOUARETHEONE.TTF);
    }

    @font-face{
        font-family: Custom2;
        src: url(WELTU_.TTF);
    }

    @font-face{
        font-family: Custom3;
        src: url(GTR.TTF);
    }

    body
    {
        background-image: url(roadflat.jpg);
        background-repeat:no-repeat;
        background-size:cover;
        background-position:center;
    }
    </style>
    
</head>

 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>

    <script>
        function initialize(){
            var sourceInput = document.getElementById('sourceSearchText');
            var destinationInput = document.getElementById('destinationSearchText');
            var eventInput = document.getElementById('eventSearchText');

            var autocomplete = new google.maps.places.Autocomplete(sourceInput, {country: 'NL'});
            var autocomplete2 = new google.maps.places.Autocomplete(destinationSearchText, {country: 'NL'});
            var autocomplete3 = new google.maps.places.Autocomplete(eventSearchText, {country: 'NL'});

            autocomplete.bindTo('bounds', map);
            autocomplete2.bindTo('bounds', map);
            autocomplete3.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();

            google.maps.event.addListener(autocomplete, 'place_changed', function() {
              infowindow.close();
              var place = autocomplete.getPlace();
            });

             google.maps.event.addListener(autocomplete2, 'place_changed', function() {
              infowindow.close();
              var place = autocomplete2.getPlace();
            });

             google.maps.event.addListener(autocomplete2, 'place_changed', function() {
              infowindow.close();
              var place = autocomplete3.getPlace();
            });

            setupClickListener('changetype-all', []);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>

<script>
$(document).ready(function(){
  $("#rr").click(function(){
    $("#rr").fadeOut();
    $("#rp").fadeOut();
    $("#route").fadeIn();
  });
});

$(document).ready(function(){
  $("#rp").click(function(){
    $("#rp").fadeOut();
    $("#rr").fadeOut();
    $("#report").fadeIn();
  });
});

$(document).ready(function(){
  $("#getmrp").click(function(){
    $("#rp").fadeIn();
    $("#rr").fadeIn();
    $("#report").fadeOut();
    $('#eventSearchText').val('');
    $('#remarksText').val('');
    $('#situationText').val('');
  });
});

$(document).ready(function(){
  $("#getmrr").click(function(){
    $("#rp").fadeIn();
    $("#rr").fadeIn();
    $("#route").fadeOut();
    $('#sourceSearchText').val('');
    $('#destinationSearchText').val('');
  });
});

</script>

<body>

<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">
    <h1 align = "center" style = "font-family:Custom1;font-size:450%;color:#27ae60;">
    Routee
    </h1>
  </div>
</nav>

<br>
<br>
<br>

<div class = "container">
    
    <div class = "row">
        <div class = "col-lg-4">
            <button type="button" class="btn btn-primary btn-lg btn-block" id = "rr" style = "font-family:Custom2;font-size:250%;color:#f1c40f;">Reroute</button>
        </div>

        <div class = "col-lg-4">
            <br>
            <br>
        </div>

        <div class = "col-lg-4">
            <button type="button" class="btn btn-primary btn-lg btn-block" id = "rp" style = "font-family:Custom2;font-size:250%;color:#f1c40f;">Report</button>
        </div>

    </div>

    <div class = "row"  style = "display:none;" id = "route">

        <div class ="col-lg-4">
        </div>


        <div class = "col-lg-4">
            <div class = "well">
                <h2 align = "center" style = "font-family:Custom3;font-size:200%;color:black;"> Rerouting </h2>
                <p align = "center"> We'll be helping you in finding the best route possible.</p>
                <br>
                <input id = "sourceSearchText" type="text" class="form-control" placeholder="Where did you come from?">
                <br/>
                <input id = "destinationSearchText" type="text" class="form-control" placeholder="Where do you want to go?">
                <br/>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Show me the way</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger" id = "getmrr">Cancel</button>
                    </div>
                </div>
            </div><!--well end-->
        </div> <!--col-lg-4 end--> 

        <div class ="col-lg-4">
        </div>

    </div>

    <div class = "row"  style = "display:none;" id = "report">

        <div class ="col-lg-4">
        </div>


        <div class = "col-lg-4">
            <div class = "well">
                <h2 align = "center" style = "font-family:Custom3;font-size:200%;color:black;"> Reporting </h2>
                <p align = "center">Let us know what is going on.</p><br>
                <input type="text" id ="situationText" class="form-control" placeholder="What's the situation?">
                <br/>
                <input type="text" id = "eventSearchText" class="form-control" placeholder="Where is it happening?">
                <br/>
                <input type="text" id = "remarksText"class="form-control" placeholder="Anything to take note of?">
                <br/>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Contribute</button>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger" id = "getmrp">Cancel</button>
                    </div>
                </div>
            </div><!--well end-->
        </div> <!--col-lg-4 end--> 

        <div class ="col-lg-4">
        </div>

    </div>


</div>


</body>

</html>