<?php
//getobject, getObjectAttachements, getFunction, deleteObject, replaceObject, saveObject
class DM_Public_Backend {
    protected $_url;
    protected $_apiKey;
    protected $_accesstoken;
    protected $_profileID;
    protected $_useragent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1';
    protected $_followlocation;
    protected $_timeout;
    protected $_maxRedirects;
    protected $_cookieFileLocation = './cookie.txt';
    protected $_post;
    protected $_customRequest='';
    protected $_postFields='';
    protected $_referer ="http://www.dokume.net";
    protected $_session;
    protected $_webpage;
    protected $_includeHeader;
    protected $_noBody;
    protected $_status;
    protected $_binaryTransfer;
    protected $_apiJson;
    protected $_header;
    protected $_includeAttachment=false;
    public    $authentication = 0;
    public    $auth_name      = '';
    public    $auth_pass      = '';

    public function __construct($url,$apiKey,$profileID,$accesstoken,$followlocation = true,$timeOut = 30,$maxRedirecs = 4,$binaryTransfer = false,$includeHeader = false,$noBody = false)
    {
        $this->_url = $url;
        $this->_apiKey = $apiKey;
        $this->_profileID = $profileID;
        $this->_accesstoken = $accesstoken;
        $this->_followlocation = $followlocation;
        $this->_timeout = $timeOut;
        $this->_maxRedirects = $maxRedirecs;
        $this->_noBody = $noBody;
        $this->_includeHeader = $includeHeader;
        $this->_binaryTransfer = $binaryTransfer;
        $this->_cookieFileLocation = dirname(__FILE__).'/cookie.txt';
        $this->_apiJson =new \stdClass();
        $this->setApiType('public');
    }

    /* function for include attachment with request.set tag true if attachment require*/
    public function setIncludeAttachment(){
      $this->_includeAttachment = true;
    }

    /*function to switch api type like public or protected*/
    public function setApiType($type){
      if($type=='public'){
        $this->_apiJson->objectfile = 'public.php/';
        $this->_apiJson->functionfile = 'functions.php/';
      }else{
        $this->_apiJson->objectfile = 'protected.php/';
        $this->_apiJson->functionfile = 'functions.php/';
      }
      $this->setRequestHeader($type);
    }

    /*function to execute replace object request*/
    public function replaceObject($objectId, $json, $keyfields){
      if (!isset($objectId) || $objectId=='' || !isset($keyfields) || $keyfields=='' || !isset($json) || $json=='') return false;
      $this->setCustomRequest('PUT',json_encode($json));
      $opt = urlencode(json_encode($keyfields));
      $this->createCurl($this->_url.'/'.$this->_apiJson->objectfile.'object/'.$objectId.'/'.$opt);
      return json_decode($this->_webpage);
    }

    /*function to delete object*/
    public function deleteObject($objectId, $instanceId){
      if (!isset($objectId) || $objectId=='' || !isset($instanceId) || $instanceId=='') return false;
      $this->setCustomRequest('DELETE');
      $this->createCurl($this->_url.'/'.$this->_apiJson->objectfile.'object/'.$objectId.'/'.$instanceId);
      return json_decode($this->_webpage);
    }

    /*function to get function*/
    public function getFunction($fnName,$params){
      if (!isset($fnName) || $fnName=='') return false;
      $opt = urlencode(json_encode($params));
      $opt = $opt!=''?'?'.$opt:'';
      $this->createCurl($this->_url.'/'.$this->_apiJson->functionfile.$fnName.$opt);
      return json_decode($this->_webpage);
    }

    /*function to save object*/
    public function saveObject($objectId, $instanceId, $json){
      if (!isset($objectId) || $objectId=='' || !isset($json) || $json=='') return false;
      //make update
      if ($instanceId) $objectId .= "/".$instanceId;
      $this->setPost(json_encode($json));
      $this->createCurl($this->_url.'/'.$this->_apiJson->objectfile.'object/'.$objectId);
      return json_decode($this->_webpage);
    }

