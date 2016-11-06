<?php

namespace Rest\UsersBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use Rest\UsersBundle\Model\UserInterface;
use Rest\UsersBundle\Form\UserType;
use Rest\UsersBundle\Exception\InvalidFormException;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

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
     * Get a list of Users.
     *
     * @param int $page  page number of list result
     *
     * @return array
     */
    public function allPerPage($page = 1)
    {
        $query = $this->repository->createQueryBuilder('u')
//            ->where('u.id >= :id')
//            ->setParameter('id', '1')
//            ->orderBy('p.price', 'ASC')
            ->getQuery();

//        $arUsers = $query->getResult();


        $adapter = new DoctrineORMAdapter($query);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(5);
        $pagerfanta->setCurrentPage($page);

        $arUsers = [];
        foreach ($pagerfanta->getCurrentPageResults() as $result) {
            $arUsers[] = $result;
        }
        $arPages = [];
        for($i=1; $i<=$pagerfanta->getNbPages();$i++){
            $arPages[] = $i;
        }

        $arUsersData = [
            0 => $pagerfanta->hasPreviousPage()?$pagerfanta->getPreviousPage():0,//previous page
            1 => $pagerfanta->getCurrentPage(),//current page
            2 => $pagerfanta->hasNextPage()?$pagerfanta->getNextPage():0,//next Page
            3 => $arPages,//count of pages
            4 => $arUsers,//users
        ];
        return $arUsersData;
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
        if(!isset($parameters['src'])){
            $parameters['src']='2';
        }
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