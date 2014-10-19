<?php
use Facebook\FacebookSession;
use Facebook\FacebookRequest;

class TileFacebook {
    private $_fb_pageID;
    private $_fb_appID;
    private $_fb_appsecret;

    /**
    * Reads config file
    * @param $_pathToConf Path to config.ini file
    * @throws Exception Triggers an Exception when the file can't be read or can't be found.
    */
    public function __construct($pathToConf) {
        if (! file_exists($pathToConf) || ! is_readable($pathToConf)) {
            throw new Exception('TileFacebook.php : config file not found');
        } else {
            $config = parse_ini_file($pathToConf, false);

            $this->_fb_pageID    = $config['fb_pageID']; 
            $this->_fb_appID     = $config['fb_appID'];
            $this->_fb_appsecret = $config['fb_appsecret'];
        }
    }

    /**
    * Returns the latest status posted by the FB account/page identified by credentials found in config.ini
    * @return String containing the latest status
    */
    public function getLatestStatus() {
        FacebookSession::setDefaultApplication($this->_fb_appID, $this->_fb_appsecret);

        // Get session token from app ID and App secret
        $url = 'https://graph.facebook.com/oauth/access_token?client_id=' . $this->_fb_appID . '&client_secret=' . $this->_fb_appsecret . '&grant_type=client_credentials&redirect_uri=http://firefoxos.mozfr.org/';
        $content = file_get_contents($url);
        $token = str_replace('access_token=', '', $content);

        $session = new FacebookSession($token);
        $request = new FacebookRequest(
            $session,
            'GET',
            '/' . $this->_fb_pageID . '/posts?limit=10'
        );

        $response = $request->execute();
        $graphObject = $response->getGraphObject()->asArray();

        // Keep parsing graphObject activity until an actual post is found.
        // Currently, activity includes page comments, and they don't have a 'message' field.
        $i = 0;
        while (empty($fb_status) || $i >= 9) {
            if (isset($graphObject['data'][$i]->message)) {
                try {
                    $fb_status = $graphObject['data'][$i]->message;
                } catch (Exception $e) {}
            }
            $i++;
        }
        return $fb_status;
    }
}
