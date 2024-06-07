<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEED-FMS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <input type="text" id="latlng">
    <img src="" alt="gps" id="map">
    <script>
        $(document).ready(function(){
            if(navigator.geolocation)
            {
                navigator.geolocation.watchPosition((pos)=>{
                    let latlng=`${pos.coords.latitude},${pos.coords.longitude}`;
                    $("#latlng").val(`${latlng}`);
                    $("#map").attr("src",`https://maps.googleapis.com/maps/api/staticmap?center=${latlng}&zoom=14&size=400x300&sensor=false&key=AIzaSyBzhPoZ9mRvGgYe2HMl8fkNW64_NDbj_bc`);
                });
            }
            else
            {
                console.log("Permission denied");
            }
        });
    </script>
</body>
</html>