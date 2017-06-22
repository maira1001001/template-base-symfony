<?php

// src/AppBundle/Twig/AppExtension.php
namespace AppBundle\Twig;

use AppBundle\Entity\User;
use AppBundle\Entity\Userconfiguration;
use AppBundle\Entity\Ticket;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Validator\Constraints\DateTime;

class AppExtension extends \Twig_Extension
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var SymfonyComponentDependencyInjectionContainerInterface
     */
    protected $container;

    /**
     * Available locales
     */
    private $locales;

    public function __construct($container = null, $request, $locale, $media)
    {
        $this->container = $container;
        $this->request = $request;
        $this->locales = array('en', 'es');
        $this->media = $media;
    }

    public function getGlobals() {
        $gnrls = $this->container->get('app.helper.general')->getAll();
        $generals = array();
        foreach ($gnrls as $key => $value) {
            $generals[$value->getName()] =  $value->getValue();
        }
        return array(
            'generals_helper' => $generals,
        );
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('locale_date', array($this, 'localeDate')),
            new \Twig_SimpleFilter('gender', array($this, 'gender')),
            new \Twig_SimpleFilter('role', array($this, 'role')),
            new \Twig_SimpleFilter('url', array($this, 'url')),
        );
    }

    public function gender($gender, $locale = null)
    {
        $locale = ($locale == null)?$this->parameters['locale']:$locale;
        if (!in_array($locale, $this->locales)) {
            return $gender;
        }

        $gender_long['en'] = array(
            'Male',
            'Female'
        );

        $gender_long['es'] = array(
            'Masculino',
            'Femenino'
        );

        $gender_short['en'] = array(
            'M',
            'F'
        );

        $gender_short['es'] = array(
            'M',
            'F'
        );

        $gender = str_replace($gender_long["en"], $gender_long[$locale], $gender);
        $gender = str_replace($gender_short["en"], $gender_short[$locale], $gender);
        return $gender;
    }

    public function localeDate($date, $format, $locale = null)
    {
        $locale = ($locale == null)?$this->parameters['locale']:$locale;
        if (!in_array($locale, $this->locales)) {
            return $gender;
        }

        $month_long["en"] = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',
            'July',
            'August',
            'September',
            'October',
            'November',
            'December'
        );

        $month_long["es"] = array(
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Septiembre',
            'Octubre',
            'Noviembre',
            'Diciembre'
        );

        $weekday_long["en"] = array(
            'Monday',
            'Tuesday',
            'Wednesday',
            'Thursday',
            'Friday',
            'Saturday',
            'Sunday'
        );

        $weekday_long["es"] = array(
            'Lunes',
            'Martes',
            'Miércoles',
            'Jueves',
            'Viernes',
            'Sábado',
            'Domingo'
        );

        $weekday_short["en"] = array(
            'Mon',
            'Tue',
            'Wed',
            'Thu',
            'Fri',
            'Sat',
            'Sun'
        );

        $weekday_short["es"] = array(
            'Lun',
            'Mar',
            'Mie',
            'Jue',
            'Vie',
            'Sab',
            'Dom'
        );

        $fecha = date($format, $date);
        $fecha = str_replace($month_long["en"], $month_long[$locale], $fecha);
        $fecha = str_replace($weekday_long["en"], $weekday_long[$locale], $fecha);
        $fecha = str_replace($weekday_short["en"], $weekday_short[$locale], $fecha);

        return $fecha;
    }

    public function role($role, $locale = null) {
        /*if (in_array("ROLE_ADMIN", $role)) {
            $role = "ROLE_ADMIN";
        } else {
            $role = "ROLE_USER";
        }*/

        $locale = ($locale == null)?$this->parameters['locale']:$locale;
        if (!in_array($locale, $this->locales)) {
            return $role;
        }

        if (is_array($role)) {
            unset($role[count($role)-1]);
            $role = implode(", ", $role);
        }

        $roles['sys'] = array(
            'ROLE_ADMIN',
            'ROLE_OPERATOR',
            'ROLE_VISITOR'
        );

        $roles['en'] = array(
            'Administrator',
            'Operator',
            'Visitor'
        );

        $roles['es'] = array(
            'Administrador',
            'Operador',
            'Visitante'
        );

        $role = str_replace($roles["sys"], $roles[$locale], $role);
        return $role;
    }
    
    public function url($url) {
        $url = strtolower($url);
        $url = str_replace(' ', '-', $url);
        return preg_replace('/[^A-Za-z0-9\-]/', '', $url);
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('aspect_ratio', array($this, 'aspectRatio')),
            new \Twig_SimpleFunction('media_asset', array($this, 'mediaAsset')),
            new \Twig_SimpleFunction('avatar_asset', array($this, 'avatarAsset')),
            new \Twig_SimpleFunction('file_asset', array($this, 'fileAsset')),
            new \Twig_SimpleFunction('time_diff', array($this, 'timeDiff')),
            new \Twig_SimpleFunction('get_route', array($this, 'getRoute')),
            new \Twig_SimpleFunction('get_route_root', array($this, 'getRouteRoot')),
            new \Twig_SimpleFunction('is_route', array($this, 'isRoute')),
            new \Twig_SimpleFunction('is_route_root', array($this, 'isRouteRoot')),
            new \Twig_SimpleFunction('is_graphic_notifications', array($this, 'isGraphicNotifications')),
            new \Twig_SimpleFunction('is_sound_notifications', array($this, 'isSoundNotifications')),
            new \Twig_SimpleFunction('is_lighttheme', array($this, 'isLightTheme')),
            new \Twig_SimpleFunction('get_theme', array($this, 'getTheme')),
            new \Twig_SimpleFunction('is_current_theme', array($this, 'isCurrentTheme')),
        );
    }

    public function aspectRatio($width, $height, $str = null) {
        $aspect = ($width>$height)?$width/$height:$height/$width;
        if ($aspect != (int)$aspect) {
            $aspect = number_format($aspect, 2);
        }
        if ($str) {
            return ($width>$height)?$aspect.':1':'1:'.$aspect;
        }
        return $aspect;
    }

    /**
     * Media asset
     */
    public function mediaAsset($folder, $filename) {
        return $this->container->get('assets.packages')->getUrl($this->container->get("app.uploader")->imageFilename($folder, $filename));
    }

    /**
     * Avatar asset
     */
    public function avatarAsset($filename) {
        return $this->mediaAsset($this->container->getParameter('media')['media'].'/'.$this->container->getParameter('media')['avatar'], $filename);
    }

    /**
     * File asset
     */
    public function fileAsset($filename) {
        return $this->mediaAsset($this->container->getParameter('media')['media'].'/'.$this->container->getParameter('media')['file'], $filename);
    }

    /**
     * Time remaining
     */
    public function timeDiff($init) {
        if ($init < time()){
            $init = time();
        }
        $rd_one = new \DateTime();
        $rd_one->setTimestamp($init);
        
        $rd_two = new \DateTime();
        $rd_two->setTimestamp(time());
         
        $rd_diff = $rd_one->diff($rd_two);

        if ($rd_diff->d == 1){
            $d = 'dia';
        }else{
            $d = 'dias';
        }
        if ($rd_diff->h == 1){
            $h = 'hora';            
        }else{
            $h = 'horas';
        }
        return $rd_diff->d.' '.$d.' '.$rd_diff->h.' '.$h;
    }

    /**
     * Get route
     */
    public function getRoute()
    {
        if(null !== $this->request)
        {
            return $this->request->getCurrentRequest()->get("_route");
        }
        return null;
    }

    /**
     * Get route root
     */
    public function getRouteRoot()
    {
        if(null !== $this->request)
        {
            return explode("_", $this->request->getCurrentRequest()->get("_route"))[0];
        }
        return null;
    }

    public function isRoute($s) {
        return ($s == $this->getRoute());
    }

    public function isRouteRoot($s) {
        return ($s == $this->getRouteRoot());
    }

    /**
     * Get if graphic notifications
     */
    public function isGraphicNotifications($user)
    {
        $userConfig = $user->getConfigurations();
        return ($userConfig->getGraphicNotifications() == 1);
    }

    /**
     * Get if sound notifications
     */
    public function isSoundNotifications($user)
    {
        $userConfig = $user->getConfigurations();
        return ($userConfig->getSoundNotifications() == 1);
    }

    /**
     * Get if light theme
     */
    public function isLightTheme($user)
    {
        $userConfig = $user->getConfigurations();
        return ($userConfig->getLightTheme() == 1);
    }

    /**
     * Get get theme
     */
    public function getTheme($user)
    {
        $userConfig = $user->getConfigurations();
        return $userConfig->getTheme();
    }

    /**
     * Get is current theme
     */
    public function isCurrentTheme($user, $theme)
    {
        $userConfig = $user->getConfigurations();
        return ($userConfig->getTheme() == $theme);
    }

    public function getName()
    {
        return 'app_extension';
    }
}
