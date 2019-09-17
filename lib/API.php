<?php
/**
 * Configuration
 * PHP version 5
 *
 * @category Class
 * @package  USAePay
 * @author   CMcEwen
 */

/**
 * API
 *
 * Functions for handling general API settings and options
 *
 * Contact: 706@usaepay.com
 */

namespace USAePay;

class API
{
  
  
  static $timeout='45';
  
  static $endpoint_key='v2';
  
  static $subdomain='secure';
  
  static $high_availability=false;
  
  static $available_subdomains=['www-01','www-02','www-03','www-04'];
  
  static $base_url='https://secure.usaepay.com/api/v2';
  
  static $password=false;

	static function setAuthentication($api_key, $api_pin) {
		/// Configure authorization: 
		$seed=substr(hash('sha256',rand()),10,25);
    $clear= $api_key . $seed . $api_pin;
    $hash="s2/".$seed."/".hash('sha256',$clear);
    self::$password="$api_key:$hash";
	}
  
  static function setTimeOut($timeout_value){
    self::$timeout = $timeout_value;
  }
  
  static function setEndpointKey($endpoint_key_value){
    self::$endpoint_key = $endpoint_key_value;
    self::$base_url="https://".self::$subdomain.".usaepay.com/api/".self::$endpoint_key;
  }
  
  static function setSubdomain($subdomain_value){
    self::$subdomain = $subdomain_value;
    self::$base_url="https://".self::$subdomain.".usaepay.com/api/".self::$endpoint_key;
  }
  
  static function ping($subdomain='all'){
		switch($subdomain){
			case 'all':
				$subdomains=['www-01','www-02','www-03','www-04'];
				$mh=curl_multi_init();
				foreach($subdomains as $subdomain){
					$url='https://'.$subdomain.'.usaepay.com/ping';
					$curl_handles[$subdomain]=array(
						'handle'=>curl_init($url),
						'subdomain'=>$subdomain
					);
					curl_setopt($curl_handles[$subdomain]['handle'], CURLOPT_URL,$url);
					curl_setopt($curl_handles[$subdomain]['handle'], CURLOPT_RETURNTRANSFER, true);
					curl_multi_add_handle($mh,$curl_handles[$subdomain]['handle']);
				}
				
				do {
					$status = curl_multi_exec($mh, $active);
					if ($active) {
						curl_multi_select($mh);
					}
				} while ($active && $status == CURLM_OK);
				$up_subdomains=array();
				foreach($curl_handles as $handle){
					$extra_info = curl_getinfo($handle['handle']);
					$response = curl_multi_getcontent($handle['handle']);
          if(substr($response,0,2)=='UP') $up_subdomains[]=$handle['subdomain'];
					$return_data[] = array(
						'subdomain'=>$handle['subdomain'],
						'status'=>(substr($response,0,2)=='UP'?'UP':'DOWN'),
						'total_call_time'=>$extra_info['total_time']
					);
				}
        self::$available_subdomains=$up_subdomains;
				return $return_data;
			case 'sandbox':
			case 'secure':
			case 'www':
			case 'www-01':
			case 'www-02':
			case 'www-03':
			case 'www-04':
				$baseURL = 'https://'.$subdomain.'.usaepay.com/ping';
				$curl = curl_init($baseURL);
				curl_setopt($curl, CURLOPT_URL, $baseURL);
				curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
				$curl_response = curl_exec($curl);
				$extra_info=curl_getinfo($curl);
				curl_close($curl);
				$status=array(
					'subdomain'=>$subdomain,
					'status'=>(substr($curl_response,0,2)=='UP'?'UP':'DOWN'),
					'total_call_time'=>$extra_info['total_time']
				);
				return $status;
			default:
				return "Subdomain Not Found, Please check our high availability documentation.";
		}
  }
  
  function runCall($type,$path,$data=false,$params=false){
    if(!self::$password) return ["Error"=>"Please set api key and pin with setAuthentication before attempting other calls."];
    if($data) $curl_post_data=json_encode($data);
    $first=true;
    if($params&&count($params)>0){
      foreach($params as $name=>$value){
        $path.=($first?'?':'&').$name.'='.$value;
        $first=false;
      }
    }
    if(self::$high_availability){
      return "Automated high availability not available yet.";
    }
    else{
      $service_url=self::$base_url.$path;
      $headers = ['Content-type: application/json'];
      $curl = curl_init($service_url);
      curl_setopt($curl, CURLOPT_URL, $service_url);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      curl_setopt($curl, CURLOPT_USERPWD, self::$password);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($curl, CURLOPT_TIMEOUT, self::$timeout);
      
      switch($type){
        case 'post':      
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
          break;
        
        case 'get':
          curl_setopt($curl, CURLOPT_POST, false);
          break;
          
        case 'delete':
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
          curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
          
        case 'put':
          curl_setopt($curl, CURLOPT_POST, true);
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
          break;
          
        default:
          return ["Error"=>"Unkown Call Type"];
      }
      try{
        $curl_response = curl_exec($curl);
        $response = json_decode($curl_response);
        $error_msg = curl_error($curl);
        return $response;
      }

      catch(Exception $e){
        $error_msg = curl_error($curl);
        return $error_msg;
      }
    }
  }
}