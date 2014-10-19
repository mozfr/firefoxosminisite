<?php
use Facebook\FacebookSession;
use Facebook\FacebookRequest;

class TileFacebook {
    private $_fb_appID;
    private $_fb_appsecret;

    /**
    * Lit le fichier de configuration et s'authentifie auprès de Twitter
    * @param $_pathToConf Chemin vers le fichier de configuration .ini
    * @throws Exception Renvoie une exception si le fichier n'est pas trouvé ou n'est pas lisible
    */
    public function __construct($pathToConf) {
        if (! file_exists($pathToConf) || ! is_readable($pathToConf)) {
            throw new Exception('TileFacebook.php : config file not found');
        } else {
            $config = parse_ini_file($pathToConf, false);

            $this->_fb_appID       = $config['fb_appID'];
            $this->_fb_appsecret   = $config['fb_appsecret'];
        }
    }

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
            '/571893379557863/posts?limit=10'
        );

        $response = $request->execute();
        $graphObject = $response->getGraphObject()->asArray();

        $i = 0;
        while (empty($fb_status) || $i >= 9) {
            try {
                $fb_status = $graphObject['data'][$i]->message;
            } catch (Exception $e) {}
            $i++;
        }
        return $fb_status;
    }
}

?>