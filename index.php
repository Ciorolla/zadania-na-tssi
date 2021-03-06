<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Szyfrowanie</title>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<style type="text/css">
body,td,th {
	font-family: Lato, PT Sans, Verdana, Geneva, sans-serif;
	font-weight: 300;
	color: #555555;
	text-align: center;
	line-height: 150%;
	
}
body {
	background-color: #FBFBF9;
	font-family: "Lato", PT Sans, Verdana, Geneva, sans-serif;
	font-weight: 300;
}
.a16 {
	font-size: 24px;
	font-family: "Lato", PT Sans, Verdana, Geneva, sans-serif;
	font-weight: 300;
	;
	text-align: center;
}

a:link {
	text-decoration: none;
	color: #669900;
	
}
a:visited {
	text-decoration: none;
	color: #669900;
}
a:hover {
	text-decoration: underline;
	color: #4265AE;
}
a:active {
	text-decoration: none;
	font-family: Lato, "PT Sans", Verdana, Geneva, sans-serif;
	color: #669900;
}
.LEFT {
	text-align: left;
}
.left {
	text-align: left;
}
.FONT24 {
	font-size: 20px;
}
.a15{
  font-size: 20px;
	font-family: "Lato", PT Sans, Verdana, Geneva, sans-serif;
	font-weight: 300;
	text-align: center;
  
}
.aut:hover{

  
  
}

.right {
	text-align: right;
}

#zajawka {
	color: #575756;
	font-size: 18px;
}
#red {
	color: #A00;
}
#green {
	color: #669900;
}



#top table tr td {
	color: #444444;
}
</style>

<!-- Skrypty -->

