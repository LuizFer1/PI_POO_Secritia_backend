<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RedirectResponse;

class IsLeader implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = service('authentication')->getCurrentUser();

        if ($user->isLeader) {
            return $request;
        }

        return redirect()->to('/error');
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
