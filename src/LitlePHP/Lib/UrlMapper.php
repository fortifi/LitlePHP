<?php
namespace LitlePHP\Lib;

class UrlMapper
{
  const POSTLIVE = "postlive";
  const SANDBOX = "sandbox";
  const PRODUCTION = "production";
  const TRANSACT_PRODUCTION = "transact_production";
  const TRANSACT_PRELIVE = "transact_prelive";
  const TRANSACT_POSTLIVE = "transact_postlive";
  const PRELIVE = "prelive";

  public static function getUrl($litleEnv)
  {
    $litleOnlineCtx = 'vap/communicator/online';

    if($litleEnv == UrlMapper::SANDBOX)
    {
      return 'https://www.testvantivcnp.com/sandbox/communicator/online';
    }
    else if($litleEnv == UrlMapper::POSTLIVE)
    {
      return 'https://payments.vantivpostlive.com/' . $litleOnlineCtx;
    }
    else if($litleEnv == UrlMapper::PRODUCTION)
    {
      return 'https://payments.vantivcnp.com/' . $litleOnlineCtx;
    }
    else if($litleEnv == UrlMapper::TRANSACT_PRODUCTION)
    {
      return 'https://transact.vantivcnp.com/' . $litleOnlineCtx;
    }
    else if($litleEnv == UrlMapper::TRANSACT_PRELIVE)
    {
      return 'https://transact.vantivprelive.com/' . $litleOnlineCtx;
    }
    else if($litleEnv == UrlMapper::TRANSACT_POSTLIVE)
    {
      return 'https://transact.vantivpostlive.com/' . $litleOnlineCtx;
    }
    else if($litleEnv == UrlMapper::PRELIVE)
    {
      return 'https://payments.vantivprelive.com/' . $litleOnlineCtx;
    }
    else
    {
      return 'https://www.testvantivcnp.com/sandbox/communicator/online';
    }
  }
}