    /*function to make request to get object values*/
    public function getObject($object, $instance, $params){
      if (!$object || gettype($object)==NULL) return false;
      $opt = 'include_data=true';
      if (isset($params) && isset($params->where) && gettype($params->where) == 'array') {
        $params->where = json_encode($params->where);
        $opt .= '&where='.urlencode($params->where);
      }
      if ($params && isset($params->references) && gettype($params->references) == 'array') {
        $params->references = json_encode($params->references);
        $opt .= '&references='.urlencode($params->references);
      }
      if ($params && isset($params->limit) && gettype($params->limit) == 'array') {
        $params->limit = json_encode($params->limit);
        $opt .= '&limit='.urlencode($params->limit);
      }
      $instance = $instance ? '/'.$instance : '';
      $opt = $opt!=''?'?'.$opt:'';
      $attachLink = $this->_includeAttachment?'attachements/':'';
      //echo $this->_url.'/'.$this->_apiJson->objectfile.'object/'.$attachLink.$object.$instance.$opt;
      $this->createCurl($this->_url.'/'.$this->_apiJson->objectfile.'object/'.$attachLink.$object.$instance.$opt);
      // $this->createCurl('https://dokume.net/backend/src/public.php/object/76/7792?references=%5B%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_ATTACHEMENT%22%7D%2C%7B%22OBJECT%22%3A%22PUSH_APP_MESSAGE_CATEGORY%22%2C%22REFERENCES%22%3A%5B%7B%22OBJECT%22%3A%22PUSH_APP_CATEGORY%22%7D%5D%7D%5D&include_data=true');
      return json_decode($this->_webpage);
    }

  public function createCurl($url='nul')
  {
     if($url == 'nul'){
       return false;
     }
      $s = curl_init();
      curl_setopt($s,CURLOPT_URL,$url);
      curl_setopt($s, CURLOPT_HTTPHEADER, $this->_header);
      curl_setopt($s,CURLOPT_TIMEOUT,$this->_timeout);
      curl_setopt($s,CURLOPT_MAXREDIRS,$this->_maxRedirects);
      curl_setopt($s,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($s,CURLOPT_FOLLOWLOCATION,$this->_followlocation);
      curl_setopt($s,CURLOPT_COOKIEJAR,$this->_cookieFileLocation);
      curl_setopt($s,CURLOPT_COOKIEFILE,$this->_cookieFileLocation);

      if($this->authentication == 1){
        curl_setopt($s, CURLOPT_USERPWD, $this->auth_name.':'.$this->auth_pass);
      }
      if($this->_post)
      {
          curl_setopt($s,CURLOPT_POST,true);
      }
      if($this->_customRequest!='')
      {
        curl_setopt($s, CURLOPT_CUSTOMREQUEST, $this->_customRequest);
      }
      if($this->_postFields != ''){
        curl_setopt($s,CURLOPT_POSTFIELDS,$this->_postFields);
      }
      if($this->_includeHeader)
      {
        curl_setopt($s,CURLOPT_HEADER,true);
      }

      if($this->_noBody)
      {
          curl_setopt($s,CURLOPT_NOBODY,true);
      }
      curl_setopt($s,CURLOPT_USERAGENT,$this->_useragent);
      curl_setopt($s,CURLOPT_REFERER,$this->_referer);

      $this->_webpage = curl_exec($s);
      $this->_status = curl_getinfo($s,CURLINFO_HTTP_CODE);
      curl_close($s);
      $this->resetDefaults();
    }

    private function resetDefaults(){
      $this->_post = false;
      $this->_customRequest = '';
      $this->_postFields = '';
      $this->_includeAttachment = false;
    }

    public function setRequestHeader($type){
      $this->_header = array();
      if($type=='public'){
        array_push($this->_header,'X-DOKUME-API-KEY: '.$this->_apiKey);
      }else{
        array_push($this->_header,'Authorization: Bearer '.$this->_accesstoken);
      }
      if(isset($this->_profileID) && $this->_profileID!='' && $this->_profileID>0){
        array_push($this->_header,'X-DOKUME-PROFILEID: '.$this->_profileID);
      }
    }

     public function useAuth($use){
       $this->authentication = 0;
       if($use == true) $this->authentication = 1;
     }

     public function setName($name){
       $this->auth_name = $name;
     }
     public function setPass($pass){
       $this->auth_pass = $pass;
     }

     public function setReferer($referer){
       $this->_referer = $referer;
     }

     public function setCookiFileLocation($path)
     {
         $this->_cookieFileLocation = $path;
     }

     public function setPost ($postFields)
     {
        $this->_post = true;
        $this->_postFields = $postFields;
     }

     public function setCustomRequest($type,$postFields=''){
       $this->_customRequest = $type;
       if($postFields!='')
        $this->_postFields = $postFields;
     }

     public function setUserAgent($userAgent)
     {
         $this->_useragent = $userAgent;
     }

     public function getHttpStatus()
     {
         return $this->_status;
     }

     public function __tostring(){
        return $this->_webpage;
     }

     public function __tojson(){
        return json_decode($this->_webpage);
     }
}
?>