<script type="text/javascript" src="whcookies.js"></script>
<script type="text/javascript" src="overlibmws.js"></script>
<script src='bind-polyfill.js'></script>
<script src='smooth-scroll.js'></script>
<script>
		smoothScroll.init({
			speed: 1000,
			easing: 'easeInOutCubic',
			offset: 0,
			updateURL: true,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
</script>


</head>

<body id="top">
<br />
<table width="800" max-width=40em; border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="20%" valign="bottom"><span class="FONT24"><a data-scroll data-options='{ "easing": "linear" }' href="#wstep">Szyfr</a></span></td>
    <td width="20%" valign="bottom"><span class="FONT24"><a data-scroll data-options='{ "easing": "linear" }' href="#hist">Historia</a></span></td>
    <td width="20%" valign="bottom"><span class="FONT24"><a data-scroll data-options='{ "easing": "linear" }' href="#usage">Użycie</a></span></td>
    <td width="20%" valign="bottom"><span class="FONT24"><a data-scroll data-options='{ "easing": "linear" }' href="#rodzaje">Rodzaje</a></span></td>
    <td width="20%" valign="bottom"><span class="FONT24"><a data-scroll data-options='{ "easing": "linear" }' href="#info">Informacje</a></span></td>
  </tr>
</table>
  
    <a name="wstep" id="wstep"></a>
<table width="800px" max-width=40em; border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td align="right" style="text-align: right"><hr color="#84b727">
    
   </td>
  </tr>
  <tr><td align="left" class="left"><a
 href="javascript:void(0);"
 onmouseover="return overlib(' Bruce Schneier: Kryptografia dla praktyków: protokoły, algorytmy i programy źródłowe w języku C', CAPTION, 'Źródło',
  WRAP, STATUS, 'This is a tooltip popup with a caption.');"
 onmouseout="nd();">źródło</a></td></tr>
  <tr>
    
    <td><p class="a16"><a data-scroll data-options='{ "easing": "linear" }' href="#top" >Szyfr<br />
    </a></p>
      <p><br />
        <span id="zajawka">
        Szyfr (inaczej kryptograficzny algorytm szyfrujący) – funkcja matematyczna wykorzystywana do szyfrowania tekstu jawnego lub jego deszyfrowania. 
        Zazwyczaj jedna funkcja wykorzystywana jest do szyfrowania, a inna do deszyfrowania wiadomości. 
        Wiadomość przed zaszyfrowaniem nazywana jest tekstem jawnym, zaś wiadomość zaszyfrowaną nazywamy szyfrogramem. 
        Proces zamiany tekstu jawnego na szyfrogram nazywamy szyfrowaniem
      </p>
      </br>
      <p class="left">Rodzaje algorytmów:</p>
      <ul class="left">
        <li>Algorytm ograniczony - Algorytmem ograniczonym nazywamy taki algorytm, który zapewnia bezpieczeństwo szyfrogramu tylko wtedy, 
        gdy nie jest znana postać algorytmu (znajomość algorytmu pozwala odszyfrować szyfrogram). 
        Algorytmy te są popularne w zastosowaniach, gdzie wysoki poziom bezpieczeństwa nie jest wymagany</li>
        <li>Algorytm z kluczem - Algorytm z kluczem to taki, w którym do zaszyfrowania oraz odszyfrowania wiadomości wykorzystywane są klucze. 
        W przeciwieństwie do algorytmów ograniczonych, bezpieczeństwo wiadomości oparte jest na kluczu.
        W przypadku wielu algorytmów klucz szyfrujący jest inny niż klucz deszyfrujący</li>
      </ul>
      <p>&nbsp; </p>


  <tr >
    

    <td align="right" style="text-align: right">
     <a name="hist" id="hist"></a>
    <a data-scroll data-options='{ "easing": "linear" }' href="#top"> wróć &uarr;</a><hr color="#84b727">
    </td>
    
  </tr>
  
  <tr>
    <tr><td align="left" class="left"><a
 href="javascript:void(0);"
 onmouseover="return overlib('https://www.spyshop.pl/blog/krotka-historia-szyfrowania/<br>'
 + 'http://masz-wybor.com.pl/historia-szyfrow/', CAPTION, 'Źródło',
  WRAP, STATUS, 'This is a tooltip popup with a caption.');"
 onmouseout="nd();">źródło</a></td></tr>
  <tr>
    <td>
    <p class="a16"><a data-scroll data-options='{ "easing": "linear" }' href="#top">Historia</a>
      
    </p>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="45%" valign="top"><p class="LEFT">Historia szyfrowania zaczyna się prawie tak wcześnie jak historia cywilizacji, najpierw ukrywano wiadomość, ale co jeżeli trafi ona w niepowołane ręce? 
        Z tego powodu wymyślono szyfry i narzędzia szyfrujące</br>
        
        
        </p>
          <p class="LEFT">Jednym z pierwszych narzędzi wykorzystywanych do szyfrowania był tzw. Skytale </br>
          Pochodzi ze starożytnej Grecji, gdzie chętnie używali go już wojowniczy Spartanie. Jak działało? Na kawałek rzeźbionego drewna nawijano pergamin z zapisaną wiadomością. Aby ją odczytać, druga osoba musiała mieć też drewno o tej samej średnicy, dzięki czemu litery układały się w prawidłowym ciągu.
          </br>
            </p><img src="skytale.png" width="75%" align="center">
            
            <br>
            <p></p>
          <p class="LEFT">Zanim powstały komputery istniały inne bardzo zaawansowane maszyny szyfrujące świetnym przykładem może być M-209 - 
