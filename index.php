<!DOCTYPE html>
<html>
  <head>
    <title>myAssignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style></style>
    <script src="chatAjax.js"></script>
    <script src="store.js" type="text/javascript"></script>
    <script>
     function myFunction(event) {
           var x = event.code;
            if (x=="Enter"){
              store();
              cleartxt();
            }
}
</script>
    <style>
      * {
        margin: 0px;
        padding: 0px;
        overflow: hidden;
      }
      #con1 {
        height: 80vh;
      }
      #messageParent {
        max-height: 80%;
        height: 90%;
        overflow-y: scroll;
        background-image:url("bg.png");
        padding-bottom:70px;
        padding-top:70px;
     
      }
      .dev {
        margin-bottom: 5px;
        background-color:#dcf8c6;
        width:fit-content;
        border-radius:20px;
        border-top-left-radius:0px;
        padding:5px 10px;
      }
      .dev:nth-of-type(odd) {
        background-color: #ebebeb;
      }
      .dev p {
        font-size: small;
        margin-bottom: 0px;
      }
      #msg {
        width: 70%;
        padding: 10px;
        font-size: medium;
        border-radius:40px;
        outline:none;
      }
      #msg:hover {
        border-color: blue;
        outline: none;
      }
      #sub {
        padding: 10px;

        margin-left: 7px;
        font-weight: Bold;
        background-color: green;
        color: white;
        border: 0px;
      }
      .header {
        padding: 15px;
        background-color:#264653;
        color: white;
        width: 100vw;
        text-align: center;
        position: fixed;
      }
      .txt {
        width: 100vw;
        padding-top: 15px;
        text-align: center;
      }
      #pow {
        text-align: center;
        color: #e5e5e5;
        padding: 10px;
      }
      .frm {
        background-color:#264653;
        height: 150px;
        position:fixed;
      }
      .ipt {
        display: none;
      }
    </style>
  </head>
  <body onload="ton()">
    <div id="con1">

      <h2 class="header">
          Welcome to Zuri Chat Room!
     </h2>

      <div id="messageParent">

      </div>
    </div>
    <div class="frm">
          <form method="post">
               <div class="ipt">
                 <input type="text" name="name" id="name" />
               </div>
               <div class="txt">
                 <input type="text" name="msg" autocomplete="off" placeholder="Type your message" id="msg" onclick="prm()" onkeypress="myFunction(event)"/>
                 <input type="button" name="submit" id="sub" onclick="store(); cleartxt();" value="submit"/>
               </div>
          </form>
        <div id="pow">powered by: Toyin Ajiboye</div>
      </div>
  </body>
</html>
