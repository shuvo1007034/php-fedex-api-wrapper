<?php
namespace FedEx\OpenShipService\SimpleType;

use FedEx\AbstractSimpleType;

/**
 * This indicates the different statements, declarations, acts, and certifications that may apply to a shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  OpenShip Service
 */
class CustomsDeclarationStatementType extends AbstractSimpleType
{
    const _NAFTA_LOW_VALUE = 'NAFTA_LOW_VALUE';
}
