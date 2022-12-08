<?php

namespace AlbertMage\Notification\Controller\Adminhtml\Index;

class Index extends \Magento\Backend\App\Action
{

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
	public function __construct(
		\Magento\Backend\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory
	)
	{
		parent::__construct($context);
		$this->resultPageFactory = $resultPageFactory;
	}

    /**
     * Check the permission to run it
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('AlbertMage_Notification::grid');
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
	public function execute()
	{
		$resultPage = $this->resultPageFactory->create();
		$resultPage->setActiveMenu('AlbertMage_Notification::grid');
        $resultPage->addBreadcrumb(__('Notification'), __('Notification'));
        $resultPage->addBreadcrumb(__('Notification Grid'), __('Purchased Grid'));
		$resultPage->getConfig()->getTitle()->prepend((__('Message')));

		return $resultPage;
	}


}