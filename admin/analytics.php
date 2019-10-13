<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<?php
    if($_SESSION["logger"]){
    
    ?>
    <head>
        <title>Web reports</title>
        <?php
            include "linkedfiles.php";
        ?>
    </head>
    <body>
        <div class="wrapper">
            <?php
                include "header.php";
            ?>
                
                <div class="main_con">
                    <div class="main-header">
                        <br><br><br>
                        <h1>Graphical Reports</h1>
                    </div>
                    
                    <div class="main-grid">
                        <div><h1>Number of Users</h1>
                            <p><?php echo $count_user = mysqli_num_rows($no_of_users); ?></p></div>
                        <div id="container2"></div>
                        <div id="container3"></div>
                        <div id="container4"></div>
                    </div>

                </div> <!--End of Main Con-->
            </section>
            
            <?php
                include "footer.php";
            ?>

        </div> <!--END OF WRAPPER-->
    </body>
    <script type="text/javascript">
        
        //{name: 'John',data: [5, 10, 3]}
        <?php
            /* SERVICES VARIABLES */
            $SMScounter = mysqli_num_rows($bulkSMS_t);
            $airtimecounter = mysqli_num_rows($airtime_t);
            $tvsubcounter = mysqli_num_rows($TV_sub_t);
            $datacounter = mysqli_num_rows($data_3g_sub_t);
            $electcounter = mysqli_num_rows($elect_bills_t);
            $smilecounter = mysqli_num_rows($smile_t);

            /* DATA SUBSCRIPTION VARIABLES */
            $data_net1 = mysqli_num_rows($data_network1);
            $data_net2 = mysqli_num_rows($data_network2);
            $data_net3 = mysqli_num_rows($data_network3);
            $data_net4 = mysqli_num_rows($data_network4);
            $data_net5 = mysqli_num_rows($data_network5);

            /* AIRTIME VARIABLES */ 
            $net1 = mysqli_num_rows($network1);
            $net2 = mysqli_num_rows($network2);
            $net3 = mysqli_num_rows($network3);
            $net4 = mysqli_num_rows($network4);
            $net5 = mysqli_num_rows($network5);
        ?>
        document.addEventListener('DOMContentLoaded', function(){
            var myChart = Highcharts.chart('container2', 
            {chart: {type: 'bar'},
                title: {text: 'Transactions'},
                xAxis: {categories: [
                '<?php echo "$num_bulkSMS_t"; ?>', 
                '<?php echo "$num_airtime_t"; ?>',  
                '<?php echo "$num_TV_sub_t"; ?>', 
                '<?php echo "$num_data_3g_sub_t"; ?>', 
                '<?php echo "$num_elect_bills_t"; ?>', 
                '<?php echo "$num_smile_t"; ?>' 
                ]},
                yAxis: {title: {text: 'Usage'} },
                series: [{name: 'Transactions',
                data: [ 
                    <?php echo $SMScounter; ?>,
                    <?php echo $airtimecounter; ?>,
                    <?php echo $tvsubcounter; ?>,
                    <?php echo $datacounter; ?>,
                    <?php echo $electcounter; ?>,
                    <?php echo $smilecounter; ?>
                    ]}
                    ]
            }); 
        });

        document.addEventListener('DOMContentLoaded', function(){
            var myChart = Highcharts.chart('container3', 
            {chart: {type: 'bar'},
                title: {text: 'Airtime Transactions'},
                xAxis: {categories: [
                '<?php echo "$mtn"; ?>', 
                '<?php echo "$airtel"; ?>',  
                '<?php echo "$etisalat"; ?>', 
                '<?php echo "$glo"; ?>', 
                '<?php echo "$starcomms"; ?>'
                ]},
                yAxis: {title: {text: 'Usage'} },
                series: [{name: 'Transactions',
                data: [ 
                    <?php echo $net1; ?>,
                    <?php echo $net2; ?>,
                    <?php echo $net3; ?>,
                    <?php echo $net4; ?>,
                    <?php echo $net5; ?>
                    ]}
                    ]
            }); 
        });

        document.addEventListener('DOMContentLoaded', function(){
            var myChart = Highcharts.chart('container4', 
            {chart: {type: 'bar'},
                title: {text: 'Data Subscriptions'},
                xAxis: {categories: [
                '<?php echo "$mtn_data"; ?>', 
                '<?php echo "$airtel_data"; ?>',  
                '<?php echo "$etisalat_data"; ?>', 
                '<?php echo "$glo_data"; ?>', 
                '<?php echo "$starcomms_data"; ?>'
                ]},
                yAxis: {title: {text: 'Usage'} },
                series: [{name: 'Transactions',
                data: [ 
                    <?php echo $data_net1; ?>,
                    <?php echo $data_net2; ?>,
                    <?php echo $data_net3; ?>,
                    <?php echo $data_net4; ?>,
                    <?php echo $data_net5; ?>
                    ]}
                    ]
            }); 
        });

    </script>
    <?php
    } else{
        echo "<script>window.location = 'adminlogin.php';</script>";
    }
    ?>
</html>
