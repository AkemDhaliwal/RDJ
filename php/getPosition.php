<?php
session_start();

        $position  = $_SESSION['position'];

        if($position == 1)
        {
            	echo '<b>Position : </b>Sheeter Operator';
        }
        else if($position == 2)
        {
            	echo '<b>Position :</b>Mixer Operator';
        }
        else if($position == 3)
        {
            	echo '<b>Position : </b>Oven Operator';
        }
        else if($position == 4)
        {
            	echo '<b>Position : </b>Packer';
        }
        else if($position == 5)
        {
            	echo '<b>Position : </b>Team lead (Packing)';
        }
        else if($position == 6)
        {
            	echo '<b>Position : </b>Line Operator';
        }
        else if($position == 7)
        {
            	echo '<b>Position : </b>Maintenance';
        }
        else if($position == 8)
        {
            	echo '<b>Position : </b>Shipping/Reciving';
        }
        else if($position == 9)
        {
            	echo '<b>Position : </b>Forklift Operator';
        }
        else if($position == 10)
        {
            	echo '<b>Position : </b>Supervisor(Bake-end)';
        }
        else if($position == 11)
        {
            	echo '<b>Position : </b>Supervisor(Packing)';
        }
        else if($position == 12)
        {
            	echo '<b>Position : </b>Supervisor(Wearhouse)';
        }
        else if($position == 13)
        {
            	echo '<b>Position : </b>Training Manager';
        }

?>