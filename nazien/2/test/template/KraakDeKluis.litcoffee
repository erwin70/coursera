body {
     background: rgba(0, 0, 0, 0) url("money.jpg") no-repeat scroll center top;
     color: #333333;
     font-family: "Trebuchet MS";
     font-size: 12px;
     margin: 0px;
     padding: 0px;
}

.header {
     margin: auto;
     width: 100%;
}

.content {
     background: #fdfdfd none repeat scroll 0px 0px;
     box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.2);
     box-sizing: content-box;
     margin: 150px auto 25px;
     max-width: 1000px;
     min-height: 500px;
     width: 100%;
     padding: 25px;
     border-radius: 5px;
     box-sizing: content-box;
}

.menu {
     text-align: center;
     background: rgba(255,255,255,0.9);
     font-family: "Comic Sans MS",cursive,sans-serif;
     font-size: 15px;
     height: 40px;
     padding-top: 15px;
     box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
     box-sizing: content-box;
}

.footer {
     border-top: 1px solid #cccccc;
     clear: both;
     font-size: 10px;
}

.footer_content {
     color: #333333;
     font-size: 11px;
     padding: 5px;
}

img {
     border: 0px none;
}

.goed {
     color: #167b00;
     height: 21px;
     padding-left: 5px;
     padding-top: 2px;
}

.fout {
     color: #e23117;
     height: 21px;
     padding-left: 5px;
     padding-top: 2px;
}

.forgotten {
     background: #ffc5bf none repeat scroll 0px 0px;
     border: 2px solid #990000;
}

.submit {
     background-color: #c0ba95;
     color: #c7974c;
     border-radius: 5px;
     border: 0px solid #bbbbbb;
     padding: 7px;
     width: 100px;
     height: 30px;
}

input {
     background-color: #c0ba95;
     border-radius: 5px;
     border: 1px solid #bbbbbb;
     margin: 0px;
     padding: 7px;
     width: 15px;
     height: 15px;
}

h1 {
    color: #c7974c;
}

a {
    color: #c7974c;
}

a:hover {
    color: #c0ba95;
}

@media only screen and (min-width: 750px) {
  #inmenuMob {display: none;}
}

@media only screen and (max-width: 750px) {
  .header {display: none;}
  .footer_content .footer_p { display: none;}
  body {background-color: #fdfdfd;}
  .content {margin: 100px 0px 0px; width: 100%;}
}