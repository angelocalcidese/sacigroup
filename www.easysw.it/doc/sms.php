										
<!-- Versione 1.0.5 -->
<!-- Aggiornamento prefissi -->
<html>
<head>
<SCRIPT LANGUAGE="JavaScript" src="FileMain.js"></SCRIPT>
</head>
<body>

<table width="300" border="1" cellspacing="0" cellpadding="3" height="170" bordercolor=#007198>

<style type="text/css"><!--
   .testo1 { color: #007198; font-style: bold; font-size: 11px; line-height: 10px; font-family: Arial, Helvetica, sans-serif; text-align: left }
   .testo1b { color: #007198; font-style: bold; font-size: 12px; line-height: 10px; font-family: Arial, Helvetica, sans-serif; text-align: left }
   .testo2 { color: #ff0000; font-style: bold; font-size: 14px; line-height: 10px; font-family: Arial, Helvetica, sans-serif; text-align: left } 
--></style>

<script Language="JavaScript">
<!--
function messcontacar()  {
	conta=160-document.smsArubaForm.smstesto.value.length ;
	document.smsArubaForm.smscar.value=conta;
	if (conta < 0)  {
	    	smsArubaForm.smstesto.value = smsArubaForm.smstesto.value.substr(0, 160);
	    	document.smsArubaForm.smscar.value=0;
      }
  }

function sms_Valid(TheForm,StrVar1,StrVar2,StrVar3,StrVar4,StrVar6,StrVar7) {
	theForm=document.smsArubaForm;
	bono=true;

	prefiss=theForm.smsprefcell.selectedIndex;
	if ( document.smsArubaForm.smsprefcell.value == "")  {
	        alert("Seleziona prefisso cellulare.");
		theForm.smsprefcell.focus();
		bono=false;
	      }
	if (bono==true & theForm.smsdestinatario.value.length < 1) {
		     alert("Attenzione: inserire numero cellulare Destinatario!");
			 theForm.smsdestinatario.focus();
	         bono=false;
	      }
	if (bono==true & theForm.smsdestinatario.value.length < 6) {
		     alert("Attenzione: lunghezza numero cellulare Destinatario non valida!");
			 theForm.smsdestinatario.focus();
	         bono=false;
	      }
	if (bono==true & theForm.smsdestinatario.value.length > 7) {
		     alert("Attenzione: numero cellulare Destinatario troppo lungo!");
			 theForm.smsdestinatario.focus();
	         bono=false;
	      }
	if (bono==true) {		  
	  var checkOK = "0123456789";
	  var checkStr = theForm.smsdestinatario.value;
	  var allValid = true;
	  for (i = 0;  i < checkStr.length;  i++)
	  {
	    ch = checkStr.charAt(i);
	    for (j = 0;  j < checkOK.length;  j++)
	      if (ch == checkOK.charAt(j))
	        break;
	    if (j == checkOK.length) {
	      allValid = false;
	      break;
	    }
	  }
	  if (!allValid) {
	    alert("Inserire solo numeri nel campo Numero Cellulare.");
	    theForm.smsdestinatario.focus();
	    bono=false;
	  }
	}
	if (bono==true & theForm.smstesto.value.length < 1) {
		     alert("Attenzione: inserire testo messaggio!");
			 theForm.smstesto.focus();
	         bono=false;
	      }  

	/*if (theForm.smstesto.value.indexOf('"') != -1) {
			alert('Il carattere  "  non è ammesso.')
			return false
			}*/

	if (bono==false) 
	{
		return false
	}
	else
	{
		GeneraCookie(StrVar1,StrVar2,StrVar3,StrVar4,StrVar6,StrVar7)
		Redirect()
	}
}


/////////////////////////////////
function Redirect()
{
	window.open("ProxyPage.php?TipoOperazione=UNO","finestra","toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,width=400,height=300,top=200,left=450")
}


function GeneraCookie(StrVar1,StrVar2,StrVar3,StrVar4,StrVar6,StrVar7)
{
	var UrlCliente = ""
	setCookie("TestoMessaggio",StrVar1)
	setCookie("NumeroMessaggio",StrVar2)
	setCookie("PrefissoMessaggio",StrVar3)
	setCookie("MittenteMessaggio",StrVar4)
	setCookie("smstipodest",StrVar6)
	setCookie("tptarget",StrVar7)
	UrlCliente = document.location.host + document.location.pathname
	setCookie("UrlCliente",UrlCliente)
}
///////////////////////////////////////


//-->
</script>

<form method="POST" name="smsArubaForm">
	<input type="hidden" name="tptarget" value="1">
	<input type=hidden name="smstipodest" value=30>
     <tr><td width="300">
     <table width="300" border="0" cellspacing="0" cellpadding="0">
	        <tr><td colspan=2>
    		<table border=0 cellpadding=0 cellspacing=0>
    	            <tr><td colspan=2 align="center"><font class="testo1">Numero Cellulare DESTINATARIO </font>
					<font class="testo2"> *</font></td></tr>
		    <tr><td><select name="smsprefcell" style="width:80px;" class=testo1b>
				<option selected>Prefisso</option>
				<option>TIM</option>
<option value="330">330</option>
<option value="331">331</option>
<option value="333">333</option>
<option value="334">334</option>
<option value="335">335</option>
<option value="336">336</option>
<option value="337">337</option>
<option value="338">338</option>
<option value="339">339</option>
<option value="360">360</option>
<option value="363">363</option>
<option value="366">366</option>
<option value="368">368</option>
<option>VODAFONE</option>
<option value="340">340</option>
<option value="343">343</option>
<option value="345">345</option>
<option value="346">346</option>
<option value="347">347</option>
<option value="348">348</option>
<option value="349">349</option>
<option>WIND</option>
<option value="320">320</option>
<option value="323">323</option>
<option value="327">327</option>
<option value="328">328</option>
<option value="329">329</option>
<option value="380">380</option>
<option value="383">383</option>
<option value="388">388</option>
<option value="389">389</option>
<option>WIND (BLU)</option>
<option value="380">380</option>
<option value="383">383</option>
<option value="388">388</option>
<option value="389">389</option>
<option>H3G - 3</option>
<option value="390">390</option>
<option value="391">391</option>
<option value="392">392</option>
<option value="393">393</option>
<option>A-Mobile</option>
<option value="389">389</option>
<option>BT Mobile</option>
<option value="3777">3777</option>
<option>CoopVoce</option>
<option value="3311">3311</option>
<option>Conad INSIM</option>
<option value="3779">3779</option>
<option>Daily Telecom Mobile</option>
<option value="3778">3778</option>
<option>Fastweb</option>
<option value="373">373</option>
<option>MTV Mobile</option>
<option value="366">366</option>
<option value="331">331</option>
<option>Noverca</option>
<option value="3707">3707</option>
<option>PosteMobile</option>
<option value="3771">3771</option>
<option value="3772">3772</option>
<option>Tiscali</option>
<option value="3701">3701</option>
<option>UNOMobile</option>
<option value="3773">3773</option>
                            </select>
            </td>
            <td><input type=text name="smsdestinatario" maxlength=7 size=16 style="WIDTH: 150px"></td></tr>
    		</table>
            </td></tr>
            <tr><td width="180">
    		<table border=0 cellpadding=0 cellspacing=0>
    	            <tr><td><font class="testo1">MITTENTE (max 11 car.) </font></td></tr>
    		</table>
            </td>
            <td><font class="testo1">  </font></td></tr>
    	    <tr><td>
                <input type=text name="smsmittente" maxlength=11 size=12 style="WIDTH: 150px">
            </td>
            <td>
    		<table border=0 cellpadding=0 cellspacing=0>
    		         <tr><td><input type=text value="160" name="smscar" disabled 
    				 size="3" maxlength="20" style="width:50px"></td>
    				 <td><font class="testo1"> Caratteri  disponibili</font></td></tr>
    		</table>
    	    </td></tr>
    	    <tr Valign=bottom><td height=22 colspan=2>
    		<table border=0 cellpadding=0 cellspacing=0>
    			    <tr><td><font class="testo1">TESTO DEL MESSAGGIO (max 160 car.)</font></td>
    			    <td width=5><font class="testo2"> *</font></td></tr>
    		</table>
            </td></tr>
    	    <tr><td height=56 width=256 colspan=2 Valign=top>  
    		    <textarea cols="33" rows="3" style="scrollbar-3dlight-color: FFFFFF; scrollbar-arrow-color: 808080; scrollbar-base-color: FFFFFF; scrollbar-darkshadow-color: FFFFFF; scrollbar-face-color: FFFFFF; scrollbar-highlight-color: FFFFFF; scrollbar-shadow-color: FFFFFF; scrollbar-track-color: FFFFFF" type="text" name="smstesto" onkeyup="javascript:messcontacar();" onchange="javascript:messcontacar();" style="WIDTH: 290px"></textarea>
            </td></tr>
			<tr><td colspan=2>
            <table width="300" border="0" cellspacing="0" cellpadding="0" height="24">
                  <tr><td width=130 Valign=top> 
                  <div align="left">
        		  <table border=0 cellpadding=0 cellspacing=0>
        				<tr><td height=15><font class="testo2"><b>* </b></font></td>
        				<td><font class="testo1"><b>campo obbligatorio</b></font></td></tr>
        		  </table>
                  </div></td>
                  <td width="110">
        		  <table border=0 cellpadding=0 cellspacing=0>
        		        <tr><td width=8><font class="testo2"><b> </b></font></td>
						<td><input type="button" OnClick="return sms_Valid(this,document.smsArubaForm.smstesto.value,document.smsArubaForm.smsdestinatario.value,document.smsArubaForm.smsprefcell.value,document.smsArubaForm.smsmittente.value,document.smsArubaForm.smstipodest.value,document.smsArubaForm.tptarget.value)" name="Invia" value="Invia Messaggio" style="width:130px"></td></tr>
        		  </table>
                  </td></tr>       
            </table>
     </td></tr>
     </table>
     </td></tr>
</form>
</table>
</body>
</html>


									
