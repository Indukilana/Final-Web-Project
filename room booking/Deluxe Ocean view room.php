<html>
  <head>
      <link rel="stylesheet" type="text/css" href="Room Booking.css">
      <script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>


  </head>
  <body onload="startTime()">
    <div id="navdiv">
      <div id="buttondiv">
        <a href="../index.html"><button id="button">Home</button></a>
        <a href="../index.html"><button id="button">About Us</button></a>
        <a href="../c_s/contactus.php"><button id="button">Contact Us</button></a>
        <section class="dropdown">
          <button id="button">Accommodation</button>
            <section class="dropdown-content">
            <a href="../rooms/rooms.php" style="text-align: center;">Rooms</a>
            <a href="../rooms/rooms.php" style="text-align: center;">Suits</a>
      
            </section>
          </section>
        <a href="../c_s/Gallary.html"><button id="button">Gallery</button></a>
        <section class="dropdown">
          <button id="button">Registration</button>
          <section class="dropdown-content">
            <a href="../Sign up/login page.php" style="text-align: center;">Login</a>
            <a href="../Sign up/sign up.php"style="text-align: center;">Sign up</a>
          </section>
        </section>
      </div>
    </div>

 <!-- top image-->
<img src="pic2.jpg" style="width:100%;">

<div id="socialdiv"><a href="https://www.instagram.com/?hl=en"><img src="insta.png" id="insta"></a></br><a href="https://www.facebook.com/"><img src="face.png" id="face"><a/><a href="https://twitter.com/explore"><img src="twitter.png" id="twitter"></a></div>

<h1 id="h1top"> Deluxe ocean view room</h1>
<hr style="width:80%;">

</br>
 <!-- room info-->
  <font=Microsoft Sans Serif>

    <div id="info">

        <h2>Sophisticated style, stunning ocean vistas</h2>
        <p style="color:#999999;">Deluxe Ocean View Rooms are beautifully appointed with a contemporary design and local Sri Lankan touches. All rooms look out over the Indian Ocean and presenting some of the nice views in the city.</p>
        <h2>Features</h2>
        <ul style="color:#999999;">
          <li>Each room offers 42 sqm / 452 sqf of luxury.</li>
          <li>Panoramic views of the Indian Ocean and Galle Face Green.</li>
          <li>Large, modern bathroom with walk-in shower and separate bathtub.</li>
          <li>Wi-Fi.</li>
          <li>Bed with 300-thread-count lightweight duvet.</li>
        </ul>
        <h2>Amenities</h2>
        <h2>Bath & Personal Care</h2>
        <ul style="color:#999999;">
          <li>Walk-in shower and/or separate bathtub</li>
          <li>Bathroom mirror</li>
          <li>Plush bathrobes and slippers</li>
          <li>300 thread count linen</li>
          <li>Pillow menu with hypoallergenic options</li>
          <li>Iron and ironing board</li>
        </ul>
        <h2>Media & Entertainment</h2>
        <ul  style="color:#999999;">
          <li>High-speed Internet access</li>
          <li>Flatscreen TV</li>
          <li>Wide selection of international and local television channels</li>
        </ul>
        <h2>Office Equipment & Stationery</h2>
        <ul  style="color:#999999;">
          <li>Work space</li>
          <li>International Direct Dial telephone with two lines</li>
          <li>Electronic safe</li>
          <li>USB charge ports</li>
          <li>Digital alarm clock</li>
          <li>Laptop charging socket</li>
        </ul>
        <h2>Refreshments</h2>
        <ul  style="color:#999999;">
          <li>Minibar</li>
          <li>Water</li>
          <li>Tea and coffee making facilities</li>
        </ul>

    </div>
  </font>
   <!-- clander div-->
      <div id="calander">

        <h2 style="text-align:center; color:#999999;">Ready To Book?</h2>
<table  border="0" style="margin-left:16%;">
  <tr>
       <!-- insering time and date-->
        <td id="timetabletd"><div id="txt" ></div></td>
        <td></td>  <td></td>  <td></td>
        <td id="timetabletd" style="padding-left:0;">
          <p id="demo1"></p>

          <script>
          var d = new Date();
          document.getElementById("demo1").innerHTML = d.getDate();
          </script>

        </td>
        <td id="timetabletd">:</td>
        <td id="timetabletd">

          <p id="demo2"></p>

          <script>
          var d = new Date();
          document.getElementById("demo2").innerHTML = d.getMonth() + 1;
          </script>
        </td>
         <td id="timetabletd">:</td>
        <td id="timetabletd">
          <p id="demo3"></p>

          <script>
          var d = new Date();
          document.getElementById("demo3").innerHTML = d.getFullYear();
          </script>


        </td>
  </tr>
