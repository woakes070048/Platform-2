<?php

namespace Ds\Bundle\CommunicationBundle\Widget\Channel;

use Ds\Bundle\WidgetBundle\Widget\Widget;

/**
 * Class EntityWidget
 */
class EntityWidget extends Widget
{
    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return 'ds.communication.channel.widget.entity';
    }

    /**
     * {@inheritdoc}
     */
    public function getContent(array $data = [])
    {
        return $this->templating->render('@DsCommunicationBundle/Resources/views/Channel/widget/entity.html.twig', $data);
    }
}
