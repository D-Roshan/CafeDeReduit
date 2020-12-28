var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              LoadAboutUs(this);
          }
      };
      xhttp.open("GET", "DataStore//Abt.xml", true);
      xhttp.send();
      
      function LoadAboutUs(xml) {
          var xmlDoc = xml.responseXML;
          var CafeNameByTag = xmlDoc.getElementsByTagName('CafeName')[0];
          /* var CafeDescript = xmlDoc.getElementsByTagName('AboutUsInfo')[0];
          var cafeinfo = CafeDescript.childNodes[0];
          document.getElementById("MoreData").innerHTML = cafeinfo.nodeValue;  */

          var CafeName = CafeNameByTag.childNodes[0];
          document.getElementById("cafeNameDisplay").innerHTML = CafeName.nodeValue; 
          document.getElementById("cafeNameDisplayFooter").innerHTML = CafeName.nodeValue; 
          
          
          
      }