<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Planning</title>
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <script src="js/script.js"></script>
</head>

<body>
    <div class="title">
      <h1>Plan Your Applefest Trip</h1>
    </div>
    <?php include "includes/header.php";?>
    
    <div id="container">
    
        <div id="content"> 
            <div id="local_nav">
                <span class="links"><a href="#bus">Bus Schedule</a></span>
                <span class="links"><a href="#hotel">Hotel Information</a></span>
                <span class="links"><a href="#parking">Parking</a></span>
            </div>
            
            <div id="center">
                <a class="anchor" id="bus"></a>
                <h2>Bus Schedule</h2>
                <p>The easiest means of public transportation is the Tompkins Consolidated Area Transit (TCAT). To find bus routes, schedules, guides, and more information, visit the official <a href="https://www.tcatbus.com/">TCAT Bus Website</a>.</p>
                <div id="image">
                    <img src="images/tcat.jpg" alt="TCAT logo"> <!-- Citation URL: http://pawprint.cornell.edu/sites/all/themes/pawprint_theme/media/styles/extralarge/public/bulletins/Bulletin.Tcat_.jpg?itok=BsAG3Mdn -->
                </div>
                <p>For more information on how and where to find buses and routes, consider using this <a href="https://www.tcatbus.com/learn/system-map/">interactive map</a>.</p>
                
                <a class="anchor" id="hotel"></a>
                <h2>Hotel Information</h2>
                <p>There are many hotel options in the Ithaca region, but we suggest first checking the availability at these establishments, which have been ranked in the top 10 hotels in Ithaca and typically receive good reviews: </p>
                <ul>
                    <li><a href="http://www.statlerhotel.cornell.edu/">The Statler Hotel at Cornell University</a></li>
                    <li><a href="http://www.thehotelithaca.com/">Hotel Ithaca</a></li>
                    <li><a href="http://www.hilton.com/search/gi/us/ny/ithaca/0/00000000000/0/0/0/0/50?wt.srch=1">Hilton Garden Inn Ithaca</a></li>
                    <li><a href="https://www.countryinns.com/ithaca-hotel-ny-14850/nyithaca?facilitatorId=GOOGLE">Country Inns and Suites</a></li>
                </ul>
                
                <a class="anchor" id="parking"></a>
                <h2>On-Site Parking</h2>
                <p>Most hotels provide free parking, but at the same time, Downtown Ithaca parking is free on weekends, which is when Applefest takes place.</p>
                <p>In case you would rather park in a garage, here is a map of the big parking garages near the Ithaca Commons.</p>
                <div id="image">
                    <img src="images/parking.jpg" alt="Parking Map"> <!-- Citation URL: http://www.downtownithaca.com/local/file_upload/images/map%20of%20downtown.png -->
                </div>
                <p>You can even get two hours of <a href="http://downtownithaca.com/best-of-ithaca/New!+Get+2+Hours+of+Free+Parking">free parking</a> if you show a validated receipt from a purchase made downtown!</p>        
             
            </div>
         
        </div>
        
    </div>
    
</body>
         
</html>