maszyna, która została zaprojektowana przez marynarkę wojenną Stanów Zjednoczonych. Używano jej głównie podczas drugiej wojny światowej, choć także podczas wojny koreańskiej, która miała miejsce w latach 1950-1953. Kodowanie odbywało się tutaj przez ustawianie 6 dysków w losowej kolejności oraz używaniu specjalnych pokręteł. Wiadomość drukowana była na taśmie. Aby ją odczytać, odbiorca musiał znać ten sam układ talerzy. Zasada działania była podobna do tej z enigmy</p>
          </p>
        
          <img src="m209.png" width="75%"></img>
          </td>
        <td>&nbsp;</td>
        <td width="45%" valign="top">
          <p class="LEFT">
            Nie ma bardziej znanej maszyny szyfrującej niż enigma, najsłynniejsza maszyna drugiej wojny światowej najpierw była używana komercyjnie, 
            a dopiero później zrobiła karierę w armii III Rzeszy Niemieckiej.
            Działanie Enigmy opierało się głównie o elektromechaniczne części oraz wirniki. 
            Każda zaszyfrowana tutaj wiadomość, miała swoje własne ustawienia, oparte o drukowaną wcześniej książkę z kodami. 
            Choć mogłoby się wydawać, że kod Enigmy jest nie do złamania, udało się to polskim i brytyjskim kryptologom. 
            Pod koniec wojny już każda z zaszyfrowanych wiadomości była odczytywana, 
            a jej rozszyfrowanie zajmowało przeważnie 1 dzień. Maszyny przy użyciu których alianci łamali szyfr enigmy były pierwowzorami komputerów.
          </p>
          </br>
          <img src="enigma.jpg" width="75%"></img>
          <p class="LEFT">
            Oprócz szyfrów istnieją również alfabety szyfrowe, świetnym przykładem może być szyfr Marii Stuart. W alfabecie szyfrowym każda z liter miała przyporządkowany jej znak, w dzisiejszych czasach nie korzysta się już z alfabetów szyfrowych ze względu na łatwość łamania.
          </p>
          </br>
          <img src="stuart.gif" width="75%"></img>
          <p class="LEFT">
            
          </p>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" style="text-align: right">
     <a name="usage" id="usage"></a>
    <a data-scroll data-options='{ "easing": "linear" }' href="#top"> wróć &uarr;</a><hr color="#84b727"> 
    
    
    </td>
  </tr>
      <tr><td align="left" class="left"><a
 href="javascript:void(0);"
 onmouseover="return overlib('Twórczość własna', CAPTION, 'Źródło',
  WRAP, STATUS, 'This is a tooltip popup with a caption.');"
 onmouseout="nd();">źródło</a></td></tr>
  <tr>
    <td><p class="a16"><a data-scroll data-options='{ "easing": "linear" }' href="#top">Użycie</a></p>
    <P>Nasz własny skrypt szyfrujący <a
 href="javascript:void(0);"
 onmouseover="return overlib('Zaszyfrowanie wiadomości przy użyciu szyfru przestawieniowego polega na przestawieniu<br> liter alfabetu o X miejsc w prawo.<br> Dzięki temu np. A zamieniało się w D, B w E i tak dalej', CAPTION, 'Szyfr przestawieniowy',
  WRAP, STATUS, 'This is a tooltip popup with a caption.');"
 onmouseout="nd();">szyfrem przestawieniowym</a></P>
 <br>
<div id="cesarDisplay"></div>
 <input type="text" name="wszyfr" id="cesarText" placeholder="Tekst do zaszyfrowania"/><br>
 <input type="number" name="shift" id="cesarShift" placeholder="Przesunięcie"/><br>
 <span  name="shift" id="cesarEncryptResult"></span>
 <span name="shift" id="cesarDecryptResult"></span>
<script type = 'text/javascript' >
/*
HTML:
id cesarText - pole z tekstem do zaszyfrowania
id cesarShift - pole z przesuniÄ™ciem
id cesarEncryptResult - pole na zakodowany Å‚aÅ„cuch
id cesarDecryptResult - pole na odkodowany Å‚aÅ„cuch
id cesarDisplay - pole na tabelkÄ™
*/


function cesarLetter(letter, shift){
	var code = letter.charCodeAt(0);
	if(!((code >= 65 && code <= 90 )||(code >= 97 && code <= 122))){return letter;} //Not an ASCII letter
	var big = false;
	if(code >= 65 && code <= 90){big = true;}
  	shift = shift % 26;
  	code += shift;
	if(big){
    	if(code > 90){code = 65 + code - 90 - 1;}
		if(code < 65){code = 90 + code - 65 + 1;}
  	}
  	else{
    	if(code > 122){code = 97 + code - 122 - 1;}
    	if(code < 97){code = 122 + code - 97 + 1;}
  	}
  	return String.fromCharCode(code);
}

