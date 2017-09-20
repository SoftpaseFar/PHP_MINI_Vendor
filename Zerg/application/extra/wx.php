<?php
/**
 * Created by 七月.
 * Author: 七月
 * Date: 2017/5/22
 * Time: 9:17
 */

return [
  'app_id' => 'wxce6a5c19d66a83de',
  'app_secret' => '373617bebcf893d7d6bb916c9611451a',
  'login_url'=> "https://api.weixin.qq.com/sns/jscode2session?" .
      "appid=%s&secret=%s&js_code=%s&grant_type=authorization_code",
  'access_token_url' => "https://api.weixin.qq.com/cgi-bin/token?" .
      "grant_type=client_credential&appid=%s&secret=%s",

];