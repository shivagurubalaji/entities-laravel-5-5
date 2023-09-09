@php

$date=date('d/m/Y', strtotime('-8 hour')); //attn: date change when 6pm at sydney
$servername = "13.237.124.159";
$username = "fpmuser";
$password = '@!Fpm$7656';
$dbname = 'MQInstantFunding';//'fplive';
// Create connection

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//$sql = "select * from SwapPoints order by Symbol asc";
$sql = "SELECT * FROM SwapPoints WHERE Symbol NOT LIKE '%.c' AND Symbol NOT LIKE '%.r' AND Symbol NOT LIKE '%.cyr' ORDER BY Symbol ASC";
$result = $conn->query($sql);


$i=0;
	$output .= '
    <div>
        <p style="font-size: 19px!important;text-align: center;line-height: 1.57!important;">The following rates will be applied at 5pm EST <span>'.$date.'</span></p>
        <p style="font-size: 23px!important;text-align: center;line-height: 1.57!important;" class="text-center"> Swap rates are subject to change.<br>Live swap rates are available on the MT4, MT5 and cTrader platforms. </p>

    </div>
    <div class="hidden-xs" style="width:22%;margin: 15px 415px;display:none!important;" >
            <span>
<img class="searchbar-image-align" src="/wp-content/themes/FPMarkets/image-2020/metals/desktop/search-min.png" alt="" title="">
<input class="form-control bg-style-for-box" id="myInput" type="text" placeholder="Search by Symbol" style="border: 1px solid transparent!important;border-image-source: url(/wp-content/themes/FPMarkets/image-2020/metals/desktop/search-2-min.png)!important;border-image-slice: 16!important;border-image-width: 10px!important;"  onkeyup="tableFunction()">
</span>
        </div>
		<div class="col-sm-3 visible-xs" style="display:none;">
                <span>
