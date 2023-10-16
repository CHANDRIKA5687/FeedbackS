<?= $this->extend('layout/faculty') ?>
<?= $this->section("content") ?>
<script>
window.onload = function() {
    // alert('Hello');
    barChart();
    cls();
    drawChart();
};
</script>
<style>
/* .divScroll {
    overflow: scroll;
    height: 100%;
    width: 100%;
} */
</style>
<!-- <div class="divScroll"> -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12"
                style="color:white;background-color:#9246f0;margin-top:10px;font-weight:bold;border-radius:10px">
                <h1 style="margin-left:0px;text-align:center;font-family:serif;font-size:50px">Feedback Report</h1>
            </div>
        </div>
    </div>
    <div class="container text" style="margin-top:50px;">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row" id="graphs">
            <div class="col" style="" id="">
                <?php
                  $totalAverage= $average['lowVoice']+ $average['impBoard']+ $average['FastSyllabus'] + $average['PoorEnglish'] + $average['PoorPre'] + $average['LessSyllabus'] + $average['LackInteraction'] + $average['WrongPro'] +  $average['DoubtNot'] + $average['LessExpla'] + $average['FastSyllabus'] ; 
                  // echo "<script>alert($totalAverage);</script>";
                  $positiveFeedback=round(($totalAverage/11),2);
                  $negativeFeedback=round((100-$positiveFeedback),2);
                  // echo "<script>alert($negativeFeedback);</script>";
                 ?>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
                <canvas id="myChart"
                    style="width:100%;max-width:600px;display:inline;text-align:center ; background-color: white;height:410px"></canvas>
                <script>
                function barChart() {
                    //   document.getElementById("demo");

                    var xValues = ["Low Voice", "Improper Board Writing", "Fast Syllabus", "Poor English",
                        "Poor Preparation", "Less Syllabus", "Lack of Interaction", "Wrong Pronunciation",
                        "Less Explanation", "Fast Speaking"
                    ];
                    var yValues = [<?php echo $average['lowVoice']; ?>, <?php echo $average['impBoard']; ?>,
                        <?php echo $average['FastSyllabus'];  ?>, <?php echo $average['PoorEnglish']; ?>,
                        <?php echo $average['PoorPre']; ?>, <?php echo $average['LessSyllabus']; ?>,
                        <?php echo $average['LackInteraction']; ?>, <?php echo $average['WrongPro']; ?>,
                        <?php echo $average['DoubtNot']; ?>, <?php echo $average['LessExpla']; ?>,
                        <?php echo $average['FastSyllabus']; ?>
                    ];
                    var barColors = ["red", "green", "blue", "orange", "black", "red", "green", "blue", "orange",
                        "brown"
                    ];

                    new Chart("myChart", {
                        type: "bar",
                        data: {
                            labels: xValues,
                            datasets: [{
                                backgroundColor: barColors,
                                data: yValues
                            }]
                        },
                        options: {
                            legend: {
                                display: false
                            },
                            title: {
                                display: true,
                                text: "Question-wise Percentage"
                            }
                        }
                    });
                }
                </script>
                <!-- <h4> Bar-Chart Representation</h4> -->
            </div>
            <div class="col"  style="width:100%;max-width:600px;display:inline;text-align:center ; background-color: white;height:410px" id="piechart">


              <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

              <script type="text/javascript">
                function cls() {
                    // alert(
                    //     "CD"
                    // );
                    // Load google charts
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    // Draw the chart and set the chart values
                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Task', 'Hours per Day'],
                            ['Positive Response', <?php echo $positiveFeedback  ?>],
                            ['Negative Response', <?php echo $negativeFeedback ?>]
                        ]);
                        // echo round($positiveFeedback,2);

                        // Optional; add a title and set the width and height of the chart
                        var options = {
                            'title': 'Overall Average',
                            'width': 550,
                            'height': 400
                        };

                        // Display the chart inside the <div> element with id="piechart"
                        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart.draw(data, options);
                    }
                }
                </script>
                
            </div>
        </div>
        <!-- _________________________________barchart end_____________ -->
        <!-- __________________pie charts start from here________________ -->
        <button style="background-color:green;color:white;margin-top:50px;
   background-color: #4CAF50; 
  border-radius: 8px ;

border:none;
  color: white;
  text-style:bold;
  padding: 15px 30px;
width:20%;
align-self:center;

  text-align: center;
  font-size: 20px;
  font-weight: 50px;
 
  cursor: pointer;size:700px;" onclick="window.print()">Print </button>                
    </div>
    <script>
function printPage(pageNumber) {
//   alert(pageNumber);
  var printContents = document.getElementById("pie").innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;
  window.print();
  document.body.innerHTML = originalContents;
}
</script>


<!-- </div> -->
<?= $this->endSection() ?>