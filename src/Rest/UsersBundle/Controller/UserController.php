<?php

namespace Rest\UsersBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Request\ParamFetcherInterface;

use Symfony\Component\Form\FormTypeInterface;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use Rest\UsersBundle\Exception\InvalidFormException;
use Rest\UsersBundle\Form\UserType;
use Rest\UsersBundle\Model\UserInterface;


class UserController extends FOSRestController
{
    /**
     * Show main User.
     * @Annotations\View(
     *  template = "index.html",
     *  statusCode = Codes::HTTP_BAD_REQUEST,
     *  templateVar = "form"
     * )
     *
     * @return array
     */
    public function indexAction()
    {
        return 'work';
    }
    /**
     * List all users.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\QueryParam(name="pager", requirements="\d+", nullable=true, description="Users list page")
     *
     * @Annotations\View(
     *  templateVar="users"
     * )
     *
     * @param Request               $request      the request object
     * @param ParamFetcherInterface $paramFetcher param fetcher service
     *
     * @return array
     */
    public function getUsersAction(Request $request, ParamFetcherInterface $paramFetcher)
    {
        $iPage = $request->query->get('page', 1);

        return $this->container->get('rest_users.user.handler')->allPerPage($iPage);
    }
//    /**
//     * List all users.
//     *
//     * @ApiDoc(
//     *   resource = true,
//     *   statusCodes = {
//     *     200 = "Returned when successful"
//     *   }
//     * )
//     *
//     * @Annotations\QueryParam(name="offset", requirements="\d+", nullable=true, description="Offset from which to start listing users.")
//     * @Annotations\QueryParam(name="limit", requirements="\d+", default="5", description="How many users to return.")
//     *
//     * @Annotations\View(
//     *  templateVar="users"
//     * )
//     *
//     * @param Request               $request      the request object
//     * @param ParamFetcherInterface $paramFetcher param fetcher service
//     *
//     * @return array
//     */
//    public function getUsersAction(Request $request, ParamFetcherInterface $paramFetcher)
//    {
//        $offset = $paramFetcher->get('offset');
//        $offset = null == $offset ? 0 : $offset;
//        $limit = $paramFetcher->get('limit');
//        $users = $this->container->get('rest_users.user.handler')->all($limit, $offset);
//
//        return $users;
//    }

    /**
     * Get single User.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Gets a User for a given id",
     *   output = "Rest\UsersBundle\Entity\User",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Returned when the user is not found"
     *   }
     * )
     *
     * @Annotations\View(templateVar="user")
     *
     * @param int     $id      the user id
     *
     * @return array
     *
     * @throws NotFoundHttpException when user not exist
     */
    public function getUserAction($id)
    {
        $user = $this->getOr404($id);

        return $user;
    }

    /**
     * Presents the form to use to create a new user.
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     200 = "Returned when successful"
     *   }
     * )
     *
     * @Annotations\View(
     *  templateVar = "form"
     * )
     *
     * @return FormTypeInterface
     */
    public function newUserAction()
    {
        return $this->createForm(new UserType());
    }

    /**
     * Create a User from the submitted data.
     *
     * @ApiDoc(
     *   resource = true,
     *   description = "Creates a new user from the submitted data.",
     *   input = "Rest\UsersBundle\Form\UserType",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *  template = "RestUsersBundle:User:newUser.html.twig",
     *  statusCode = Codes::HTTP_BAD_REQUEST,
     *  templateVar = "form"
     * )
     *
     * @param Request $request the request object
     *
     * @return FormTypeInterface|View
     */
    public function postUserAction(Request $request)
    {
        try {
            $newUser = $this->container->get('rest_users.user.handler')->post(
                $request->request->get('user')
            );

            $routeOptions = array(
                'id' => $newUser->getId(),
                '_format' => $request->get('_format')
            );

            return $this->routeRedirectView('get_user', $routeOptions, Codes::HTTP_CREATED);

        } catch (InvalidFormException $exception) {

            return $exception->getForm();
        }
    }

    /**
     * Update existing user from the submitted data or create a new user at a specific location.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "Acme\DemoBundle\Form\UserType",
     *   statusCodes = {
     *     201 = "Returned when the User is created",
     *     204 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *  template = "RestUsersBundle:User:editUser.html.twig",
     *  templateVar = "form"
     * )
     *
     * @param Request $request the request object
     * @param int     $id      the user id
     *
     * @return FormTypeInterface|View
     *
     * @throws NotFoundHttpException when user not exist
     */
    public function putUserAction(Request $request, $id)
    {
        try {
            $user = $this->container->get('rest_users.user.handler')->get($id);
            if (!$user) {
                $statusCode = Codes::HTTP_CREATED;
                $user = $this->container->get('rest_users.user.handler')->post(
                    $request->request->get('user')
                );
            } else {
                $statusCode = Codes::HTTP_NO_CONTENT;
                
                $user = $this->container->get('rest_users.user.handler')->put(
                    $user,
                    $request->request->get('user')
                );
            }

            $routeOptions = array(
                'id' => $user->getId(),
                '_format' => $request->get('_format')
            );

            return $this->routeRedirectView('get_user', $routeOptions, $statusCode);

        } catch (InvalidFormException $exception) {

            return $exception->getForm();
        }
    }

    /**
     * Update existing user from the submitted data or create a new user at a specific location.
     *
     * @ApiDoc(
     *   resource = true,
     *   input = "Acme\DemoBundle\Form\UserType",
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     400 = "Returned when the form has errors"
     *   }
     * )
     *
     * @Annotations\View(
     *  template = "RestUsersBundle:User:editUser.html.twig",
     *  templateVar = "form"
     * )
     *
     * @param Request $request the request object
     * @param int     $id      the user id
     *
     * @return FormTypeInterface|View
     *
     * @throws NotFoundHttpException when user not exist
     */
    public function patchUserAction(Request $request, $id)
    {
        try {
            $user = $this->container->get('rest_users.user.handler')->patch(
                $this->getOr404($id),
                $request->request->get('user')
            );

            $routeOptions = array(
                'id' => $user->getId(),
                '_format' => $request->get('_format')
            );

            return $this->routeRedirectView('get_user', $routeOptions, Codes::HTTP_NO_CONTENT);

        } catch (InvalidFormException $exception) {

            return $exception->getForm();
        }
    }

    /**
     * Fetch a User or throw an 404 Exception.
     *
     * @param mixed $id
     *
     * @return UserInterface
     *
     * @throws NotFoundHttpException
     */
    protected function getOr404($id)
    {
        if (!($user = $this->container->get('rest_users.user.handler')->get($id))) {
            throw new NotFoundHttpException(sprintf('The resource \'%s\' was not found.',$id));
        }

        return $user;
    }

    /**
     * Delete user
     *
     * @ApiDoc(
     *   resource = true,
     *   statusCodes = {
     *     204 = "Returned when successful",
     *     404 = "Returned when user not found"
     *   }
     * )
     *
     * @param int     $id      the user id
     *
     * @return FormTypeInterface|View
     */
    public function deleteUsersAction($id)
    {
        $logger = $this->get('logger');
        $logger->info(print_r('asd',true));
        $logger->info(print_r($id,true));
        if ($user = $this->container->get('rest_users.user.handler')->get($id)) {
            $statusCode = Codes::HTTP_NO_CONTENT;
            $this->container->get('rest_users.user.handler')->remove($user);
        } else {
            $statusCode = Codes::HTTP_NOT_FOUND;
        }
        $routeOptions = [];
        return $this->routeRedirectView('get_users', $routeOptions, $statusCode);
    }
}
