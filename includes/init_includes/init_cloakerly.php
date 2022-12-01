<?php

class CloakerlyException extends \Exception {}
class InvalidParameter extends CloakerlyException {}

class CloakerlyChecker
{
    private $key = null;
    private $strictness = 0;
    private $user_agent = false;
    private $failure_redirect = null;
    private $success_redirect = null;
    private $campaign = null;
    private $referrer = null;
    const BASE_API_URL = "https://app.cloakerly.com/v2/integration/check/%s/%s/%s";

    public function SetKey($key = null)
    {
        $this->key = $key;
    }

    public function SetCampaign($campaign=null)
    {
        $this->campaign = $campaign;
    }

    public function SetStrictness($value = 0)
    {
        $this->strictness = $value;
    }
    public function PassUserAgent($value = false)
    {
        $this->user_agent = $value;
    }

    public function SetFailureRedirect($value = null)
    {
        $this->failure_redirect = $value;
    }

    public function SetSuccessRedirect($value = null)
    {
        $this->success_redirect = $value;
    }

    public function SetReferrer($value = null)
    {
        $this->referrer = $value;
    }
    public function Precheck()
    {
        if($this->key === null){
            throw new InvalidParameter("No key was passed. Aborting.");
        }
        if(!is_numeric($this->strictness))
        {
            throw new InvalidParameter("Invalid strictness was passed. Aborting.");
        }
        if(!is_bool($this->user_agent))
        {
            throw new InvalidParameter("Invalid pass user agent. Aborting.");
        }
        return true;
    }

    public function CheckIP($ip)
    {
        if($this->Precheck())
        {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, sprintf(static::BASE_API_URL, $this->key, urlencode($ip),$this->campaign));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5);
            $parameters = array("strictness" => $this->strictness);
            $parameters["current_url"] =  $this->getCurrentURL();
            if($this->user_agent && isset($_SERVER["HTTP_USER_AGENT"]))
            {
                $parameters["user_agent"] = $_SERVER["HTTP_USER_AGENT"];
            }
            if($this->referrer)
            {
                $parameters["referrer"] = $this->referrer;
            }
            curl_setopt($curl, CURLOPT_POSTFIELDS, $parameters);
            $result = curl_exec($curl);
            $data = json_decode($result, true);
            curl_close($curl);
            if($data === false)
            {
                die(print_r($result, true));
            }
            else
            {
                return $data;
            }
        }
    }

    function getCurrentURL()
    {
        $pageURL = (isset( $_SERVER["HTTPS"] ) && $_SERVER["HTTPS"] == "on") ? "https://" : "http://";
        if($_SERVER["SERVER_NAME"]!="" && $_SERVER["SERVER_NAME"]!="_")
        {
            $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
        else
        {
            $pageURL .= $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }

    public function ForceRedirect($type = "status" , $result = [])
    {
        if(!$result)
        {
            $result = $this->CheckIP($this->GetIP());
            setcookie('ip_check_cloak_json', json_encode($result), time() + 60 * 60 * 24 * 180, '/', '', false);
        }
        if(isset($result[$type]))
        {
            $this->SetFailureRedirect($result["safe_page"]);
            $this->SetSuccessRedirect($result["money_page"]);
            if($result["proxy_bot"] === true)
            {
                return false;
            }
            else if($result[$type] === true && !$result['proxy_bot'])
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    
    private static function GetIP()
    {
        $ipaddress = "";
        if(getenv("HTTP_CLIENT_IP"))
        {
            $ipaddress = getenv("HTTP_CLIENT_IP");
        }
        else if(getenv("HTTP_X_FORWARDED_FOR") && getenv("HTTP_X_FORWARDED_FOR")!=$_SERVER['SERVER_ADDR'])
        {
            $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
        }
        else if(getenv("HTTP_X_FORWARDED"))
        {
            $ipaddress = getenv("HTTP_X_FORWARDED");
        }
        else if(getenv("HTTP_FORWARDED_FOR"))
        {
            $ipaddress = getenv("HTTP_FORWARDED_FOR");
        }
        else if(getenv("HTTP_FORWARDED"))
        {
            $ipaddress = getenv("HTTP_FORWARDED");
        }
        else if(getenv("REMOTE_ADDR"))
        {
            $ipaddress = getenv("REMOTE_ADDR");
        }
        else
        {
            $ipaddress = "UNKNOWN";
        }
        $ipaddress_pool = explode(",",$ipaddress);
        return trim($ipaddress_pool[0]);
    }
}
?>