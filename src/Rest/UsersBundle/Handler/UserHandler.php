<?php

namespace Rest\UsersBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use Rest\UsersBundle\Model\UserInterface;
use Rest\UsersBundle\Form\UserType;
use Rest\UsersBundle\Exception\InvalidFormException;

class UserHandler
{
    private $om;
    private $entityClass;
    private $repository;
    private $formFactory;

    public function __construct(ObjectManager $om, $entityClass, FormFactoryInterface $formFactory)
    {
        $this->om = $om;
        $this->entityClass = $entityClass;
        $this->repository = $this->om->getRepository($this->entityClass);
        $this->formFactory = $formFactory;
    }

    /**
     * Get a User.
     *
     * @param mixed $id
     *
     * @return UserInterface
     */
    public function get($id)
    {
        return $this->processUser($this->repository->find($id));
    }

    /**
     * Get a list of Users.
     *
     * @param int $limit  the limit of the result
     * @param int $offset starting from the offset
     *
     * @return array
     */
    public function all($limit = 5, $offset = 0)
    {
        return $this->processUser($this->repository->findBy(array(), null, $limit, $offset));
    }

    /**
     * Create a new User.
     *
     * @param array $parameters
     *
     * @return UserInterface
     */
    public function post(array $parameters)
    {
        unset($parameters['id']);
        $user = $this->createUser();
        return $this->processForm($user, $parameters, 'POST');
    }

    /**
     * Edit a User.
     *
     * @param UserInterface $user
     * @param array         $parameters
     *
     * @return UserInterface
     */
    public function put(UserInterface $user, array $parameters)
    {
        unset($parameters['id']);
        return $this->processForm($user, $parameters, 'PUT');
    }

    /**
     * Partially update a User.
     *
     * @param UserInterface $user
     * @param array         $parameters
     *
     * @return UserInterface
     */
    public function patch(UserInterface $user, array $parameters)
    {
        return $this->processForm($user, $parameters, 'PATCH');
    }

    public function remove(UserInterface $user)
    {
        $this->om->remove($user);
        $this->om->flush();
    }
    /**
     * Processes the form.
     *
     * @param UserInterface $user
     * @param array         $parameters
     * @param String        $method
     *
     * @return UserInterface
     *
     * @throws \Rest\UsersBundle\Exception\InvalidFormException
     */
    private function processForm(UserInterface $user, array $parameters, $method = "PUT")
    {
        $form = $this->formFactory->create(new UserType(), $user, array('method' => $method));
//        print_r($form);
        $form->submit($parameters, 'PATCH' !== $method);

        if ($form->isValid()) {

            $user = $form->getData();
            $this->om->persist($user);
            $this->om->flush();

            return $user;
        }

        throw new InvalidFormException('Invalid submitted data', $form);
    }

    private function createUser()
    {
        return new $this->entityClass();
    }


    private function processUser($users)
    {
//        foreach($users as $user) {
//            $user->photo_path = '/web/bundles/'.$user->getSrc().'.jpg';
//        }
        return $users;
    }
}