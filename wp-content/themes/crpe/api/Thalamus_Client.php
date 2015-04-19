<?php
/**
 * Created by After24.
 * Filename: Thalamus_Client.php
 *
 * Classe d'acc�s � l'API de Thalamus
 *
 * Instanciation de l'API :
 *
 *      $client = new Thalamus_Client("N� de cl� API","Cl� API","Environnement","URL API");
 *      N� de cl� et Cl� API : Votre N� de cl� et la cl� de cryptage des appels
 *      Environnement  : Environnement d'appel de l'API (test/production)
 *      URL API  : Adresse URL d'appel de l'API
 *
 * Appel d'une m�thode de service :
 *
 *      $results = $client->call(array("service" => "Nom du service",
 *                                     "method" => "Nom de la m�thode",
 *                                     "Nom du param�tre 1" => "Valeur du param�tre 1",
 *                                     "Nom du param�tre 2" => "Valeur du param�tre 2",
 *                                     ...
 *                                    ));
 *      $results  = Tableau des r�sultats de l'appel -> array("success" => Drapeau indicateur de r�ussite de l'appel (bool),
 *                                                            "datas" => Donn�es associ�es aux r�sultats de l'appel (mixed)
 *                                                            "errorNumber" => N� de l'erreur (success = false) (int),
 *                                                            "errorMessage" => Message associ� � l'erreur (success = false) (string),
 *                                                            "callTime" => Temps d'�x�cution de l'appel en ms (string)
 *                                                            );
 *
 */
class Thalamus_Client
{
    private $_app_id;
    private $_app_key;
    private $_app_env;
    private $_api_url;

    /**
     * Constructeur de l'API
     * @param $app_id : ID de l'API
     * @param $app_key : Cl� d'appel
     * @param $app_env : Environnement de l'appel
     * @param $api_url : URL d'appel de l'API
     */
    public function __construct($app_id,$app_key,$app_env = "test",$api_url)
    {
        $this->_app_id = $app_id;
        $this->_app_key = $app_key;
        $this->_app_env = $app_env;
        $this->_api_url = $api_url;
    }
    /**
     * Appel de l'API
     * @param array $request_params : Param�tres de l'appel de l'API
     * @return mixed : R�sultat de l'appel de l'API
     * @throws Exception
     */
    public function call($request_params)
    {
        // Cryptage des param�tres de l'appel
        $enc_request = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->_app_key, json_encode($request_params), MCRYPT_MODE_ECB));

        // Cr�ation du tableau des variables POST de l'appel
        $params = array();
        $params['enc_request'] = $enc_request;
        $params['app_id'] = $this->_app_id;
        $params['app_env'] = $this->_app_env;

        // Initialisation et param�trage de la session CURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->_api_url);
        curl_setopt($ch, CURLOPT_POST, True);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Ex�cution de l'appel et retour des donn�es
        $result = curl_exec($ch);
        $result = json_decode($result);
        return $result;
    }
}