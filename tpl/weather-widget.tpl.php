<div>
    <h3>Today's Weather</h3>
    <hr>
    Description: <?= $outputObj->wx_desc?> <br>
    Temperature: <?= round($outputObj->temp_f, 0, PHP_ROUND_HALF_UP)?>&deg; <br>
    Feels Like Temp: <?= round($outputObj->feelslike_f, 0, PHP_ROUND_HALF_UP)?>&deg; <br>
    Humidity: <?= $outputObj->humid_pct?>%<br>
    Wind Speed: <?= $outputObj->windspd_mph?> mph<br>
    Wind Direction: <?= $outputObj->winddir_compass?> <br>
    Dew Point: <?= round($outputObj->dewpoint_f, 0, PHP_ROUND_HALF_UP)?>&deg; <br>
</div>

