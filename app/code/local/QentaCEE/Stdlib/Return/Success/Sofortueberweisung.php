<?php
/**
 * Shop System Plugins - Terms of Use
 *
 * The plugins offered are provided free of charge by QENTA Payment CEE GmbH
 * (abbreviated to Qenta CEE) and are explicitly not part of the Qenta CEE range of
 * products and services.
 *
 * They have been tested and approved for full functionality in the standard configuration
 * (status on delivery) of the corresponding shop system. They are under General Public
 * License Version 2 (GPLv2) and can be used, developed and passed on to third parties under
 * the same terms.
 *
 * However, Qenta CEE does not provide any guarantee or accept any liability for any errors
 * occurring when used in an enhanced, customized shop system configuration.
 *
 * Operation in an enhanced, customized configuration is at your own risk and requires a
 * comprehensive test phase by the user of the plugin.
 *
 * Customers use the plugins at their own risk. Qenta CEE does not guarantee their full
 * functionality neither does Qenta CEE assume liability for any disadvantages related to
 * the use of the plugins. Additionally, Qenta CEE does not guarantee the full functionality
 * for customized shop systems or installed plugins of other vendors of plugins within the same
 * shop system.
 *
 * Customers are responsible for testing the plugin's functionality before starting productive
 * operation.
 *
 * By installing the plugin into the shop system the customer agrees to these terms of use.
 * Please do not use the plugin if you do not agree to these terms of use!
 */


/**
 * @name QentaCEE_Stdlib_Return_Success_Sofortueberweisung
 * @category QentaCEE
 * @package QentaCEE_Stdlib
 * @subpackage Return_Success
 * @abstract
 */
abstract class QentaCEE_Stdlib_Return_Success_Sofortueberweisung extends QentaCEE_Stdlib_Return_Success
{

    /**
     * getter for the return parameter senderAccountOwner
     *
     * @return string
     */
    public function getSenderAccountOwner()
    {
        return $this->senderAccountOwner;
    }

    /**
     * getter for the return parameter senderAccountNumber
     *
     * @return string
     */
    public function getSenderAccountNumber()
    {
        return $this->senderAccountNumber;
    }

    /**
     * getter for the return parameter senderBankNumber
     *
     * @return string
     */
    public function getSenderBankNumber()
    {
        return $this->senderBankNumber;
    }

    /**
     * getter for the return parameter senderBankName
     *
     * @return string
     */
    public function getSenderBankName()
    {
        return $this->senderBankName;
    }

    /**
     * getter for the return parameter senderBIC
     *
     * @return string
     */
    public function getSenderBic()
    {
        return $this->senderBIC;
    }

    /**
     * getter for the return parameter senderIBAN
     *
     * @return string
     */
    public function getSenderIban()
    {
        return $this->senderIBAN;
    }

    /**
     * getter for the return parameter senderCountry
     *
     * @return string
     */
    public function getSenderCountry()
    {
        return $this->senderCountry;
    }

    /**
     * getter for the return parameter securityCriteria
     *
     * @return string
     */
    public function getSecurityCriteria()
    {
        return $this->securityCriteria;
    }
}