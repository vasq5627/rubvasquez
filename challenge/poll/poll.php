

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

        
        
        <script>
        
        function updatePoll() {
    
    
            $("#container").html("<img src='img/loading.gif' />");
            
            
             $(document).ready(function({
                //alert(  );
             
                $.ajax({
                    url:'connetion.php',
                    data:{ID:ID,yes:yes,maybe:maybe,no:no},  // pass data 
                    dataType:'json',
                    success:function(data){
                        
                    }
                   
                });
            
                
            });
        

            
            //Include here the AJAX call 
            //on Success, call the 'updatePollChart' function passing the percentages of the three choices, for example:
            updatePollChart(25,40,35);
            
            
        }
        
        //You can change the choice names if different from "yes", "maybe", and "no"
        function updatePollChart(yes, maybe, no) {
            Highcharts.chart('container', {
                    chart: {
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false,
                        type: 'pie'
                    },
                    title: {
                        text: ''
                    },
                    tooltip: {
                        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                                style: {
                                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                                }
                            }
                        }
                    },
                    series: [{
                        name: 'Choices',
                        colorByPoint: true,
                        data: [{
                            name: 'Yes',
                            y: yes
                        }, {
                            name: 'Maybe',
                            y: maybe,
                            sliced: true,
                            selected: true
                        }, {
                            name: 'No',
                            y: no
                        }]
                    }]
                });
        }//endFunction
        
        </script>
        
    </head>
    <body>

      <h1> Question Here </h1>
      <div> Three multiple choices here (e.g., yes, maybe, no)</div>
        Is Global Warming Real?
      <input type="radio" class="question" name="yes" value="yes">
      <input type="radio" class="question" name="maybe" value="maybe">
      <input type="radio" class="question" name="no" value="no">
      
     
      <button onclick="updatePoll()">Submit</button>
      <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

    </body>
</html>