function cesarString(string , shift){
	var newString = "";
	for(var i = 0;i < string.length;i++){
  		newString += cesarLetter(string.charAt(i),shift);
  	}
  return newString;
}
function encrypt(){
	var string = document.getElementById("cesarText").value;
	var shift = document.getElementById("cesarShift").value;
	document.getElementById("cesarEncryptResult").innerHTML = cesarString(string,shift)
}
function decrypt(){
	var string = document.getElementById("cesarText").value;
	var shift = document.getElementById("cesarShift").value;
	document.getElementById("cesarDecryptResult").innerHTML = cesarString(string,-shift)
}
function cesarDisplay(){
	var shift = document.getElementById("cesarShift").value;
	var normal = "";
	var shifted = "";
	for(var i = 65;i <= 90;i++){
		var char = String.fromCharCode(i);
		normal += char;
		shifted += cesarLetter(char, shift);
	}
	document.getElementById("cesarDisplay").innerHTML = normal + '<br>' + shifted;
	encrypt();
	decrypt();
	
}
function cesarInit(){
	document.getElementById("cesarShift").addEventListener('input', cesarDisplay);
	document.getElementById("cesarText").addEventListener('input', cesarDisplay);
}


cesarInit();

</script>
    </td>
	</tr>
	<tr>
	<td>
    <P>Aby zaszyfrować tekst proszę ustawić w dolnym okienku wartość o którą mają zostać przesunięte litery a następnie wpisać tekst do zaszyfrowania w okienko wyżej. 
	   Aby odszyfrować tekst proszę wpisać zaszyfrowany tekst w pierwsze okienko</P>
  </tr>
  <tr>
    <td align="right" style="text-align: right">
     <a name="rodzaje" id="rodzaje"></a>
  <a data-scroll data-options='{ "easing": "linear" }' href="#top"> wróć &uarr;</a><hr color="#84b727"> </td> 
  </tr>
  
  <tr><td align="left" class="left"><a
 href="javascript:void(0);"
 onmouseover="return overlib('https://www.securelist.pl/analysis/5906,ef_g73_5r_kilka_slow_o_szyfrowaniu_i_algorytmach.html', CAPTION, 'Źródło',
  WRAP, STATUS, 'This is a tooltip popup with a caption.');"
 onmouseout="nd();">źródło</a></td></tr>
  <tr>
  <tr>
<td ><p class="a16"><a data-scroll data-options='{ "easing": "linear" }' href="#top">Algorytmy szyfrujące</a>
      
  </p></td>  </tr>
  <tr>
    <td class="LEFT">
      <p>Jest wiele sposobów szyfrowania. Oto kilka przykładowych sposobów.</p>
      <table width="100%" border="0" cellspacing="0" cellpadding="0" valign="top">
        <tr valign="top" bgcolor="dddddd">
          <td width="20%" class="LEFT"><p>Nazwa algorytmu</p></td>
          <td class="LEFT"><p>Opis</p>
          <strong id="red">ZŁAMANY</strong>&nbsp;<strong>/&nbsp;</strong><strong id="green">BEZPIECZNY</strong></td>
          <td width="30%"><p>Twórcy</p><br />
