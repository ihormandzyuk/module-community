<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

declare(strict_types=1);

namespace Magefan\Community\Block\Adminhtml\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

class PreviewButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get button config
     *
     * @return array
     */
    public function getButtonData()
    {
        $data = [];
        if ($this->getObjectId()) {
            $data = [
                'label' => __('Preview'),
                'class' => 'preview',
                'on_click' => 'window.open(\'' . $this->getPreviewUrl() . '\');',
                'sort_order' => 35,
            ];
        }
        return $data;
    }

    /**
     * Get preview url
     *
     * @return string
     */
    public function getPreviewUrl()
    {
        return $this->getUrl('*/*/preview', ['id' => $this->getObjectId()]);
    }
}
