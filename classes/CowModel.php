<?php
    namespace cow;
	use \stdClass;
    include("Cow.php");

    class CowModel{        
        public function getCowDetails(string $name): string
        {
			$nameKey = "name";
			
            $details = file_get_contents("./../Data/details.json");        
            $data = json_decode($details, true);
        
            foreach ($data as $entry)
            {
				if($entry[$nameKey] != $name)
				{
					continue;
				}
				
				$cow = new Cow();
                foreach ($entry as $key => $value) 
                {
                    $cow->{$key} = $value;
                }
                
				return json_encode($cow);
            }
			
            return null;
        }
    }
?>