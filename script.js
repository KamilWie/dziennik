function updateTime() {
    let currentTime = new Date();
    let currentUTCTime = currentTime.toUTCString();
 
    document.getElementById("datetime").innerHTML = currentUTCTime;
 }
 
 setInterval(updateTime, 1000);

 function fshow2() {
    var wt = document.getElementById("wt");
    if (wt.style.display === "none") {
        wt.style.display = "flex";
    } else {
        wt.style.display = "none";
    }
  }
  function fshow1() {
    var pon = document.getElementById("pon");
    if (pon.style.display === "none") {
        pon.style.display = "flex";
    } else {
        pon.style.display = "none";
    }
  }
  function fshow3() {
    var sr = document.getElementById("sr");
    if (sr.style.display === "none") {
        sr.style.display = "flex";
    } else {
        sr.style.display = "none";
    }
  }
  function fshow4() {
    if (czw.style.display === "none") {
        czw.style.display = "flex";
    } else {
        czw.style.display = "none";
    }
  }
  function fshow5() {
    var pt = document.getElementById("pt");
    if (pt.style.display === "none") {
        pt.style.display = "flex";
    } else {
        pt.style.display = "none";
    }
  }