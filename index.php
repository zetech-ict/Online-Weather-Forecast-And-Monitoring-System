<?php
include ("includes/header.php");
include ("includes/connection.php");

$apiKey = "8663f80d6a9231cf9fd2e11b707209ee";
$cityId = "CITY ID";
//$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$googleApiUrl = "https://api.openweathermap.org/data/3.0/onecall?lat=1.2921&lon=36.8219&units=metric&country=KE&exclude=&appid=".$apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

$currentData = $data->current;
$timezone = $data->timezone;

$townsQuery = "SELECT * FROM locations";
$towns = mysqli_query($connection,$townsQuery);

if (mysqli_num_rows($towns) < 1) {
    die("There are no locations added to the database yet. Please check and try again");
}

        ?>

            <section class="innerpage__head mb-0">

            </section>
            <!-- End breadcrumb -->

            <!-- Start Section -->
            <section class="section section__contact pt-4">
                <div class="container">
                     <h2>Welcome back, <?php echo $_SESSION['first_name'] ?></h2>
                     <div class="row">
                        <div class="col-md-12">
                          <form class="" method="get" action="search.php">
                              <div class="row">
                                  <div class="form-group col-md-8">
                                    <label for="inputState">Select your town</label>
                                    <select name="town_id" class="form-control" style="padding: 5px !important">
                                        <?php  foreach($towns as $town) { ?>
                                            <option value="<?php echo $town['id']; ?>"><?php echo $town['town']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    
                                  <button name="search" class="btn btn-success  btn-sm mt-30" type="submit">Filter <i class="fa fa-search"></i></button>
                              </div>
                          </div>
                        </form>
                    </div>
                     </div>
                    <div class="row">

       <?php include "includes/info.php";  ?>

       <div class="col-lg-6">



        <!--                    <div class="row ">-->
            <div class="report-container">
                <h2><?php echo $timezone ?> Weather Status</h2>
                <div class="time">
                    <div><?php echo date("l g:i a", $currentTime); ?></div>
                    <div><?php echo date("jS F, Y",$currentTime); ?></div>
                    <div><?php echo ucwords($currentData->weather[0]->description); ?></div>
                </div>
                <div class="weather-forecast">
                    <img
                    src="http://openweathermap.org/img/w/<?php echo $currentData->weather[0]->icon; ?>.png"
                    class="weather-icon" /> <?php echo $currentData->temp; ?>&deg;C
                    <!--                                <span-->
                        <!--                                        class="min-temperature">-->
                        <!--                                    --><?php //echo $data->main->temp_min; ?><!--&deg;C-->
                        <!--                                </span>-->
                    </div>
                    <div class="time">
                        <div>Humidity: <?php echo $currentData->humidity; ?> %</div>
                        <div>Wind: <?php echo $currentData->wind_speed; ?> km/h</div>
                    </div>
                     <div class="time" style="padding-top: 10px;">
                        <div>Feels like: <?php echo $currentData->feels_like; ?> &deg;C</div>
                        <div>Visibility: <?php echo number_format($currentData->visibility); ?> m</div>
                    </div>
                     <div class="time" style="padding-top: 10px;">
                        <div>Sunrise:<div><?php echo date("g:i a", $currentData->sunrise); ?></div></div>
                        <div>Sunset: <div><?php echo date("g:i a", $currentData->sunset); ?></div></div>
                    </div>

                </div>

            </div>
            <div class="col-lg-6">



                <!--                    <div class="row ">-->

                  <table class="table">

                      <tbody>
                         <?php  foreach ($data->daily as $row) {?>
                            <tr>
                              <td scope="row">
                                  <span class="time">
                                    <div><?php echo date("l g:i a", $row->dt); ?></div>
                                    <!--                            <div>--><?php //echo date("jS F, Y",$row->dt); ?><!--</div>-->
                                    <div><?php echo ucwords($row->weather[0]->description); ?></div>
                                </span>
                            </th>
                            <td>
                              <span class="weather-forecast">
                                <img
                                src="http://openweathermap.org/img/w/<?php echo $row->weather[0]->icon; ?>.png"
                                class="weather-icon" /> <?php echo $row->temp->day; ?>&deg;C

                            </span>
                        </td>
                        <td>   
                            <span class="time">
                                <div>Humidity: <?php echo $row->humidity; ?> %</div>
                                <div>Wind: <?php echo $row->wind_speed; ?> km/h</div>
                            </span>
                        </td>

                    </tr>
                <?php } ?>

            </tbody>
        </table>



    </div>
    </div>

                    <div class="row mt-10" style="margin-top: 10px;">
                            <div class="col-6">
                                <h4 class="pt-3">Hourly forecast (<?php echo date("jS F, Y",$currentTime) ?>)</h4>
                            </div>
                            <div class="col-6">
                                <a href="daily.php" class="btn btn-primary btn-rounded btn-sm">View daily forecast <i class="fa fa-list-plus"></i></a>
                            </div>
                    </div>
                        
                      <div class="row">
        <div class="col-lg-12">
          
            <table class="table">

              <tbody>
                 <?php  foreach ($data->hourly as $row) {?>
                    <tr>
                      <td scope="row">
                          <span class="time">
                            <div><?php echo date("l g:i a", $row->dt); ?></div>
                            <!--                            <div>--><?php //echo date("jS F, Y",$row->dt); ?><!--</div>-->
                            <div><?php echo ucwords($row->weather[0]->description); ?></div>
                        </span>
                    </td>
                    <td>
                      <span class="weather-forecast">
                        <img
                        src="http://openweathermap.org/img/w/<?php echo $row->weather[0]->icon; ?>.png"
                        class="weather-icon" /> <?php echo $row->temp; ?>&deg;C

                    </span>
                </td>
                <td>   
                    <span class="time">
                        <div>Humidity: <?php echo $row->humidity; ?> %</div>
                        <div>Wind: <?php echo $row->wind_speed; ?> km/h</div>
                    </span>
                </td>

            </tr>
        <?php } ?>

    </tbody>
    </table>

    </div>

                    </div>


                </div>
            </section>
        <?php

        include ("includes/footer.php")

        ?>