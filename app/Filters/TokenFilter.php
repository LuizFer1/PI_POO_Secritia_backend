<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class TokenFilter implements FilterInterface
{
<<<<<<< HEAD
    private $token = 'secritia147963';
=======
>>>>>>> e8c52d58f5613f850e338c7fb6f7b8214dbf1db0
    /**
     * Do whatever processing this filter needs to do.
     * By default it should not return anything during
     * normal execution. However, when an abnormal state
     * is found, it should return an instance of
     * CodeIgniter\HTTP\Response. If it does, script
     * execution will end and that Response will be
     * sent back to the client, allowing for error pages,
     * redirects, etc.
     *
     * @param RequestInterface $request
     * @param array|null       $arguments
     *
     * @return RequestInterface|ResponseInterface|string|void
     */
    public function before(RequestInterface $request, $arguments = null)
    {
        $headerToken = $request->getHeaderLine('token');
<<<<<<< HEAD
        if ($headerToken == $this->token) {
=======
        if ($headerToken == getenv('api.token')) {
>>>>>>> e8c52d58f5613f850e338c7fb6f7b8214dbf1db0
            return ;
        }else{
            throw new \Exception('Token Invalido!');
        }
    }

    /**
     * Allows After filters to inspect and modify the response
     * object as needed. This method does not allow any way
     * to stop execution of other after filters, short of
     * throwing an Exception or Error.
     *
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     * @param array|null        $arguments
     *
     * @return ResponseInterface|void
     */
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
