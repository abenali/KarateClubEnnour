<?php

namespace WebSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type;

class ContactController extends Controller
{
    public function loadContactFormAction(Request $request)
    {
        $aDefaultData = array('message' => 'Type your message here');
        
        $oForm = $this->createFormBuilder($aDefaultData)
            ->add('name', Type\TextType::class)
            ->add('email', Type\EmailType::class)
            ->add('message', Type\TextareaType::class)
            ->add('Envoyer', Type\SubmitType::class)
            ->getForm();
            
        $oForm->handleRequest($request);

        if ($oForm->isValid()) {
            $data = $oForm->getData();
            var_dump($data);
        }
        
        return $this->render(
            'WebSiteBundle:contact:contact_us.html.twig', 
            array(
                'form' => $oForm->createView()
            )
        );
    }
}
