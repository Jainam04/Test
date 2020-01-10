<?php
  
namespace Product\Collection\Controller\Index;
  
use Magento\Framework\App\Action\Context;
  
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_productCollectionFactory;
  
    public function __construct(Context $context, \Magento\Framework\View\Result\PageFactory $productCollectionFactory)
    {
        $this->_productCollectionFactory = $productCollectionFactory;
 
        parent::__construct($context);
    }
  
    public function execute()
    {
        $collection = $this->_productCollectionFactory->create();
        echo "Collection";

        return $collection;
    }
}
?>