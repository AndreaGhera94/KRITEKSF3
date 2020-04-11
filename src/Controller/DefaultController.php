<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Invoice;
use App\Entity\InvoiceLines;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function index(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $invoice_lines = new InvoiceLines();
        $form = $this->createForm('App\Form\InvoiceLinesType', $invoice_lines);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $invoice_total = count($em->getRepository('App:Invoice')->findAll());

            $date = $form->get('date')->getData();
            
            $invoice = new Invoice();
            $invoice->setInvoiceDate($date);
            $invoice->setInvoiceNumber(($invoice_total + 1));
            $invoice->setClientId(rand());

            $em->persist($invoice);
            $em->flush();

            $invoice_lines->setInvoice($invoice);
            $em->persist($invoice_lines);
            $em->flush();

            return $this->redirectToRoute('default');
		}
        
        return $this->render('default/index.html.twig', [
            'form'   => $form->createView(),
        ]);
    }
}
