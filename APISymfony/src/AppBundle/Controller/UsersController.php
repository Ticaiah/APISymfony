<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    // Routes en mode annotation qu'on peut changer dans le routing yml
    /**
     * @Route("/users", name="users-list",methods={"GET"})
     */
    // On récupère tous les users du repo "users"
    public function getUsersAction()
    {
        $users = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Users')
            ->findAll();
        /* @var $users Users[] */

        $formatted = [];
        foreach ($users as $user) {
            $formatted[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'surname' => $user->getSurname(),
                'mail' => $user->getMail(),
                'role' => $user->getRole(),
            ];
        }
        return new JsonResponse($formatted);
    }
    // on récupère un user en fonction de l'id mis en url
    /**
     * @Route("/users/{id}", name="userbyid", methods={"GET"})
     */

    public function getUsersIDAction($id)
    {
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Users')
            ->find($id);
        /* @var $user Users */

            $formatted= [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'surname' => $user->getSurname(),
                'mail' => $user->getMail(),
                'role' => $user->getRole(),
            ];
        return new JsonResponse($formatted);
    }
    // On crée un user
    /**
     * @Route("/users/", name="user_post", methods={"POST"})
     */
    public function postPlacesAction(Request $request)
    {
        $user = new Users();
        $user->setName($request->get('name'))
            ->setSurname($request->get('surname'))
            ->setMail($request->get('mail'))
            ->setRole($request->get('role'));

        $em = $this->get('doctrine.orm.entity_manager');
        $em->persist($user);
        $em->flush();

        return new JsonResponse($user);
    }
    // On modifie un user en fonction de son id mis en url
    /**
     * @Route("/users/{user_id}", name="user_put", methods={"PUT"})
     */
    public function updateUserAction(Request $request)
    {
        // on récupère l'user existant...
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Users')
            ->find($request->get('user_id'));
        /* @var $user Users */

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        $user->setName($request->get('name'))
            ->setSurname($request->get('surname'))
            ->setMail($request->get('mail'))
            ->setRole($request->get('role'));
        $em = $this->get('doctrine.orm.entity_manager');
        // et on le merge avec les modifications apportées
        $em->merge($user);
        $em->flush();
        return new JsonResponse($user);
    }
    /**
     * @Route("/users/{user_id}", name="role_patch", methods={"PATCH"})
     */
    public function updateRoleAction(Request $request)
    {
        // on récupère l'user existant...
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Users')
            ->find($request->get('user_id'));
        /* @var $user Users */

        if (empty($user)) {
            return new JsonResponse(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        $user->setRole($request->get('role'));
        $em = $this->get('doctrine.orm.entity_manager');
        // et on le merge avec les modifications apportées
        $em->merge($user);
        $em->flush();
        return new JsonResponse($user);
    }
}
