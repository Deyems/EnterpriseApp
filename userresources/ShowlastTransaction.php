<div>
    <div>
        <h1>Welcome: <?php echo "$currentlogger" ?></h1>
        <div>
            <div><span>Your Last Transaction</span></div>
            <div style="text-transform:Capitalize">
                <div><p>Service:</p>
                    <p><?php echo $service_type ?></p>
                </div>
                <div>
                    <p>Charges: </p>
                    <p>N<?php echo $last_transaction ?></p>
                </div>
                <div>
                    <p>Date:</p>
                    <p><?php echo $last_trans_date ?></p>
                </div>
                
            </div>
        </div>
    </div>

    <div>
        <h1><?php echo "$headlinedata"?></h1>
        <div>
            <p>
                <?php echo "$newscontent";
                ?>
            </p>
        </div>
    </div>
</div> <!--END OF FIRST CHILD OF CONTAINER-->