</table>


      </br>
       <!-- calander-->
      <table border="0" style="margin-left:17%;">
      <tr style="color:white;font-size:23;">
        <td class="days">Mon</td>
        <td class="days">Tue</td>
        <td class="days">Wed</td>
        <td class="days">Thu</td>
        <td class="days">Fri</td>
        <td class="days">Sat</td>
        <td class="days">Sun</td>
      </tr>

    </table>
  </br>
      <table  border="0" id="calandernum">
      <tr>
        <td style="color:#666666;">27</td>
        <td style="color:#666666;">28</td>
        <td style="color:#666666;">29</td>
        <td style="color:#666666;">30</td>
        <td style="color:#666666;">31</td>
        <td id="dayhover">1</td>
        <td style="color:red;" id="dayhover">2</td>
      </tr>
      <tr>
        <td id="dayhover">3</td>
        <td id="dayhover">4</td>
        <td id="dayhover">5</td>
        <td id="dayhover">6</td>
        <td id="dayhover">7</td>
        <td id="dayhover">8</td>
        <td style="color:red;" id="dayhover">9</td>
      </tr>
      <tr>
        <td id="dayhover">10</td>
        <td id="dayhover">11</td>
        <td id="dayhover">12</td>
        <td id="dayhover">13</td>
        <td id="dayhover">14</td>
        <td id="dayhover">15</td>
        <td style="color:red;" id="dayhover">16</td>
      </tr>
      <tr>
        <td id="dayhover">17</td>
        <td id="dayhover">18</td>
        <td id="dayhover">19</td>
        <td id="dayhover">20</td>
        <td id="dayhover">21</td>
        <td id="dayhover">22</td>
        <td style="color:red;" id="dayhover">23</td>
      </tr>
      <tr>
        <td id="dayhover">24</td>
        <td id="dayhover">25</td>
        <td id="dayhover">26</td>
        <td id="dayhover">27</td>
        <td id="dayhover">28</td>
        <td id="dayhover">29</td>
        <td style="color:red;" id="dayhover">30</td>
      </tr>
      <tr>
        <td id="dayhover">31</td>
        <td style="color:#666666;">1</td>
        <td style="color:#666666;">2</td>
        <td style="color:#666666;">3</td>
        <td style="color:#666666;">4</td>
        <td style="color:#666666;">5</td>
        <td style="color:#666666;">6</td>
      </tr>
    </table></br>
    <p style="text-align:center;margin-left:3.5%; margin-right:3.5%; font-style:italic;">* please note that you can only book a room for a one day through online.If you need more please contact us.</p>
   </br>
    <p style="text-align:center;margin-left:3%; margin-right:3%;">Check the availability and deside a date</p>


    <form action="bookingqry.php" method="POST" onsubmit="checkform()" name="form1">
      
      </br>
        <table style="margin-left:3.5%;" border="0">
          <tr>
            <td style="color:white;text-align:left;" id="booktxt">Enter your name</td>
            <td style="width:69.5%;padding-left:5%;"><input type="text" name="name" id="bookinput"></td>
          </tr>
          <tr>
            <td style="color:white; text-align:left;" id="booktxt">Phone:</td>
            <td style="width:69.5%;padding-left:5%;"><input type="text" name="phone" id="bookinput"></td>
          </tr>
          <tr>
            <td style="color:white;text-align:left;" id="booktxt">NIC</td>
            <td style="width:69.5%;padding-left:5%;"><input type="text" name="nic" id="bookinput"></td>
          </tr>
          <tr>
            <td style="color:white;text-align:left;" id="booktxt">
              <label for="start">Check-In:</label>
      
            <td style="width:69.5%;padding-left:5%;"><input type="date" id="bookinput"  name="bdate"   min="2020-01-01" max="2023-12-31"></td>
            </td>
          </tr>
          
        </table>
      </br>
      <input type="hidden" name="room" value="Deluxe Ocean View">
      <input type="submit" name="submit" value="book" style="width:80;height:40;background-color:black;border:solid;border-color:white;color:white;border-radius:10px; margin-left:80%;">
      
        </form>
    </div>

