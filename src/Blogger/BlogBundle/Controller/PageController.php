<?php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller {

  public function indexAction() {
    return $this->render('BloggerBlogBundle:Page:index.html.twig');
  }

  public function aboutAction() {
    return $this->render('BloggerBlogBundle:Page:about.html.twig');
  }

  public function contactsAction() {
    $enquiry = new Enquiry();
    $form = $this->createForm(new EnquiryType(), $enquiry);

    $request = $this->getRequest();
    if ($request->getMethod() == 'POST') {
      $form->bind($request);

      if ($form->isValid()) {
        return $this->redirect($this->generateUrl('blogger_blog_contacts'));
      }
    }
    return $this->render('BloggerBlogBundle:Page:contacts.html.twig', array(
      'form' => $form->createView(),
    ));
//    return $this->render('BloggerBlogBundle:Page:contacts.html.twig');
  }
}