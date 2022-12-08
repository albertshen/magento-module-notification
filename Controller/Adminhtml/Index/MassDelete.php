<?php
namespace AlbertMage\Notification\Controller\Adminhtml\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;
use Magento\Ui\Component\MassAction\Filter;
use AlbertMage\Notification\Model\ResourceModel\Notification\CollectionFactory;
use AlbertMage\Notification\Api\NotificationRepositoryInterface;
use Magento\Framework\Exception\NotFoundException;

class MassDelete extends Action
{

    /**
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @var NotificationRepositoryInterface
     */
    private $notificationRepository;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     * @param NotificationRepositoryInterface $notificationRepository
     */
    public function __construct(
        Action\Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory,
        NotificationRepositoryInterface $notificationRepository
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->notificationRepository = $notificationRepository;
        parent::__construct($context);
    }

    /**
     * Dispatch request
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            throw new NotFoundException(__('Page not found'));
        }
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $notificationDeleted = 0;
        foreach ($collection->getItems() as $notification) {
            $this->notificationRepository->delete($notification);
            $notificationDeleted++;
        }

        if ($notificationDeleted) {
            $this->messageManager->addSuccessMessage(
                __('A total of %1 record(s) have been deleted.', $notificationDeleted)
            );
        }

        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('notification/index/index');
    }
}
