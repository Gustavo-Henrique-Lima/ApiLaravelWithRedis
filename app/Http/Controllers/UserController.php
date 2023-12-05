<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(
 *   title="API Laravel Swagger Documentation",
 *   version="1.0.0",
 *   contact={
 *     "email": "gustavohgustavo@hotmail.com"
 *   }
 * )
 */


class UserController extends Controller
{
     /**
     * @OA\POST(
     *  tags={"Sanctum Authentication"},
     *  summary="Get a autentication user token",
     *  description="This endpoints return a new token user authentication for use on protected endpoints",
     *  path="/api/sanctum/token",
     *  @OA\RequestBody(
     *      @OA\MediaType(
     *          mediaType="json",
     *          @OA\Schema(
     *              required={"email","password","device_name"},
     *              @OA\Property(property="email", type="string", example="gs@example.org"),
     *              @OA\Property(property="password", type="string", example="#sdasd$ssdaAA@"),
     *              @OA\Property(property="device_name", type="string", example="IOS"),
     *          )
     *      ), 
     *  ),
     *  @OA\Response(
     *    response=200,
     *    description="Token generated",
     *    @OA\JsonContent(
     *       @OA\Property(property="plainTextToken", type="string", example="2|MZEBxLy1zulPtND6brlf8GOPy57Q4DwYunlibXGj")
     *    )
     *  ),
     *  @OA\Response(
     *    response=422,
     *    description="Incorrect credentials",
     *    @OA\JsonContent(
     *       @OA\Property(property="message", type="string", example="The provided credentials are incorrect."),
     *       @OA\Property(property="errors", type="string", example="..."),
     *    )
     *  )
     * )
     */
    public function index(): array
    {
        return [
            'message' => 'Successful action!',
            'data' => \App\Models\User::all()
        ];
    }

}