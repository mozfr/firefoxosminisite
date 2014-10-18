<?php
/*
 * Code de la classe Twitter.php servant à récupérer
 * le contenu des tweets via l'API Twitter et à les mettre
 * en forme
 */

/*
 * TODO : 
 * -------
 * - Récupérer les 3 derniers tweets mis en favoris
 * - Récupérer les 3 derniers dont l'auteur est firefoxosfr
 * - Mettre en forme tout ceci sous la forme d'un bloc HTML ou d'un JSON
 * utilisable avec le template prévu
 */

require_once("lib/twitteroauth/twitteroauth/twitteroauth.php"); // Path to twitteroauth library;

class TileTwitter {
    // Donnée d'authentification à l'API Twitter
    private $_consumerkey;
    private $_consumersecret;
    private $_accesstoken;
    private $_accesstokensecret;

    /**
     * Lit le fichier de configuration et s'authentifie auprès de Twitter
     * @param $_pathToConf Chemin vers le fichier de configuration .ini
     * @throws Exception Renvoie une exception si le fichier n'est pas trouvé ou n'est pas lisible
     */
    public function __construct($pathToConf){
        if (!(file_exists($pathToConf) && is_readable($pathToConf))){
            throw new Exception("TileTwitter.php : config file not found");
        }else{
            $config = parse_ini_file($pathToConf, false);

            $this->_consumerkey = $config['consumerkey'];
            $this->_consumersecret = $config['consumersecret'];
            $this->_accesstoken = $config['accesstoken'];
            $this->_accesstokensecret = $config['accesstokensecret'];
        }
    }
    public function getTweetWriteBy($idAccountToFollow,$numberOfTweet,$screenNameToFollow){
        $connection = new TwitterOAuth($this->_consumerkey,$this->_consumersecret, $this->_accesstoken,
            $this->_accesstokensecret);
        $tweets = $connection->get("statuses/user_timeline",array('count' => $numberOfTweet,'exclude_replies' => 1,
            'include_rts' => 0, 'user_id' => $idAccountToFollow, 'screen_name' => $screenNameToFollow));
        echo '<ul class="jcarousel">';
        foreach ($tweets as $tweet) {
            echo '<li id = "promo-8" class="item promo-small-landscape appmaker" >
                        <a class="panel-link" href = "https://twitter.com/' . $screenNameToFollow . '" >
                            <h2 > @' . $screenNameToFollow . ' </h2>
                            <p > ' . $tweet['text'] . '</p >
                        </a >
                    </li >
            ';
        }
        echo '</ul>';
    }
    public function getFavoriteOf($idAccountToFollow,$numberOfTweet,$screenNameToFollow){
        $connection = new TwitterOAuth($this->_consumerkey,$this->_consumersecret, $this->_accesstoken,
            $this->_accesstokensecret);
        $tweets = $connection ->get("favorites/list",array('count' => $numberOfTweet, 'user_id' => $idAccountToFollow,
            'screen_name' => $screenNameToFollow));
                /**
                 * Ajouter ici le code gérant le JSON obtenu + une gestion d'erreurs
                 */

    }
}
?>
