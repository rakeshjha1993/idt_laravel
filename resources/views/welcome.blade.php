@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4" id="image-map">
            <img src="{{asset('images/india_map_new.png')}}" alt="map" usemap="#Map">
						<map name="Map" id="Map">
						    <area alt="" title="Jodhpur" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="69,150,65,155,65,162,69,166,74,168,81,169,86,163,89,155,85,147,75,147" style="outline:none;" onclick="jodh();">
  							<area alt="" title="Thrissur" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="116,353,134,358,136,369,130,379,119,383,109,377,108,362" style="outline:none;" onclick="thrs();">
  							<area alt="" title="Amritsar" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="97,96,105,92,116,96,121,104,119,112,112,120,102,117,96,109" style="outline:none;" onclick="amrs();">
  							<area alt="" title="Dhanbad" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="239,194,252,193,261,198,262,210,257,217,247,219,237,215,236,203" style="outline:none;" onclick="dhan();">
  							<area alt="" title="Dehradun" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="146,110,162,108,171,117,171,126,163,134,151,133,144,122,143,113" style="outline:none;" onclick="deh();">
  							<area alt="" title="Warangal" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="159,267,170,265,179,266,182,275,182,286,176,292,166,292,158,285,156,277" style="outline:none;" onclick="warn();">
  							<area alt="" title="Allahabad" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="192,166,207,164,215,174,214,188,198,193,187,182" style="outline:none;" onclick="alh();">
  							<area alt="" title="Jabalpur" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="149,207,168,206,177,215,170,232,152,233,146,221" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Goa" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="92,287,104,287,114,291,109,306,101,311,91,311,87,304,84,295,87,287" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Vadodara" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="82,210,96,209,104,218,99,230,90,236,80,236,72,220" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Pune" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="91,243,107,249,108,261,97,268,90,266,82,259,83,250" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Bangalore" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="125,320,144,321,150,336,143,345,128,343,124,333" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Chennai" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="162,322,180,321,188,331,188,340,178,345,169,346,162,342,161,335" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Agartala" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="322,191,336,187,350,194,348,209,337,213,326,208" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Asansol" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="267,186,284,187,288,199,280,208,271,209,265,205,263,198,262,194" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Mysore" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="100,320,109,318,118,320,117,327,115,330,110,335,104,329" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Kozhikode" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="98,326,93,336,103,344,108,339,108,337,110,333" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Pondicherry" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="149,347,156,339,164,344,168,350,157,353,155,355" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Coimbator" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="124,329,133,336,125,345,116,342,115,333" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Vijaywada" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="162,276,174,273,182,283,175,290,164,289" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Bhubneswar" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="220,225,231,235,224,241,215,240,215,230" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Nagpur" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="141,220,155,221,155,230,150,234,142,231,138,227" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Indore" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="109,200,100,207,105,216,115,218,119,210,118,201" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Surat" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="78,218,90,224,89,234,82,237,77,233,68,228" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Raipur" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="187,198,185,210,193,216,202,210,200,197" style="outline:none;" onclick="jbl();">
  							<area alt="" title="Ranchi" href="http://analytics.trai.gov.in:8001/trai/qos/method.php" shape="poly" coords="206,183,204,194,211,202,223,200,223,192,220,183" style="outline:none;" onclick="jbl();">
  							<!--<area alt="" title="Chandigarh" href="javascript:;" shape="poly" coords="127,94,120,99,117,107,120,116,128,119,136,119,142,113,144,106,142,100,138,95" style="outline:none;" onClick="chd();" />
  							<area alt="" title="Delhi" href="javascript:;" shape="poly" coords="145,126,138,128,133,133,132,141,136,148,143,150,151,148,155,141,155,135,152,129" style="outline:none;" onClick="dlh();"/>
  							<area alt="" title="Ahmedabad" href="javascript:;" shape="poly" coords="77,191,70,196,67,201,67,210,72,216,78,216,87,215,90,208,92,200,88,193" style="outline:none;" onClick="amd();" />
  							<area alt="" title="Mumbai" href="javascript:;" shape="poly" coords="85,245,78,248,74,257,74,265,81,270,89,272,96,269,101,263,101,254,95,247" style="outline:none;" onClick="mub();"/>
  							<area alt="" title="Trivandrum" href="javascript:;" shape="poly" coords="135,368,126,371,124,379,124,388,131,394,141,394,146,393,151,384,150,376,144,370" style="outline:none;" onClick="trv();" />
  							<area alt="" title="Hyderabad" href="javascript:;" shape="poly" coords="157,269,151,272,146,277,146,284,148,292,157,295,168,297,173,287,173,274,165,270" style="outline:none;" onClick="hyd();"/>
  							<area alt="" title="Bhopal" href="javascript:;" shape="poly" coords="138,194,132,201,129,208,129,218,137,219,147,220,155,219,158,207,157,200,147,195"  style="outline:none;" onClick="bpl();"/>
  							<area alt="" title="Ranchi" href="javascript:;" shape="poly" coords="243,190,235,194,232,205,235,213,246,217,256,217,260,208,261,197,253,191" style="outline:none;" onClick="rch();"/>
  							<area alt="" title="Lucknow" href="javascript:;" shape="poly" coords="195,137,192,140,182,143,184,146,183,151,186,156,191,159,199,162,203,162,208,159,212,152,208,145,203,140" style="outline:none;" onClick="lck();"/>
  							<area alt="" title="Kanpur" href="javascript:;" shape="poly" coords="175,156,170,166,170,171,174,175,181,177,190,177,195,173,198,168,195,161,180,153"  style="outline:none;" onClick="knp();"/>
  							<area alt="" title="Darjeeling & Sikkim" href="javascript:;" shape="poly" coords="286,131,280,140,280,153,281,157,281,168,292,175,300,174,305,166,305,158,305,152,305,144,301,133,295,129" style="outline:none;" onClick="drj();"/>-->
						</map>



                    <!--<map name="planetmap">
                      <area shape="poly" coords="156,149,152,156,155,163,161,164,165,164,170,161,171,157,170,152,163,147" alt="map"  onClick="hello();" />
                    </map>-->
      </div>
      <div class="col-md-8">
        <div id="carousel-welcome-page" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('images/5.png')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
               <h5>Report and Analysis</h5>
             </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('images/6.png')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>View Result By Cities</h5>
                <p>Conducts Independent Test Drive Across India.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('images/8.png')}}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>TRAI</h5>
                <p>Conducts Independent Test Drive Across India.</p>
              </div>

            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-welcome-page" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-welcome-page" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col-md-12 pt-2" id="welcome-scroller">
        <h4 ><marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">The Independent Drive Test has been carried out by M/s PhiMetrics Technologies Pvt. Ltd. on behalf of TRAI in Jodhpur City &amp; adjoining areas from 9:00 AM to 9:00 PM; 1st&nbsp; Aug to 5th Aug 2017. The drive test covered a drive route of approximately 610 KMs and 6 hotspots over a period of 5 days. Approximately 750 calls were made for each of the 16 networks: seven 2G networks, six 3G networks, two CDMA and one LTE network covering 9 unique TSPs. Dehradun: The Independent Drive Test has been carried out by M/s PhiMetrics Technologies Pvt. Ltd. on behalf of TRAI Dehradun City &amp; adjoining areas, from 9:00 AM to 9:00 PM; 9th Aug to 11th Aug 2017. The drive test covered a drive route of approximately 300 KMs and 6 hotspots over a period of 3 days. Approximately 520 calls were made for each of the 16 networks: eight 2G networks, five 3G networks, two CDMA and one LTE network covering 10 unique TSPs. Dhanbad: The Independent Drive Test has been carried out by M/s PhiMetrics Technologies Pvt. Ltd. on behalf of TRAIIn Dhanbad City &amp; adjoining areas from 9:00 AM to 9:00 PM; 7th Aug to 11th Aug 2017. The drive test covered a drive route of approximately 659 KMs and 6 hotspots over a period of 5 days. Approximately 900 calls were made for each of the 16 networks: eight 2G networks, six 3G networks, one CDMA and one LTE network covering 9 unique TSPs. Thrissur: The Independent Drive Test has been carried out by M/s PhiMetrics Technologies Pvt. Ltd. on behalf of TRAIIn Thrissur City &amp; adjoining areas from 9:00 AM to 9:00 PM; 7th Aug to 11th Aug 2017. The drive test covered a drive route of approximately 635 KMs and 5 hotspots over a period of 5 days. Approximately 920 calls were made for each of the 14 networks: Six 2G networks, five 3G networks, two CDMA and one LTE network covering 8 unique TSPs. Warangal : Independent Drive test has been carried out by M/s Phimetrics Technologies Pvt. Ltd. on behalf of TRAI in Warangal City &amp; adjoining areas from 9:00 AM to 9:00 PM; 9th Aug to 11th  Aug 2017. The drive test covered a drive route of approximately 300 KMs and 4 hotspots over a period of 3 days.  Approximately 630 calls were made for each of the networks: Eight 2G networks, four 3G networks, one CDMA and one LTE network covering 9 unique TSPs. Amritsar: The Independent Drive Test has been carried out by M/s PhiMetrics Technologies Pvt. Ltd. on behalf of TRAI In Amritsar City &amp; adjoining areas from 9:00 AM to 9:00 PM; 21nd Aug to 24th Aug 2017. The drive test covered a drive route of 600 KMs over a period of 4 days. Approximately 850 calls were made for each of the 16 networks: seven 2G networks, seven 3G networks, one CDMA and one LTE network covering 8 unique TSPs
        <img src="http://counter8.01counter.com/private/freecounterstat.php?c=c804f59b3dada81434e5a322ff0d80a7" border="0" title="website hit counter" alt="website hit counter" style="visibility:initial;"></marquee></h4>
  			     <!--<h4 style="margin-top:10px;"><marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">Independent Drive test was conducted in Chandigarh & surrounding  areas from 9:00 AM to 9:PM from 11th  to 13th of May 2016. The drive test covered an area of approximately 300 km over a period of 3 days. A Total of ~4200calls were made for eight 2G networks, three 3G networks and  one CDMA networks covering 9 operators.</marquee></h4>
  			    <h4 style="margin-top:10px;"><marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">Independent Drive test was conducted in Hyderabad & surrounding areas from 9:00 AM to 9:PM from 5th to 7th of May 2016. The drive test covered an area of approximately 300 km over a period of 3 days. A Total of ~7450 calls were made for eight 2G networks, four 3G networks and  two CDMA networks covering 9 operators.</marquee></h4> -->
                  <!--<h4 style="margin-top:10px;"><marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">Delhi & NCR were driven for ~600 Km over a period of 4 days(May 3-6,2016). > 12000 calls made across 14 operators between 9:00 am - 9:00 pm each day.</marquee></h4>-->
      </div>
        <div class="col-md-12" id="copyright-bar-welcome">
          <div class="col-lg-12" style="background-color:#023980; color:#FFFFFF">
            <div class="row ">
                <p class="mx-auto pt-3" ><a style="color:white;" href="#">By PhiMetrics Technologies Pvt. Ltd.</a></p>
            </div>
          </div>
        </div>
  </div>
@endsection