</td>
        </tr>
        
        <tr valign="top" >
          <td valign="top" class="LEFT"><p>Szyfr Cezara</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>Jest to jeden z najstarszych znanych szyfrów, który jak nazwa wskazuje był stosowany przez rzymskiego wodza, 
          Juliusza Cezara. Stosował on tę metodę zabezpieczania przed wysłaniem ważnych wiadomości, 
          np. poprzez gońca. Miało to uniemożliwić lokalizację wojsk w przypadku przechwycenia informacji. 
          Jego działanie polega na zastępowaniu litery właściwej, znakiem znajdującym się 3 miejsca dalej w alfabecie. 
          Szyfry, których działanie polega na podstawianiu jednej litery w miejsce drugiej, nazywamy szyframi podstawieniowymi.</p>
          <strong id="red">ZŁAMANY</strong></td>
          <td><p>Gaius Iulius Caesar</p></td>
        </tr>
        
        <tr valign="top" bgcolor="#EEEEEE">
          <td valign="top" class="LEFT"><p>ROT13</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>Jest to szyfrowanie polegające na przesuwaniu liter o 13 znaków w prawo w alfabecie,
          począwszy od szyfrowanej litery. Działanie szyfru było zatem bardzo proste i nie zapewniał on należytej ochrony. 
          Obecnie stosuje się go raczej jako ciekawostkę lub do zakodowania mało ważnych informacji. Małe i duże litery nie są rozróżniane.
          Jest bardzo podobny do szyfru cezara, różni się tylko przesunięciem.</p>
          <strong id="red">ZŁAMANY</strong></td>
          <td><p>Nie znani</p></td>
        </tr>
       
        <tr valign="top" >
          <td valign="top" class="LEFT"><p>ADFGVX</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>Ten szyfr o dziwnie brzmiącej nazwie został użyty przez Niemcy w czasie I Wojny 
          Światowej do szyfrowania rozkazów 
          i wytycznych.
          Jest to udoskonalona wersja szyfru ADFGX. Zasada jego działania opiera się na nadaniu każdej literze tekstu szyfrowanego pary 
          liter A, D, F, G, V lub X.
          Następnie tworzone jest słowo kluczowe, aby dodatkowo utrudnić kryptoanalizę. C
          ałość zbudowana jest z tabelki, z literami i cyframi w środku.
          Osoba, do której wysyłano wiadomość musiała znać zarówno słowo kluczowe jak i rozmieszczenie liter w tabeli.</p>
          <strong id="red">ZŁAMANY</strong></td>
          <td><p>Niemieckie biuro szyfrów</p></td>
        </tr>
        
        <tr valign="top" bgcolor="#EEEEEE">
          <td valign="top" class="LEFT"><p>One Time Pad</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>Jest to szyfr idealnie bezpieczny, nie istnieje metoda złamania go 
          (wliczając w to metodę brute force czyli podstawiania każdego znaku w celu ustalenia poprawnej kolejności). 
          Został stworzony w roku 1917 przez Gilberta Vernama. Obecnie istnieją dwie wersje szyfru - binarna oraz zwykła, znakowa. 
          Różnią się one metodą szyfrowania tekstu - w jednej wykorzystuje się algorytm XOR, a w drugim Vigenere'a. To co sprawia, 
          że hasło jest niespotykanie skuteczne to jego długość (taka sama, jak długość wiadomości), losowość oraz fakt, że może być 
          użyte tylko jeden raz. Odpowiedź dla nadawcy jest generowana przy użyciu nowego klucza. Zarówno algorytm XOR jak i Vigenere'a 
          są szyframi podstawieniowymi, 
          jednak spełnienie trzech wcześniejszych warunków zapewnia całej metodzie szyfrowania bezwarunkowe bezpieczeństwo.</p>
          <strong id="green">BEZPIECZNY</strong></td>
          <td><p>Gilbert Vernam</br>Blaise de Vigenère</p></td>
        </tr>
        
         <tr valign="top" >
          <td valign="top" class="LEFT"><p>Advanced Encryption Standard (Rijndael)</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>AES jest szyfrem symetrycznym. 
          Jest finalistą konkursu, który został ogłoszony, by zastąpić przestarzały już i zapewniający zbyt małe bezpieczeństwo standard DES. 
          AES używa kluczy o długości 128, 196 i 256 bitów. Jest algorytmem operującym na blokach o zmiennej długości, a biorąc pod uwagę fakt, 
          że i same klucze są różnej długości, zapewnia bardzo wysoki poziom bezpieczeństwa.</p>
          <strong id="green">BEZPIECZNY</strong></td>
          <td><p>Vincent Rijmen</br>Joan Daemen</p></td>
        </tr>
        
        <tr valign="top" bgcolor="#EEEEEE">
          <td valign="top" class="LEFT"><p>RSA</p>
            <p><br />
