<?php
    namespace cow;
    include("CowModel.php");

    class CowController{
        
        public function getCowDetails(string $name): string
        {
			$cowModel = new CowModel();
            return $cowModel -> getCowDetails($name);
        }
    }
	
	$cowController = new CowController();
	if (isset($_GET) && isset($_GET['request']) && $_GET['request'] == "getRequest")
    {
        if(trim($_GET['name']) != null)
        {
            echo $cowController -> getCowDetails($_GET['name']);
        }
    }
	
	echo null;
?>