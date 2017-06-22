<?php

namespace AppBundle\Controller\Backend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\State;

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $startTime = mktime(0, 0, 0, date("m", time()), date("d", time()), date("Y", time())) - (60*60*24*31);
        $endTime = time();       
        $tingress = 0;
        $tegress = 0;
        for($s=$startTime;$s<=$endTime;$s+=60*60*24){
            $e = $s + (60*60*24);
            $cashes = $em->getRepository('AppBundle:Cash')->createQueryBuilder('c')
                            ->where('c.datetime > :startTime')
                            ->andWhere('c.datetime < :endTime')
                            ->setParameter('startTime', $s)
                            ->setParameter('endTime', $e)
                            ->getQuery()
                            ->getResult();

            $ingress = 0;
            $egress = 0;

            foreach ($cashes as $key => $cash) {
                if ($cash->getIngress()){
                    foreach ($cash->getItems() as $key => $item) {
                        $ingress = $ingress + ($item->getProduct()->getPrice() * $item->getQuantity());    
                    }
                }else{
                    $egress = $cash->getAmmount();
                }
            }

            $tingress += $ingress;
            $tegress += $egress;

            $dailySale = array('y' => date("Y-m-d", $s), 'ingress' => $ingress, 'egress' => $egress);
            $dailySales[] = $dailySale;
        }
  
        $totalSales = array(array('label' => 'Ingresos', 'value' => $tingress), array('label' => 'Egresos', 'value' => $tegress));
        
        return $this->render('backend/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
            'dailySales' => $dailySales,
            'totalSales' => $totalSales
        ]);
    }
}