</p></td>
          <td class="LEFT"><p>RSA jest czasami nazywany algorytmem Rivest, Shamir, Adleman - 
          od nazwisk twórców. Jest to pierwszy algorytm bazujący na kryptografii asymetrycznej, ten fakt sprawił, że RSA jest chętnie używany do podpisów cyfrowych. Trzej wymienieni twórcy, 
          starali się znaleźć praktyczne rozwiązanie zaproponowanej przez Diffiego i Hellmana koncepcji używania kluczy publicznych 
          i prywatnych do szyfrowania. Po zastosowaniu pewnych modyfikacji, udało się zrealizować dotąd nieosiągalną ideę udostępniania wszystkim użytkownikom jednego klucza,
          a szyfrowania drugim, indywidualnym. Obecnie ten standard szyfrowania jest stosowany najczęściej</p>
          <strong id="green">BEZPIECZNY</strong></td>
          <td><p>Ronald Linn Rivest</br>Adi Szamir</br>Leonard Adleman</p></td>
        </tr>
        
      </table>
    <p>&nbsp;</p></td>
  </tr>
  
    <tr>
    <td align="right" style="text-align: right">
     <a name="info" id="info"></a>
    <a data-scroll data-options='{ "easing": "linear" }' href="#top"> wróć &uarr;</a>
    <hr color="#84b727"> 
    
    
    </td>
  </tr>

  <tr class="lfet">
    <td>
   	<p class="a16"><a data-scroll data-options='{ "easing": "linear" }' href="#top"> O tej stronie</a>
      
    </p>
    <p><br></p>
    <p></p>
    <table align="center">
    <tr><p class="a15">TWÓRCY</p></tr>
    <TR >
      <td width="33%"><img src="fedox1.png" width="40%" class="aut"></td>
      <td>&nbsp;</td>
      <td width="33%"><img src="horodecki1.png" width="40%" class="aut"></td>
      <td>&nbsp;</td>
      <td width="33%"><img src="rangar1.png" width="40%" class="aut"></td>
    </TR>
    <tr>
      <td>Fedox (Mikołaj Bogucki)</td>
      <td>&nbsp;</td>
      <td>Michał Horodecki</td>
      <td>&nbsp;</td>
      <td>Rangar (Szymon Ciosek)</td>
      
    </tr>
    
    <tr>
      <td>Strona (wykonanie, projekt, tekst)</td>
      <td>&nbsp;</td>
      <td>Strona (tekst) | Skrypt szyfrujący</td>
      <td>&nbsp;</td>
      <td>Strona (wykonanie)</td>
    </tr>
    </table>
    <br>
    <table align="center">
      <tr>
        <td>Strona powstała na potrzeby projektu z informatyki realizowanego w klasie 3 gimnazjum</br>
    Nauczyciel prowadzący: Mateusz Gałązka</br>
    Szkoła: Gimnazjum nr 2 im. A. Mickiewicza w Krakowie</BR>
    Rok szkolny: 2017/2018</td>
      </tr>
    </table>
   
    
 <hr color="#84b727">   
      
</td>
  </tr>
  <tr>
    <td> <p>
 
    
    
  
    
    
</p></td>
  </tr>
</table>
<p align="center"><a data-scroll data-options='{ "easing": "linear" }' href="#top"> wróć &uarr;</a></p><br />












</body>
</html>

























































































































































































































<!-- WOW zeskrolował(e || a)ś tak nisko!!!!

Serio podziwiam, łap mały easteregg jako nagrodę!

