<?php
/**
 * InlineResponse200
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * LIO - Order Management API
 *
 * API de gerenciamento de pedidos da LIO.
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * InlineResponse200 Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse200 implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'number' => 'string',
        'reference' => 'string',
        'status' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'items' => '\Swagger\Client\Model\OrdersItems[]',
        'notes' => 'string',
        'transactions' => '\Swagger\Client\Model\OrdersTransactions[]',
        'price' => 'int',
        'remaining' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'number' => null,
        'reference' => null,
        'status' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'items' => null,
        'notes' => null,
        'transactions' => null,
        'price' => null,
        'remaining' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'number' => 'number',
        'reference' => 'reference',
        'status' => 'status',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'items' => 'items',
        'notes' => 'notes',
        'transactions' => 'transactions',
        'price' => 'price',
        'remaining' => 'remaining'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'number' => 'setNumber',
        'reference' => 'setReference',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'items' => 'setItems',
        'notes' => 'setNotes',
        'transactions' => 'setTransactions',
        'price' => 'setPrice',
        'remaining' => 'setRemaining'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'number' => 'getNumber',
        'reference' => 'getReference',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'items' => 'getItems',
        'notes' => 'getNotes',
        'transactions' => 'getTransactions',
        'price' => 'getPrice',
        'remaining' => 'getRemaining'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_DRAFT = 'DRAFT';
    const STATUS_ENTERED = 'ENTERED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_PAID = 'PAID';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REJECTED = 'REJECTED';
    const STATUS_RE_ENTERED = 'RE_ENTERED';
    const STATUS_CLOSED = 'CLOSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_ENTERED,
            self::STATUS_CANCELED,
            self::STATUS_PAID,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
            self::STATUS_RE_ENTERED,
            self::STATUS_CLOSED,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['remaining'] = isset($data['remaining']) ? $data['remaining'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalid_properties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalid_properties[] = "'updated_at' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalid_properties[] = "'items' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalid_properties[] = "'transactions' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['remaining'] === null) {
            $invalid_properties[] = "'remaining' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        if ($this->container['created_at'] === null) {
            return false;
        }
        if ($this->container['updated_at'] === null) {
            return false;
        }
        if ($this->container['items'] === null) {
            return false;
        }
        if ($this->container['transactions'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['remaining'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id UUID que identifica unicamente o pedido.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets number
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     * @param string $number Número do pedido. Gerelmente esse número representa o identificador do pedido em um sistema externo através da integração com parceiros.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets reference
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     * @param string $reference Referência do pedido. Utilizada para facilitar o acesso ou localização do mesmo.
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status do pedido.
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at Data de criação do pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z)
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at Data de última atualização do pedido. A data deve estar no formato: YYYY-MM-DDThh:mm:ssZ (Exemplo: 20151020T13:13:29.000Z)
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets items
     * @return \Swagger\Client\Model\OrdersItems[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     * @param \Swagger\Client\Model\OrdersItems[] $items Lista de itens contidos no pedido.
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes Campo disponível para uso do Merchant para comunicação.
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets transactions
     * @return \Swagger\Client\Model\OrdersTransactions[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     * @param \Swagger\Client\Model\OrdersTransactions[] $transactions Lista de transações de pagamento (ou outros tipos) efetuadas no pedido.
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price Valor total do pedido. Exemplo: O valor de R$ 10,00 é representado como 1000.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets remaining
     * @return int
     */
    public function getRemaining()
    {
        return $this->container['remaining'];
    }

    /**
     * Sets remaining
     * @param int $remaining Valor restante do pagamento do pedido.Exemplo: O valor de R$ 10,00 é representado como 1000.
     * @return $this
     */
    public function setRemaining($remaining)
    {
        $this->container['remaining'] = $remaining;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


