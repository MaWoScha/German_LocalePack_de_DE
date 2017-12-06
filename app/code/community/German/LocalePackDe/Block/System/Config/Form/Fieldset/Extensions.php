<?php
/**
 * @category  German
 * @package   German_LocalePack
 * @authors   MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @developer MaWoScha <mawoscha@siempro.co, http://www.siempro.co/>
 * @version   0.1.0
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class German_LocalePackDe_Block_System_Config_Form_Fieldset_Extensions
    extends Mage_Adminhtml_Block_System_Config_Form_Fieldset
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $helper = Mage::helper("localepackde");

        $html  = $this->_getHeaderHtml($element);
        $html .= "<p>".$helper->__("The installed language pack only provides translations of in Magento existing texts. If you want to prepare your Magento store on the legal requirements in %s or expand common payment methods, we recommend to install the following additional extensions.",
                $helper->__("Germany"))."</p>";
        $html .= "<hr style='margin-top:15px; margin-bottom:5px;' />";
        $html .= "<h3 style='margin-top:20px; margin-bottom:10xp;'>".$helper->__("Specific market adjustment for")." ".$helper->__("German and European stores")."</h3>";
        $html .= "<dl>";
        $html .= "<dt><b>FireGento: Mage Setup</b> - <a href='http://www.magentocommerce.com/magento-connect/catalog/product/view/id/20763/' target='_blank'>Mage Setup</a> ".$helper->__("on")." Magento Connect</dt>";
        $html .= "<dd>".$helper->__("Extension Key for the")." Connect Manager: <span style='color:#EA7601; font-style:italic;'>http://connect20.magentocommerce.com/community/FireGento_MageSetup</span></dd>";
        $html .= "<dt><b>FireGento: German Setup</b> - <a href='http://www.magentocommerce.com/magento-connect/german-setup-6623.html' target='_blank'>German Setup</a> ".$helper->__("on")." Magento Connect</dt>";
        $html .= "<dd>".$helper->__("Extension Key for the")." Connect Manager: <span style='color:#EA7601; font-style:italic;'>http://connect20.magentocommerce.com/community/FireGento_GermanSetup</span></dd>";
        $html .= "<dt><b>Magento DE: German Store</b> - <a href='https://github.com/integer-net/GermanStoreConfig' target='_blank'>Configuration for Magento CE</a></dt>";
        $html .= "<dd>".$helper->__("Preconfigured for the German market")."</dd>";
        $html .= "<dt><b>nr-apps</b> - <a href='http://de.nr-apps.com/store/magento-de.html' target='_blank'>Magento DE</a></dt>";
        $html .= "<dd>".$helper->__("Preconfigured for the German market")."</dd>";
        $html .= "</dl>";
        $html .= "<h3 style='margin-top:20px; margin-bottom:10xp;'>".$helper->__("Common payment methods")."</h3>";
        $html .= "<dl>";
        $html .= "<dt><b>".$helper->__("Debit / direct debit")."</b> - <a href='http://www.magentocommerce.com/magento-connect/catalog/product/view/id/2606/' target='_blank'>DebitPayment</a> ".$helper->__("on")." Magento Connect</dt>";
        $html .= "<dd>".$helper->__("Extension Key for the")." Connect Manager: <span style='color:#EA7601; font-style:italic;'>http://connect20.magentocommerce.com/community/DebitPayment</span></dd>";
        $html .= "<dt><b>".$helper->__("Cash On Delivery")."</b> - <a href='http://www.magentocommerce.com/magento-connect/catalog/product/view/id/2360/' target='_blank'>CashOnDelivery</a> ".$helper->__("on")." Magento Connect</dt>";
        $html .= "<dd>".$helper->__("Extension Key for the")." Connect Manager: <span style='color:#EA7601; font-style:italic;'>http://connect20.magentocommerce.com/community/CashOnDelivery</span></dd>";
        $html .= "<dt><b>".$helper->__("Payment in advance")."</b> - <a href='http://www.magentocommerce.com/magento-connect/catalog/product/view/id/2298/' target='_blank'>BankPayment</a> ".$helper->__("on")." Magento Connect</dt>";
        $html .= "<dd>".$helper->__("Extension Key for the")." Connect Manager: <span style='color:#EA7601; font-style:italic;'>http://connect20.magentocommerce.com/community/BankPayment</span></dd>";
        $html .= "</dl>";
        $html .= $this->_getFooterHtml($element);

        return $html;
    }
}
