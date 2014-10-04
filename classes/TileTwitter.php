<?php
/*
 * Code de la classe Twitter.php servant à récupérer
 * le contenu des tweets via l'API Twitter et à les mettre
 * en forme
 */

/*
 * TODO : 
 * -------
 * Traitement des json obtenus et renvoie sous une forme utilisable
 */

require_once("twitteroauth/twitteroauth.php"); // Path to twitteroauth library;

class TileTwitter {
	// Donnée d'authentification à l'API Twitter
	private $_consumerkey;
	private $_consumersecret;
	private $_accesstoken;
	private $_accesstokensecret;
    private $_pathToConf;
	// Informations lié au compte à suivre

    /**
     * Lit le fichier de configuration et s'authentifie auprès de Twitter
     * @param $_pathToConf Chemin vers le fichier de configuration .ini
     * @throws Exception Renvoie une exception si le fichier n'est pas trouvé ou n'est pas lisible
     */
    public function TileTwitter($pathToConf){
        if (!(file_exists($pathToConf) && is_readable($pathToConf))){
			throw new Exception("TileTwitter.php : config file not found");
		}else{
			$config = parse_ini_file($pathToConf, true);

			$_consumerkey = $config['consumerkey'];
			$_consumersecret = $config['consumersecret'];
			$_accesstoken = $config['accesstoken'];
			$_accesstokensecret = $config['accesstokensecret'];
            $_pathToConf = $pathToConf;
		}
	}

    /**
     * Recupere les x derniers tweets ecrit par un compte twitter en excluant RT et reponses.
     * @param $idAccountToFollow Identifiant du compte a suivre
     * @param $numberOfTweet Nombre de tweet a recuperer
     * @param $screenNameToFollow Nom du compte a suivre
     */
    public function getTweetWriteBy($idAccountToFollow,$numberOfTweet,$screenNameToFollow){
        $connection = new TwitterOAuth($this->_consumerkey,$this->_consumersecret, $this->_accesstoken,
            $this->accesstokensecret);
        $tweets = $connection->get("statuses/user_timeline",array('count' => $numberOfTweet,'exclude_replies' => 1,
            'include_rts' => 0, 'user_id' => $idAccountToFollow, 'screen_name' => $screenNameToFollow));
        /**
         * Ajouter ici du code pour traiter le json obtenu par la fonction
         */

    }

    /**
     * Recupere les x derniers tweets mis en favoris par un compte twitter
     * @param $idAccountToFollow Identifiant du compte a suivre
     * @param $numberOfTweet Nombre de tweet a recuperer
     * @param $screenNameToFollow Nom du compte a suivre
     */
    public function getFavoriteOf($idAccountToFollow,$numberOfTweet,$screenNameToFollow){
        $connection = new TwitterOAuth($this->_consumerkey,$this->_consumersecret, $this->_accesstoken,
            $this->accesstokensecret);
        $tweets = $connection->get("favorites/list",array('count' => $numberOfTweet,
            'screen_name' => $screenNameToFollow, 'user_id' => $idAccountToFollow));
        /**
         * Ajouter ici du code pour traiter le json obtenu par la fonction
         */
    }
		
}
?>
