<?php
/**
 * Copyright © 2024 MagoArab. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagoArab\WhatsappChat\Ui\DataProvider;

use Magento\Framework\View\Element\UiComponent\DataProvider\DataProvider as UiDataProvider;
use MagoArab\WhatsappChat\Api\ButtonRepositoryInterface;

/**
 * Settings data provider
 */
class SettingsDataProvider extends UiDataProvider
{
    /**
     * @var ButtonRepositoryInterface
     */
    private $buttonRepository;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param \Magento\Framework\Api\Search\ReportingInterface $reporting
     * @param \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder
     * @param \Magento\Framework\App\RequestInterface $request
     * @param \Magento\Framework\Api\FilterBuilder $filterBuilder
     * @param ButtonRepositoryInterface $buttonRepository
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        \Magento\Framework\Api\Search\ReportingInterface $reporting,
        \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder,
        \Magento\Framework\App\RequestInterface $request,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        ButtonRepositoryInterface $buttonRepository,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct(
            $name,
            $primaryFieldName,
            $requestFieldName,
            $reporting,
            $searchCriteriaBuilder,
            $request,
            $filterBuilder,
            $meta,
            $data
        );
        $this->buttonRepository = $buttonRepository;
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getData()
    {
        $button = $this->buttonRepository->get();
        
        return [
            'totalRecords' => 1,
            'items' => [
                [
                    'id' => $button->getId(),
                    'layout' => $button->getLayout(),
                    'box' => $button->getBox(),
                    'position' => $button->getPosition(),
                    'text' => $button->getText(),
                    'message' => $button->getMessage(),
                    'icon' => $button->getIcon(),
                    'type' => $button->getType(),
                    'phone' => $button->getPhone(),
                    'group' => $button->getGroup(),
                    'developer' => $button->getDeveloper(),
                    'rounded' => $button->getRounded(),
                    'timefrom' => $button->getTimefrom(),
                    'timeto' => $button->getTimeto(),
                    'timedays' => $button->getTimedays(),
                    'timezone' => $button->getTimezone(),
                    'visibility' => $button->getVisibility(),
                    'animation_name' => $button->getAnimationName(),
                    'animation_delay' => $button->getAnimationDelay(),
                    'created_at' => $button->getCreatedAt(),
                    'updated_at' => $button->getUpdatedAt()
                ]
            ]
        ];
    }
}
