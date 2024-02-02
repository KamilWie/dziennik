function updateTime() {
    let currentTime = new Date();
    let currentUTCTime = currentTime.toUTCString();
 
    document.getElementById("datetime").innerHTML = currentUTCTime;
 }
 
 setInterval(updateTime, 1000);