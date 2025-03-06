<?php

namespace app\controllers;

use common\models\User;

use Yii;
use yii\rest\Controller;
use yii\web\UnauthorizedHttpException;
use Lcobucci\JWT\token\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
use Lcobucci\JWT\Signer\Key\InMemory;
use DateTimeImmutable;

class AuthController extends Controller
{
  public $enableCsrfValidation = false;

  public function actionLogin()
  {
    $username = Yii::$app->request->post('username');
    $password = Yii::$app->request->post('password');

    $user = User::findByUsername($username);

    if ($user && $user->validatePassword($password)) {
      $jwt = $this->generateJwt($user); // Генерируем JWT

      // Сохраняем JWT в базу данных
      $userToken = new User();
      $userToken->user_id = $user->id;
      $userToken->token = $jwt;
      $userToken->save();
      return ['token' => $jwt];
    }

    throw new UnauthorizedHttpException('Invalid credentials');
  }

  private function generateJwt(User $user): string
  {
    $signer = new Sha256();
    $key = InMemory::plainText(Yii::$app->params['jwtSecret']);

    $now   = new DateTimeImmutable();
    $builder = new Builder();
    $token = $builder
      ->issuedBy(Yii::$app->request->getHostInfo())
      ->permittedFor(Yii::$app->request->getHostInfo())
      ->identifiedBy(base64_encode(random_bytes(16)))
      ->issuedAt($now)
      ->canOnlyBeUsedAfter($now)
      ->expiresAt($now->modify('+1 hour'))
      ->withClaim('uid', $user->id)
      ->getToken($signer, $key);

    return $token->toString();
  }
}
