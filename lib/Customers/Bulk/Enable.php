<?php 

namespace USAePay\Customers\Bulk;

class Enable
{
	public function post($Data=array())
	{
		if(!\USAePay\API::$config) return ["Error"=>"Api Authentication not found, please run USAePay\API::setAuthentication"];
		$apiInstance = new \USAePay\RestAPI\CustomerApi(
			new \GuzzleHttp\Client(["timeout"=>\USAePay\API::$timeout]),
			\USAePay\API::$config
		);

	try{
		return $apiInstance->customersBulkEnablePost($Data);
	}
	catch(\exception $e){
		return $e->getMessage();
	}


	}

}
?>