		<table >
		<tr><td width="349" height="315" colspan="2" valign="top" background="images/index_131.jpg" style="padding-left:218px; padding-right:65px;" alt=""></td></tr>
		
		<table width="150" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:200" align="left">
		<div style="margin:1px 0px 0px 2px;">
		<tr >
		
            <td width="349" height="315"   >
			
			
			<script type="text/javascript">

var delay = 10000; //set delay between message change (in miliseconds)
var maxsteps=30; // number of steps to take to change from start color to endcolor
var stepdelay=40; // time in miliseconds of a single step
//**Note: maxsteps*stepdelay will be total time in miliseconds of fading effect
var startcolor= new Array(255,255,255); // start color (red, green, blue)
var endcolor=new Array(0,0,0); // end color (red, green, blue)

var fcontent=new Array();
begintag='<div style="font: normal 12px Arial; padding: 5px; font-color:#fff; line-height:1.6em;">'; //set opening tag, such as font declarations
fcontent[0]="<b>Business Advantage's consultancy service has proved highly effective in assisting the development of our corporate and marketing strategy for our operations across four continents. Their services have always been highly professional, delivered on time and with very good outcomes<br><br></b>";
fcontent[1]="<b>Business Advantage was able to provide the combination of research, consultancy and conference facilitating services that we needed. They were very professional and well organised and did a great job of interviewing the customers prior to the conference in Rome.<br></b>";
fcontent[2]="<b>Business Advantage has expertly chaired our international customer conference for several years. Their understanding of our market and the challenges our customers face, combined with their professionalism and enthusiasm have been an important factor in the success of these events <br> <b>";
fcontent[3]="<b>Business Advantage are both professional and friendly - a winning combination. They have an excellent understanding of our industry and are adept at dealing with our international markets. I can trust them to pay attention to the smallest of details on my behalf, and produce work of excellent quality, on time<br> <b>";
closetag='</div>';

var fwidth='240px'; //set scroller width
var fheight='125px'; //set scroller height

var fadelinks=0;  //should links inside scroller content also fade like text? 0 for no, 1 for yes.

///No need to edit below this line/////////////////


var ie4=document.all&&!document.getElementById;
var DOM2=document.getElementById;
var faderdelay=0;
var index=0;


/*Rafael Raposo edited function*/
//function to change content
function changecontent(){
  if (index>=fcontent.length)
    index=0
  if (DOM2){
    document.getElementById("fscroller").style.color="rgb("+startcolor[0]+", "+startcolor[1]+", "+startcolor[2]+")"
    document.getElementById("fscroller").innerHTML=begintag+fcontent[index]+closetag
    if (fadelinks)
      linkcolorchange(1);
    colorfade(1, 15);
  }
  else if (ie4)
    document.all.fscroller.innerHTML=begintag+fcontent[index]+closetag;
  index++
}

// colorfade() partially by Marcio Galli for Netscape Communications.  ////////////
// Modified by Dynamicdrive.com

function linkcolorchange(step){
  var obj=document.getElementById("fscroller").getElementsByTagName("A");
  if (obj.length>0){
    for (i=0;i<obj.length;i++)
      obj[i].style.color=getstepcolor(step);
  }
}

/*Rafael Raposo edited function*/
var fadecounter;
function colorfade(step) {
  if(step<=maxsteps) {	
    document.getElementById("fscroller").style.color=getstepcolor(step);
    if (fadelinks)
      linkcolorchange(step);
    step++;
    fadecounter=setTimeout("colorfade("+step+")",stepdelay);
  }else{
    clearTimeout(fadecounter);
    document.getElementById("fscroller").style.color="rgb("+endcolor[0]+", "+endcolor[1]+", "+endcolor[2]+")";
    setTimeout("changecontent()", delay);
	
  }   
}

/*Rafael Raposo's new function*/
function getstepcolor(step) {
  var diff
  var newcolor=new Array(3);
  for(var i=0;i<3;i++) {
    diff = (startcolor[i]-endcolor[i]);
    if(diff > 0) {
      newcolor[i] = startcolor[i]-(Math.round((diff/maxsteps))*step);
    } else {
      newcolor[i] = startcolor[i]+(Math.round((Math.abs(diff)/maxsteps))*step);
    }
  }
  return ("rgb(" + newcolor[0] + ", " + newcolor[1] + ", " + newcolor[2] + ")");
}

if (ie4||DOM2)
  document.write('<div id="fscroller" style="border:0px solid black;width:'+fwidth+'; margin:-400px 0px 0px 20px; height:'+fheight+'"></div>');

if (window.addEventListener)
window.addEventListener("load", changecontent, false)
else if (window.attachEvent)
window.attachEvent("onload", changecontent)
else if (document.getElementById)
window.onload=changecontent

</script>		  </td>
          </tr>
		  </div>
        </table>	  </td>
	</tr></table>