_________ad88888888888888888888888a,
________a88888"8888888888888888888888,
______,8888"__"P888888888888888888888b,
______d88_________`""P88888888888888888,
_____,8888b_______________""88888888888888,
_____d8P'''__,aa,______________""888888888b
_____888bbdd888888ba,__,I_________"88888888,
_____8888888888888888ba8"_________,88888888b
____,888888888888888888b,________,8888888888
____(88888888888888888888,______,88888888888,
____d888888888888888888888,____,8___"8888888b
____88888888888888888888888__.;8'"""__(888888
____8888888888888I"8888888P_,8"_,aaa,__888888
____888888888888I:8888888"_,8"__`b8d'__(88888
____(8888888888I'888888P'_,8)__________88888
_____88888888I"__8888P'__,8")__________88888
_____8888888I'___888"___,8"_(._.)_______88888
_____(8888I"_____"88,__,8"_____________,8888P
______888I'_______"P8_,8"_____________,88888)
_____(88I'__________",8"__M""""""M___,888888'
____,8I"____________,8(____"aaaa"___,8888888
___,8I'____________,888a___________,8888888)
__,8I'____________,888888,_______,888888888
_,8I'____________,8888888'`-===-'888888888'
,8I'____________,8888888"________88888888"
8I'____________,8"____88_________"888888P
8I____________,8'_____88__________`P888"
8I___________,8I______88____________"8ba,.
(8,_________,8P'______88______________88""8bma,.
_8I________,8P'_______88,______________"8b___""P8ma,
_(8,______,8d"________`88,_______________"8b_____`"8a
__8I_____,8dP_________,8X8,________________"8b.____:8b
__(8____,8dP'__,I____,8XXX8,________________`88,____8)
___8,___8dP'__,I____,8XxxxX8,_____I,_________8X8,__,8
___8I___8P'__,I____,8XxxxxxX8,_____I,________`8X88,I8
___I8,__"___,I____,8XxxxxxxxX8b,____I,________8XXX88I,
___`8I______I'__,8XxxxxxxxxxxxXX8____I________8XXxxXX8,
____8I_____(8__,8XxxxxxxxxxxxxxxX8___I________8XxxxxxXX8,
___,8I_____I[_,8XxxxxxxxxxxxxxxxxX8__8________8XxxxxxxxX8,
___d8I,____I[_8XxxxxxxxxxxxxxxxxxX8b_8_______(8XxxxxxxxxX8,
___888I____`8,8XxxxxxxxxxxxxxxxxxxX8_8,_____,8XxxxxxxxxxxX8
___8888,____"88XxxxxxxxxxxxxxxxxxxX8)8I____.8XxxxxxxxxxxxX8
__,8888I_____88XxxxxxxxxxxxxxxxxxxX8_`8,__,8XxxxxxxxxxxxX8"
__d88888_____`8XXxxxxxxxxxxxxxxxxX8'__`8,,8XxxxxxxxxxxxX8"
__888888I_____`8XXxxxxxxxxxxxxxxX8'____"88XxxxxxxxxxxxX8"
__88888888bbaaaa88XXxxxxxxxxxxXX8)______)8XXxxxxxxxxXX8"
__8888888I,_``""""""8888888888888888aaaaa8888XxxxxXX8"
__(8888888I,______________________.__```"""""88888P"
___88888888I,___________________,8I___8,_______I8"
____"""88888I,________________,8I'____"I8,____;8"
___________`8I,_____________,8I'_______`I8,___8)
____________`8I,___________,8I'__________I8__:8'
_____________`8I,_________,8I'___________I8__:8
______________`8I_______,8I'_____________`8__(8
_______________8I_____,8I'________________8__(8;
_______________8I____,8"__________________I___88,
______________.8I___,8'_______________________8"8,
______________(PI___'8_______________________,8,`8,
_____________.88'____________,@@___________.a8X8,`8,
_____________(88_____________@@@_________,a8XX888,`8,
____________(888_____________@@'_______,d8XX8"__"b_`8,
___________.8888,_____________________a8XXX8"____"a_`8,
__________.888X88___________________,d8XX8I"______9,_`8,
_________.88:8XX8,_________________a8XxX8I'_______`8__`8,
________.88'_8XxX8a_____________,ad8XxX8I'________,8___`8,
________d8'__8XxxxX8ba,______,ad8XxxX8I"__________8__,__`8,
_______(8I___8XxxxxxX888888888XxxxX8I"____________8__II__`8
_______8I'___"8XxxxxxxxxxxxxxxxxxX8I'____________(8__8)___8;
______(8I_____8XxxxxxxxxxxxxxxxxX8"______________(8__8)___8I
______8P'_____(8XxxxxxxxxxxxxxX8I'________________8,_(8___:8
_____(8'_______8XxxxxxxxxxxxxxX8'_________________`8,_8____8
_____8I________`8XxxxxxxxxxxxX8'___________________`8,8___;8
_____8'_________`8XxxxxxxxxxX8'_____________________`8I__,8'
_____8___________`8XxxxxxxxX8'_______________________8'_,8'
_____8____________`8XxxxxxX8'________________________8_,8'
_____8_____________`8XxxxX8'________________________d'_8'
_____8______________`8XxxX8_________________________8_8'
_____8________________"8X8'_________________________"8"
_____8,________________`88___________________________8
_____8I________________,8'__________________________d)
_____`8,_______________d8__________________________,8
______(b_______________8'_________________________,8'
_______8,_____________dP_________________________,8'
_______(b_____________8'________________________,8'
________8,___________d8________________________,8'
________(b___________8'_______________________,8'
_________8,_________a8_______________________,8'
_________(b_________8'______________________,8'
__________8,_______,8______________________,8'
__________(b_______8'_____________________,8'
___________8,_____,8_____________________,8'
___________(b_____8'____________________,8'
____________8,___d8____________________,8'
____________(b__,8'___________________,8'
_____________8,,I8___________________,8'
_____________I8I8'__________________,8'
_____________`I8I__________________,8'
______________I8'_________________,8'
______________"8_________________,8'
______________(8________________,8'
______________8I_______________,8'
______________(b,___8,________,8)
______________`8I___"88______,8i8,
_______________(b,__________,8"8")
_______________`8I__,8______8)_8_8
________________8I__8I______"__8_8
________________(b__8I_________8_8
________________`8__(8,________b_8,
_________________8___8)________"b"8,
_________________8___8(_________"b"8
_________________8___"I__________"b8,
_________________8________________`8)
_________________8_________________I8
_________________8_________________(8
_________________8,_________________8,
_________________Ib_________________8)
_________________(8_________________I8
__________________8_________________I8
__________________8_________________I8
__________________8,________________I8
__________________Ib________________8I
__________________(8_______________(8'
___________________8_______________I8
___________________8,______________8I
___________________Ib_____________(8'
___________________(8_____________I8
___________________`8_____________8I
____________________8____________(8'
____________________8,___________I8
____________________Ib___________8I
____________________(8___________8'
_____________________8,_________(8
_____________________Ib_________I8
_____________________(8_________8I
______________________8,________8'
______________________(b_______(8
_______________________8,______I8
_______________________I8______I8
_______________________(8______I8
________________________8______I8,
________________________8______8_8,
________________________8,_____8_8'
_______________________,I8_____"8"
______________________,8"8,_____8,
_____________________,8'_`8_____`b
____________________,8'___8______8,
___________________,8'____(a_____`b
__________________,8'_____`8______8,
__________________I8/______8______`b,
__________________I8-/_____8_______`8,
__________________(8/-/____8________`8,
___________________8I/-/__,8_________`8
___________________`8I/--,I8________-8)
____________________`8I,,d8I_______-8)
______________________"bdI"8,_____-I8
___________________________`8,___-I8'



-->