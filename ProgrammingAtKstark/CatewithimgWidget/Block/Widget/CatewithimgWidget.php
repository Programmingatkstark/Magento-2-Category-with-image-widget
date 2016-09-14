<?php
namespace ProgrammingAtKstark\CatewithimgWidget\Block\Widget;

class CatewithimgWidget extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
	protected $_template = 'widget/categorywidget.phtml';

    /**
     * Default value for products count that will be shown
     */
     protected $_categoryHelper;
     protected $categoryFlatConfig;

     protected $topMenu;
     protected $_categoryFactory;

     protected $mainTitle;
     protected $tagLine;

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magento\Catalog\Helper\Category $categoryHelper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Helper\Category $categoryHelper,
        \Magento\Catalog\Model\Indexer\Category\Flat\State $categoryFlatState,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        \Magento\Theme\Block\Html\Topmenu $topMenu
    ) {
        $this->_categoryHelper = $categoryHelper;
        $this->categoryFlatConfig = $categoryFlatState;
        $this->topMenu = $topMenu;
        $this->_categoryFactory = $categoryFactory;
        parent::__construct($context);
    }
    /**
     * Return categories helper
     */
    public function getCategoryHelper()
    {
        return $this->_categoryHelper;
    }

    public function getCategorymodel($id)
    {
         $_category = $this->_categoryFactory->create();
            $_category->load($id);
            return $_category;
    }
    /**
     * Retrieve current store categories
     *
     * @param bool|string $sorted
     * @param bool $asCollection
     * @param bool $toLoad
     * @return \Magento\Framework\Data\Tree\Node\Collection|\Magento\Catalog\Model\Resource\Category\Collection|array
     */

    /**
     * Retrieve collection of selected categories
    */
   public function getCategoryCollection()
    {
        $rootCat = $this->getData('parentcat');


        $category = $this->_categoryFactory->create();
        $collection = $category
                      ->getCollection()
                      ->addAttributeToSelect('image')
                      ->addIdFilter($rootCat);
        return $collection;
    }
    /**
     * Retrieve tag line for widget
    */
    public function getTagLine()
    {
        $tagLine = $this->getData('tagline');
        return $tagLine;
    }
    /**
     * Retrieve main title for widget
    */
    public function getMainTitle()
    {
        $mainTitle = $this->getData('blocktitle');
        return $mainTitle;
    }
}