</br></br></br>

     <div id="bottomdiv" >
       <table style="color:#999999;float:left;margin-left:9%;margin-top:3%;font-size:18;">
         <tr>
           <td style="text-align:left;">Home</td>
            <td style="text-align:left;">Rooms</td>
         </tr>
         <tr>
           <td style="text-align:left;">About Us</td>
            <td style="text-align:left;">Gallery</td>
         </tr>
         <tr>
           <td style="text-align:left;">Contact Us</td>
            <td style="text-align:left;">Services</td>
         </tr>
         <tr>
           <td style="text-align:left;">Registration</td>
         </tr>
       </table>


       <table border="0" class="bottomtable" >
         <tr>
           <td colspan="2" class="bottomtd" style="padding-top:30;font-family:Microsoft Sans Serif;font-size:18;">Unlock Possibilities</td>

         </tr>
         <tr>
           <td  colspan="2" class="bottomtd" style="font-family:Microsoft Sans Serif;font-size:14;">Enhance the way you travel with our mobile app
     </td>

         <tr>
             <td rowspan="2" class="bottomtd"></br><img src="qr.png" style="height:90; width:90; margin-top:8;"></td>
               <td class="bottomtd"></br><img src="googleplay.png" style="height:40; width:100; margin-top:8; border-radius: 10%;"></td>
         </tr>
         <tr>

               <td class="bottomtd"><img src="apple.jpg" style="height:40; width:100;border-radius: 10%;"></td>
         </tr>
     </table>
     </div>


          <p style="color:#999999;text-align:center;font-size:19.2;">Privacy Policy | Terms & Conditions | Safety & Security | Supplier Code Of Conduct</p>
          <p style="color:#999999;text-align:center;">© 2020 SSS International Hotel Management Ltd. All Rights Reserved. ICP license: 17055189</p>


<!-- dropdown javascript -->
     <script>
     var x, i, j, l, ll, selElmnt, a, b, c;
     /*look for any elements with the class "custom-select":*/
     x = document.getElementsByClassName("custom-select");
     l = x.length;
     for (i = 0; i < l; i++) {
       selElmnt = x[i].getElementsByTagName("select")[0];
       ll = selElmnt.length;
       /*for each element, create a new DIV that will act as the selected item:*/
       a = document.createElement("DIV");
       a.setAttribute("class", "select-selected");
       a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
       x[i].appendChild(a);
       /*for each element, create a new DIV that will contain the option list:*/
       b = document.createElement("DIV");
       b.setAttribute("class", "select-items select-hide");
       for (j = 1; j < ll; j++) {
         /*for each option in the original select element,
         create a new DIV that will act as an option item:*/
         c = document.createElement("DIV");
         c.innerHTML = selElmnt.options[j].innerHTML;
         c.addEventListener("click", function(e) {
             /*when an item is clicked, update the original select box,
             and the selected item:*/
             var y, i, k, s, h, sl, yl;
             s = this.parentNode.parentNode.getElementsByTagName("select")[0];
             sl = s.length;
             h = this.parentNode.previousSibling;
             for (i = 0; i < sl; i++) {
               if (s.options[i].innerHTML == this.innerHTML) {
                 s.selectedIndex = i;
                 h.innerHTML = this.innerHTML;
                 y = this.parentNode.getElementsByClassName("same-as-selected");
                 yl = y.length;
                 for (k = 0; k < yl; k++) {
                   y[k].removeAttribute("class");
                 }
                 this.setAttribute("class", "same-as-selected");
                 break;
               }
             }
             h.click();
         });
         b.appendChild(c);
       }
       x[i].appendChild(b);
       a.addEventListener("click", function(e) {
           /*when the select box is clicked, close any other select boxes,
           and open/close the current select box:*/
           e.stopPropagation();
           closeAllSelect(this);
           this.nextSibling.classList.toggle("select-hide");
           this.classList.toggle("select-arrow-active");
         });
     }
     function closeAllSelect(elmnt) {
       /*a function that will close all select boxes in the document,
       except the current select box:*/
       var x, y, i, xl, yl, arrNo = [];
       x = document.getElementsByClassName("select-items");
       y = document.getElementsByClassName("select-selected");
       xl = x.length;
       yl = y.length;
       for (i = 0; i < yl; i++) {
         if (elmnt == y[i]) {
           arrNo.push(i)
         } else {
           y[i].classList.remove("select-arrow-active");
         }
       }
       for (i = 0; i < xl; i++) {
         if (arrNo.indexOf(i)) {
           x[i].classList.add("select-hide");
         }
       }
     }
     /*if the user clicks anywhere outside the select box,
     then close all select boxes:*/
     document.addEventListener("click", closeAllSelect);
     </script>



  </body>
</html>


