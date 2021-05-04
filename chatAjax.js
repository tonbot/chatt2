function ton() {
  var xhr = new XMLHttpRequest();
  xhr.open("post", "chatFetch.php", true);
  // xhr.responseType = "text";
  xhr.onreadystatechange = function tola() {
    if (xhr.readyState == 4) {
      if (xhr.status == 200) {
        var ade = JSON.parse(xhr.responseText);
document.getElementById("messageParent").innerHTML="";
        data(ade);
      }
    }
  };
  function data(tunde) {
    for (var i = 0; i < tunde.length; i++) {
      var tun = tunde[i];
      var con1 = document.getElementById("messageParent");
        
      var con2 = document.createElement("div");
      con2.className = "dev";
      con2.style.marginLeft = "10px";
  


      var p1 = document.createElement("p");
      p1.innerHTML = tun.name;
      p1.style.fontSize="15px";
      p1.style.fontWeight="Bold";

      var p2 = document.createElement("p");
      p2.innerHTML = tun.message;
      p2.style.fontSize="12px";
      p2.style.fontWeight="Bold";
      p2.style.textAlign="right";

      var p3 = document.createElement("span");
      p3.innerHTML = tun.time;

      con2.appendChild(p1);
      con2.appendChild(p2);
      con2.appendChild(p3);
      con1.appendChild(con2);
      con1.scrollTop=20000;
    }
  }

  xhr.send();
}


function prm() {
 var b;

   if (!localStorage.getItem("nik") || localStorage.getItem("nik") == undefined) {
    b=prompt("enter your Nickname ");
   localStorage.setItem("nik", b );
}
   document.getElementById("name").value
=localStorage.getItem("nik")
}
function ref(){
setTimeout(ton, 1000);


//setTimeout(ton, 50);
}
setInterval(ref,1000);
function cleartxt() {
  document.getElementById("msg").value="";
}
