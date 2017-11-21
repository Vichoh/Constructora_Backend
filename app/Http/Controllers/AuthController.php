<?php
namespace App\Http\Controllers;
use JWTAuth;
use App\Usuario;
use App\Empresa;
use App\Constructora;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
  public function userAuth(Request $request)
  {
    // grab credentials from the request
    
    $credentials = $request->only('usuario', 'password');
   try {
      // attempt to verify the credentials and create a token for the user
      if (! $token = JWTAuth::attempt($credentials)) {
        return response()->json(['error' => 'invalid_credentials'], 401);
      }
    } catch (JWTException $e) {
      // something went wrong whilst attempting to encode the token
      return response()->json(['error' => 'could_not_create_token'], 500);
    }


    $nombre = Empresa::select('empresas.razon_social')
                ->join('constructoras', 'empresas.id' , '=', 'constructoras.empresa_id')
                ->join('usuarios', 'constructoras.id', '=', 'usuarios.constructora_id')
                ->where('usuarios.usuario', $request->usuario)
                ->get();

    return response()->json(['token' => 'Bearer ' . $token, 'usuario' => $request->usuario, 'razon_social' => $nombre[0]->razon_social]); 



  }



  public function getAuthenticatedUser()
  {
    try {
      if (! $user = JWTAuth::parseToken()->authenticate()) {
        return response()->json(['user_not_found'], 404);
      }
    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
      return response()->json(['token_expired'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
      return response()->json(['token_invalid'], $e->getStatusCode());
    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
      return response()->json(['token_absent'], $e->getStatusCode());
    }
    // the token is valid and we have found the user via the sub claim
    return $user;
  }
}