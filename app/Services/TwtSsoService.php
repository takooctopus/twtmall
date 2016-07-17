<?php
/**
 * Created by PhpStorm.
 * User: Takoyaki
 * Date: 2016/7/17
 * Time: 13:08
 */
namespace App\Services;

class TwtSsoService
{
    private $config;
    private $server;
    private $server_ip;
    private $client_id;
    private $client_secret;
    private $redirect;
    private $query;
    private $loginUrl;
    private $userUrl;
    private $logoutUrl;
    private $token;
    private $user;
    public function __construct()
    {
        $this->getConfig();
        $this->setQuery();
        $this->setLoginUrl();
    }

    /**
     * get server server_ip client_ip client_server $redirect
     */
    private function getConfig()
    {
        $this->config = Config::get('services.twtsso');
        $this->server = $this->config->server;
        $this->server_ip = $this->config->server_ip;
        $this->client_id = $this->config->client_id;
        $this->client_secret = $this->config->client_secret;
        $this->redirect = $this->config->redirect;
        return $this->config;
    }

    private function setQuery()
    {
        $query = 'app_id='.$this->clientid.'&time='.time().'&source='.rtrim(strtr(base64_encode(json_encode($this->redirect)), '+/', '-_'), '=');
        $this->query = $query . '&sign=' . hash_hmac('sha1', $query, $this->client_secret);
        return $this->query;
    }

    private function getQuery()
    {
        return $this->query;
    }

    private function setLoginUrl()
    {
        $this->loginUrl = $this->server . 'sso/login?' . $this->getQuery();
        return $this->loginUrl;
    }

    private function getLoginUrl()
    {
        return $this->loginUrl;
    }

    private function setLogoutUrl()
    {
        $this->logoutUrl = $this ->server . 'sso/logout?' .$this->token . $this->getQuery();
        return $this->logoutUrl;
    }

    private function getLogoutUrl()
    {
        return $this->getLogoutUrl();
    }

    private function setUserUrl()
    {
        $this->userUrl = $this->server . 'sso/getUserInfo/' . $this->token . $this->getQuery();
        return $this->userUrl;
    }

    private function getUserUrl()
    {
        return $this->userUrl;
    }

    private function ssoRequest($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $data = curl_exec($ch);
        curl_close($ch);

        return json_decode($data);
    }

    private function getUserByToken()
    {
        $user = $this->ssoRequest($this->getUserUrl());
        return $user;
    }

    private function mapUserToObject($user)
    {
        return (new User)->setRaw($user)->map([
            'id' => $user['id'],
        ]);
    }

    public function redirect()
    {
        return redirect($this->loginUrl);
    }

    public function user()
    {
        $this->user = $this->mapUserToObject($this->getUserByToken());
        return $this->user;
    }

    public function logout()
    {
        return $this->ssoRequest($this->getLogoutUrl());
    }







}