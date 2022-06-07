import Axios from "axios";
window.$ = window.jQuery = require("jquery");

const apiKey = "DINngHSiTz58Z5fDF5pThkg1IrJA87je";
let query = "";
let addressList = document.getElementById("address_list");

// $("#addressInput").on("input", function () {
//     query = $(this).val();

//     Axios.get(`https://api.tomtom.com/search/2/geocode/${query}.json`, {
//         params: { key: apiKey },
//     })
//     .then((res) => {
//         const { results } = res.data;

//         for (let index = 0; index < results.length; index++) {
//             const addresses = results;

//             for (let index = 0; index < addresses.length; index++) {
//                 const element = addresses[index].address.freeformAddress;

//                 const node = document.createElement("li");
//                 const textnode = document.createTextNode(element);
//                 node.appendChild(textnode);
//                 addressList.append(node);
//             }

//             console.log(addressList);
//         }
//     });
// });

function showResult(str) {
    if (str.length==0) {
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      return;
    }
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else {  // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("livesearch").innerHTML=this.responseText;
        document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      }
    }
    xmlhttp.open("GET","livesearch.php?q="+str,true);
    xmlhttp.send();
  }