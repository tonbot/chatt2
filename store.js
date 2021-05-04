function store() {
  xhr = new XMLHttpRequest();
  xhr.open("post", "chatInsert.php", true);
  var name=document.getElementById("name").value;
  var msg = document.getElementById("msg").value;
  var fd = new FormData();
  fd.append("name", name);
  fd.append("msg", msg);
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      //   alert("again");
      //   var json = JSON.parse(xhr.responseText);
      console.log(xhr.responseText);
      //   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    }
  };

  xhr.send(fd);
}

