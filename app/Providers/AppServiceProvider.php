<?php

namespace App\Providers;

use App\ApiClientDocuSign;
use DocuSign\eSign\ApiClient;
use DocuSign\eSign\Configuration;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->app->singleton('DocuSign\eSign\ApiClient', function ($app) {
            return $this->getClientDocuSign();
        });

        $this->app->singleton('App\ApiClientDocuSign', function ($app) {
            return $this->getClientDocuSign(true);
        });
    }

    protected function getClientDocuSign($test = false)
    {
        $username = config('docusign.username');
        $password = config('docusign.password');
        $integrator_key = config('docusign.integrator_key');

        // change to production (www.docusign.net) before going live
        $host = "https://demo.docusign.net/restapi";

        // create configuration object and configure custom auth header
        $config = new Configuration();
        $config->setHost($host);
        $config->addDefaultHeader("X-DocuSign-Authentication", "{\"Username\":\"" . $username . "\",\"Password\":\"" . $password . "\",\"IntegratorKey\":\"" . $integrator_key . "\"}");

        // instantiate a new docusign api client
        $apiClient = new ApiClient($config);
        $accountId = null;

        try {
            //*** STEP 1 - Login API: get first Account ID and baseURL
            $authenticationApi = new \DocuSign\eSign\Api\AuthenticationApi($apiClient);
            $options = new \DocuSign\eSign\Api\AuthenticationApi\LoginOptions();
            $loginInformation = $authenticationApi->login($options);
            if (isset($loginInformation) && count($loginInformation) > 0) {
                $loginAccount = $loginInformation->getLoginAccounts()[0];
                $host = $loginAccount->getBaseUrl();
                $host = explode("/v2", $host);
                $host = $host[0];

                // UPDATE configuration object
                $config->setHost($host);

                // instantiate a NEW docusign api client (that has the correct baseUrl/host)
                if (!$test)
                    $apiClient = new \DocuSign\eSign\ApiClient($config);
                else
                    $apiClient = new ApiClientDocuSign($config);

                return $apiClient;
            }
        } catch (\DocuSign\eSign\ApiException $ex) {
            echo "Exception: " . $ex->getMessage() . "\n";
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