<img class="searchbar-image-align" src="/wp-content/themes/FPMarkets/image-2020/metals/desktop/search-min.png" alt="" title="">
<input class="form-control bg-style-for-box" id="myInput2" type="text" placeholder="Search by Symbol" style="border: 1px solid transparent!important;border-image-source: url(/wp-content/themes/FPMarkets/image-2020/metals/desktop/search-2-min.png)!important;border-image-slice: 16!important;border-image-width: 10px!important;"  onkeyup="tableFunction2()">
</span>
            </div>
            <style>
             .addBg {
                  background: linear-gradient(to right,rgb(-140, 134, 171) 55%,#26cc68)!important;
             }
             #elections-webinar-series-section{
    padding-top: 15px;
    padding-bottom: 20px;
}   
.table-h1-font{
font-size: 32px;
  font-weight: bold;
  font-stretch: normal;
  font-style: normal;
  line-height: 1;
  letter-spacing: normal;
  text-align: center;
  color: #3e495c;
}
.table-h2-font{
  font-size: 23px;   
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 1;
  letter-spacing: normal;
  text-align: center;
  color: #3e495c;
}
.padding-top-40{
	padding-top:40px;
}
.table-row-head {
    background-image: url(/wp-content/themes/FPMarkets/image-2020/iress-cfd-trading-fees-charges/Rectangle%2012%20copy%206.png);
    background-size: auto;
    background-repeat: no-repeat;
    background-position: center;
    height: 62px;
    position: inherit;
    z-index: 9;
}
.bold-font-table{
 font-size: 18.5px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: 30px;
  letter-spacing: normal;
  text-align: center;
  color: #3e495c;
}
.table-normal-font{
  font-size: 18.5px;
  font-weight: 300;
  font-stretch: normal;
  font-style: normal;
  line-height: 2.7;
  letter-spacing: normal;
  text-align: center;
  color: #3e495c;
}
.header-font-table{
 font-size: 18.5px;
  font-weight: 600;
  font-stretch: normal;
  font-style: normal;
  line-height: 1;
  letter-spacing: normal;
  text-align: center;
  color: #ffffff;
}
.tab-button{
background: #00bdff;
    border: none;
    border-radius: 0 10px 10px 10px;
    font-size: 18.5px;
    font-weight: bold;
    font-stretch: normal;
    font-style: normal;
    letter-spacing: 0.98px;
    text-align: center;
    padding: 7px 20px;
    color: #ffffff!important;
}
table tr td, table tr th {
    border-left: none;
}
table tr th {
    background: none;
}
table tr td, table tr th {
    text-align: left;
    border: none;
    padding: 5px 15px;
    min-width: 200px;
}
.nctable table {
    background: linear-gradient( white, white), linear-gradient(to bottom right,#fff 35%,rgba(0,189,255,.48),#26CC68);
    background-clip: padding-box, border-box;
    background-origin: padding-box, border-box;
    border: 1px solid transparent;
    border-left: none;
    border-radius: 0px 10px 20px 20px;
    border-collapse: collapse;
    overflow: hidden;
    position: inherit;
}
    .text-center {
        text-align: center!important;
    }
@media only screen and (max-width: 600px){
    .hidden-xs {
        display: none;
    }
    .visible-xs {
        display:block;
    }
    table tr td, table tr th {
        padding: 5px 4px!important;
    }
    table tr td, table tr th {
        min-width: 46px!important;
    }
    .pad-lef-right-30-for-car-mob{
        padding-left:30px;
        padding-right:30px;
    }
    .padding-top-40-for-mobile{
        padding-top:40px;
    }
    .bg-for-card-mob{
        background: linear-gradient( white, white), linear-gradient(to bottom ,#fff 0%,rgba(0,189,255,.48),#26CC68);
        background-clip: padding-box, border-box;
        background-origin: padding-box, border-box;
        border: 1px solid transparent;
        border-left: 1px solid transparent;
        border-radius: 0px 10px 20px 20px;
        border-collapse: collapse;
        overflow: hidden;
        position: inherit;
    }
    .card-odd-mobil-aign{
        background: #ffffff;
        border-radius: 0px 0px 20px 20px;
        padding-top: 20px;
        padding-bottom: 30px;
    }
}
            </style>
            ';
	$output .= '
    <div class="col-md-12 padding-15">
        <div style="margin: 0 auto;display: table;">
            <div class="nctable scroll-bar-for-table height-for-forex-table">
                <table class="table  forex-table-style" id="tableFunction" style="border: 2px solid transparent;border-left: 1px solid transparent!important;">
                    <tbody>         
	                    <tr class="addBg">
                            <td class="tbe-hd" style="color: #ffffff!important;font-weight: bold;padding: 20px;text-align: center!important;padding-left: 35px;">Symbol</td>
                            <td class="tbe-hd" style="color: #ffffff!important;font-weight: bold;padding: 20px;text-align: center;">Long</td>
                            <td class="tbe-hd" style="color: #ffffff!important;font-weight: bold;text-align: right!important;padding: 20px;padding-right: 35px;">Short</td>
                        </tr>';
                        
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($i%2 == 0)
           { $class = 'active1'; }
    else
           { $class = 'active0'; }
    
    $output .= '<tr class="'.$class.' '.$i.' tbe-con">';
	$output .= '<td class="text-center font18_5 font300 fptextcolor" style="text-align: left;padding-left: 35px;padding-top: 15px;">'.$row["Symbol"].'</td>';
	$output .= '<td class="font18_5 font300 fptextcolor" style="padding: 15px;text-align:center">'.number_format($row["LongPoint"],2,'.','').'</td>';
	$output .= '<td class="text-center font18_5 font300 fptextcolor" style="padding: 15px;text-align: right!important;padding-right: 35px;">'.number_format($row["ShortPoint"],2,'.','').'</td>';
	$output .= '</tr>';
    $i++;
  }
}    

	$output .= '
                </table>
            </div>
        </div>
    </div>';
	
	return $output;

@endphp