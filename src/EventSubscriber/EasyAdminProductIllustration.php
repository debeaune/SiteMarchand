<?php

namespace App\EventSubscriber;

use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistEvent;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class EasyAdminSubscriber implements EventSubscriberInterface
{
    private $appKernel;

    public function __construct(KernelInterface $appKernel)
    {
        $this->appKernel = $appKernel;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['setIllustration'],
            BeforeEntityUpdatedEvent::class => ['updateIllustration']
        ];
    }

    public function uploadIllustration($event,$entityName)
    {
        $entity = $event->getEntityInstance();

        $tmp_name = $FILES[$entityName]['tmp_name']['illustration'];
        $filename = uniqid();

        $extension = pathinfo($_FILES[$entityName]['name']['illustration'],PATHINFO_EXTENSION); 

        $project_dir= $this->appKernel->getProjectDir();

        move_uploaded_file($tpm_name,$project_dir.'/public/uploads/'.$filename.'.'.$extension);

        $entity->setIllustration($filename.'.'.$extension);
    }

    public function updateIllustration(BeforeEntityUpdatedEvent $event)
    {
        if (!($event->getEntityInstance() instanceof Product) && !($event->getEntityInstance() instanceof Header ))
        {
           return; 
        }

        $reflexion = new \ReflectionClass($event->getEntityInstance());
        $entityName = $reflexion->getShortName();

        if($_FILES['product']['tmp_name']['illustration'] != '')
        {
           $this->uploadIllustration($event);
        }
    }

    public function setIllustration(BeforeEntityPersistEvent $event)
    {
        $reflexion = new \ReflectionClass($event->getEntityInstance());
        $entityName = $reflexion->getShortName();

        if (!($event->getEntityInstance() instanceof Product) && !($event->getEntityInstance() instanceof Header ))
        {
           return; 
        }

        $this->uploadIllustration($event);
    }
}